<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Patient;
use App\Doctor;
class RoleAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()['cache']->forget('spatie.permission.cache');
            //creamos los roles de Administrador,Medico y Paciente
          $role1 = Role::create(['name' => 'admin']);
          $role2 = Role::create(['name' => 'medico']);
          $role3 = Role::create(['name' => 'paciente']);

          //creamos los permisos Administrador
        /*Permission::create(['name'=>'doctores'])->syncRoles([$role1]);
        Permission::create(['name'=>'pacientes'])->syncRoles([$role1,$role2]);*/

        ///crearmos el usario por defecto
        $user_password = Hash::make('admin1234');
        $medic_password = Hash::make('medic1234');
        $patie_password = Hash::make('patie1234');
        $admin= User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $user_password]);
        $admin->assignRole($role1);

        $medico = User::create([
            'name' => 'medico',
            'email' => 'medico@gmail.com',
            'password' => $medic_password]);
        $medico->assignRole($role2);
        $me=Doctor::create([
            'user_id'=>$medico->id,
        ]);
        $paciente = User::create([
            'name' => 'paciente',
            'email' => 'paciente@gmail.com',
            'password' => $patie_password]);
        $paciente->assignRole($role3);
        $pa=Patient::create([
            'user_id'=>$paciente->id,
        ]);

    }
}
