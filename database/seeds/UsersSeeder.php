<?php

use App\Doctor;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
use App\Patient;
use App\Specialty;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');



            $password = Hash::make('salud1234');



            //pacientes
            $user2= User::create([
                'name' => 'Maria',
                'email' => 'maria.avila@gmail.com',
                'password' => $password,
                'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
            Patient::create([
                'ci'=>'1105674896',
                'middle_name'=>'Mercedes',
                'last_name'=>'Avila',
                'second_last_name'=>'Torres',
                'phone'=>'0956437849',
                'age'=>'36',
                'user_id'=>$user2->id
            ]);
            $user2->assignRole('paciente');

            //======
            $user3= User::create([
                'name' => 'Ana',
                'email' => 'ana.castro@gmail.com',
                'password' => $password,
                'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
            Patient::create([
                'ci'=>'1829845676',
                'middle_name'=>'Luisa',
                'last_name'=>'Castro',
                'second_last_name'=>'Zambrano',
                'phone'=>'0994523865',
                'age'=>'40',
                'user_id'=>$user3->id
            ]);
            $user3->assignRole('paciente');

            //==
            $user4= User::create([
                'name' => 'Ada',
                'email' => 'ada.gonzales@gmail.com',
                'password' => $password,
                'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
            Patient::create([
                'ci'=>'0506217693',
                'middle_name'=>'Ailin',
                'last_name'=>'Gonzales',
                'second_last_name'=>'Zambrano',
                'phone'=>'0982341567',
                'age'=>'35',
                'user_id'=>$user4->id
            ]);
            $user4->assignRole('paciente');

            //===
            $user5= User::create([
                'name' => 'Martha',
                'email' => 'martha.cabreras@gmail.com',
                'password' => $password,
                'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
            Patient::create([
                'ci'=>'2200347616',
                'middle_name'=>'Angelica',
                'last_name'=>'Cabrera',
                'second_last_name'=>'Sanchez',
                'phone'=>'0980167395',
                'age'=>'45',
                'user_id'=>$user5->id
            ]);
            $user5->assignRole('paciente');

            //==
            $user6= User::create([
                'name' => 'Vilma',
                'email' => 'vilma.calle@gmail.com',
                'password' => $password,
                'email_verified_at'=>Carbon::now()->toDateTimeString()
            ]);
            Patient::create([
                'ci'=>'1787342156',
                'middle_name'=>'Soraya',
                'last_name'=>'Calle',
                'second_last_name'=>'Lema',
                'phone'=>'0995632970',
                'age'=>'47',
                'user_id'=>$user6->id
            ]);
            $user6->assignRole('paciente');


    }
}
