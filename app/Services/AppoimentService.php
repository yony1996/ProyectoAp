<?php
namespace App\Services;

use App\Appoiment;
use App\User;
use Illuminate\Pagination\LengthAwarePaginator;
class AppoimentService
{
    private User $user;

    public function __construct(?User $user = null)
    {
        $this->user = $user ?? auth()->user();
    }
    /**
     * Obtener la consulta base filtrada por usuario
     */
    protected function getBaseQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $query = Appoiment::query();

        if ($this->user->hasRole('medico')) {
            $query->where('doctor_id', $this->user->doctor->id);
        } elseif ($this->user->hasRole('paciente')) {
            $query->where('patient_id', $this->user->patient->id);
        }
        // Admin no necesita filtro

        return $query;
    }

    /**
     * Obtener citas por estado
     */
    public function getByStatus(string $status, int $perPage = 5): LengthAwarePaginator
    {
        return $this->getBaseQuery()
            ->where('status', $status)
            ->latest()
            ->paginate($perPage);
    }

    /**
     * Obtener citas pendientes
     */
    public function getPending(int $perPage = 5): LengthAwarePaginator
    {
        return $this->getByStatus('Reservada', $perPage);
    }

    /**
     * Obtener citas confirmadas
     */
    public function getConfirmed(int $perPage = 5): LengthAwarePaginator
    {
        return $this->getByStatus('Confirmada', $perPage);
    }

    /**
     * Obtener citas antiguas (atendidas o canceladas)
     */
    public function getOld(int $perPage = 5): LengthAwarePaginator
    {
        return $this->getBaseQuery()
            ->whereIn('status', ['Atendida', 'Cancelada'])
            ->latest()
            ->paginate($perPage);
    }

    /**
     * Obtener todos los grupos de citas de una vez
     */
    public function getAllGrouped(int $perPage = 5): array
    {
        return [
            'pending' => $this->getPending($perPage),
            'confirmed' => $this->getConfirmed($perPage),
            'old' => $this->getOld($perPage),
        ];
    }
}
