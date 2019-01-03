<?php

use Illuminate\Database\Seeder;
use App\Paciente;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paciente::create([
            'nombres' => 'Jefferson Andres',
            'apellido1' => 'Salazar Montero',
            'CI' => '1966884412',
            'fecha_nacimiento' => '2018-05-04',
            'lugar_nacimiento' => 'Quito-Ecuador',
        ]);
        Paciente::create([
            'nombres' => 'Jefferson Andres',
            'apellidos' => 'Salazar Montero',
            'CI' => '1966884412',
            'fecha_nacimiento' => '2018-05-04',
            'lugar_nacimiento' => 'Quito-Ecuador',
        ]);
        Paciente::create([
            'nombres' => 'Jefferson Andres',
            'apellidos' => 'Salazar Montero',
            'CI' => '1966884412',
            'fecha_nacimiento' => '2018-05-04',
            'lugar_nacimiento' => 'Quito-Ecuador',
        ]);
        Paciente::create([
            'nombres' => 'Jefferson Andres',
            'apellidos' => 'Salazar Montero',
            'CI' => '1966884412',
            'fecha_nacimiento' => '2018-05-04',
            'lugar_nacimiento' => 'Quito-Ecuador',
        ]);
    }
}
