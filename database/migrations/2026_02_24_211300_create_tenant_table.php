<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenant', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique(); // Identificador único para API
            $table->string('name'); // Nombre del consultorio/tenant
            $table->string('slug')->unique(); // subdominio o URL amigable
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('tax_id')->nullable(); // RUC o identificación fiscal
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->json('settings')->nullable(); // Configuraciones específicas
            $table->json('modules')->nullable(); // Módulos activos
            $table->enum('status', ['active', 'inactive', 'suspended', 'trial'])->default('trial');
            $table->timestamp('trial_ends_at')->nullable();
            $table->timestamp('subscription_ends_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            // Índices
            $table->index('status');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant');
    }
}
