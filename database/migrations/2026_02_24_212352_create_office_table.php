<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('ruc')->nullable()->unique();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();

            // Configuración
            $table->json('business_hours')->nullable(); // Horarios en JSON
            $table->json('configuration')->nullable(); // Configuraciones generales
            $table->json('social_networks')->nullable(); // Links a redes

            // Geolocalización
            $table->decimal('latitud', 10, 8)->nullable();
            $table->decimal('longitud', 11, 8)->nullable();

            // Licencia
           // $table->string('licencia_key')->nullable()->unique();
            $table->enum('plan', ['basic', 'professional', 'business'])->default('basic');
            $table->enum('status', ['active', 'inactive', 'suspended', 'trial'])->default('trial');
            $table->timestamp('activation_date')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->integer('max_users')->default(5);
            $table->integer('max_patients')->default(100);
            $table->integer('max_storage_mb')->default(1024);

            // Estadísticas
            /* $table->integer('total_users')->default(0);
             $table->integer('total_patients')->default(0);
             $table->integer('total_appointments')->default(0);*/
            $table->timestamps();
            $table->softDeletes();
            // Índices
            $table->index('status');
            $table->index('plan');
            $table->index('slug');
            $table->index('ruc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office');
    }
}
