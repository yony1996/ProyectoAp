<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\Patient;
use App\Doctor;
use Carbon\Carbon;
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
        //$medic_password = Hash::make('medic1234');
        //$patie_password = Hash::make('patie1234');
        $admin= User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => $user_password,
            'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
           
        $admin->assignRole($role1);

      /*  $medico = User::create([
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
        ]);*/

        //========================permisos===================
        /*
        _____________________
        |                    |
        |   $role1->admin    |
        |   $role2->medico   |
        |   $role3->paciente |
        |____________________|

        */
        /*
        //doctores(solo admin)
        Permission::create(['name' => 'dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'doctor.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'doctor.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'doctor.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'doctor.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'doctor.destroy'])->syncRoles([$role1]);
        //pacientes
        Permission::create(['name' => 'patient.create'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'patient.edit'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'patient.store'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'patient.update'])->syncRoles([$role1,$role2]);
        Permission::create(['name' => 'patient.destroy'])->syncRoles([$role1,$role2]);
        //especialidades(solo admin)
        Permission::create(['name' => 'specialty'])->syncRoles([$role1]);
        Permission::create(['name' => 'specialty.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'specialty.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'specialty.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'specialty.update'])->syncRoles([$role1]);
        Permission::create(['name' => 'specialty.destroy'])->syncRoles([$role1]);
        //Appointments
        Permission::create(['name' => 'appoiment'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.store'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.show'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.postcancel'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.cancelform'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.postconfirm'])->syncRoles([$role1]);
        Permission::create(['name' => 'appoiment.attended'])->syncRoles([$role1]);
        //Exams
        Permission::create(['name' => 'exam'])->syncRoles([$role]);
        Permission::create(['name' => 'exam.create'])->syncRoles([$role]);
        Permission::create(['name' => 'exam.store'])->syncRoles([$role]);
        Permission::create(['name' => 'exam.print'])->syncRoles([$role]);
        Permission::create(['name' => 'exam.preview'])->syncRoles([$role]);
        //Records
        Permission::create(['name' => 'record'])->syncRoles([$role]);
        Permission::create(['name' => 'record.create'])->syncRoles([$role]);
        Permission::create(['name' => 'record.edit'])->syncRoles([$role]);
        Permission::create(['name' => 'record.store'])->syncRoles([$role]);
        Permission::create(['name' => 'record.print'])->syncRoles([$role]);
        Permission::create(['name' => 'record.preview'])->syncRoles([$role]);
        //charts
        Permission::create(['name' => 'chart.appoiment'])->syncRoles([$role1]);
        Permission::create(['name' => 'chart.doctors'])->syncRoles([$role1]);

        */



    }
}
