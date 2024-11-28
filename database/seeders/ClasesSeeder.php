<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasesSeeder extends Seeder
{
    public function run()
    {
        DB::table('clases')->insert([
            [
                'nombre' => 'Iniciacion a la Danza (3 - 4 años)',
                'descripcion' => 'Clases de iniciación a la danza para niños de 3 a 4 años.',
                'docente' => 'Camila González',
                'horario' => 'LUN MIE 17.00 HS',
            ],
            [
                'nombre' => 'Iniciación a la Danza (5 - 6 años)',
                'descripcion' => 'Clases de iniciación a la danza para niños de 5 a 6 años.',
                'docente' => 'Camila González',
                'horario' => 'LUN 18 HS',
            ],
            [
                'nombre' => 'Mini Dance (4 - 6 años)',
                'descripcion' => 'Clases de danza para niños entre 4 y 6 años.',
                'docente' => 'Denise Depauli',
                'horario' => 'LUY MIE 17.00 HS',
            ],
            [
                'nombre' => 'Mini Dance (5 - 6 años)',
                'descripcion' => 'Clases de danza para niños entre 5 y 6 años.',
                'docente' => 'Natasha Mogro',
                'horario' => 'MA Y JUE 17.00 HS',
            ],
            [
                'nombre' => 'Acrodanza (5 - 9 años)',
                'descripcion' => 'Combinación de acrobacias y danza para niños de 5 a 9 años.',
                'docente' => 'Lucía Tagliafico',
                'horario' => 'LU Y JUE 18.00 HS',
            ],
            [
                'nombre' => 'Dancing (6 - 8 años)',
                'descripcion' => 'Clases de baile para niños de 6 a 8 años.',
                'docente' => 'Denise Depauli',
                'horario' => 'LU Y MIE 18.00 HS',
            ],
            [
                'nombre' => 'Dance Kids (6 - 8 años)',
                'descripcion' => 'Clases de baile para niños de 6 a 8 años.',
                'docente' => 'Barbara Lucia',
                'horario' => 'MA Y JUE 17.00 HS',
            ],
            [
                'nombre' => 'Comedia Musical Princ/ Interm. (6-12 años)',
                'descripcion' => 'Clases de Teatro, Danza y Canto para niños entre 6 y 12 años.',
                'docente' => 'No asignado',
                'horario' => 'VIE 17.00 A 20.00 HS',
            ],
            [
                'nombre' => 'Comedia Musical Intermedio (7-13 años)',
                'descripcion' => 'Clases de Teatro, Danza y Canto para niños entre 7 y 13 años.',
                'docente' => 'No asignado',
                'horario' => 'MIE 17.00 A 20.00 HS',
            ],
            [
                'nombre' => 'Comedia Musical Princ/ Interm. (6-12años) - Teatro - Danza /Canto',
                'descripcion' => 'Clases de Teatro, Danza y Canto para niños entre 6 y 12 años.',
                'docente' => 'No asignado',
                'horario' => 'SAB 11.00 A 13.00 HS',
            ],
            [
                'nombre' => 'Danza Clásica Principiante (6 - 8 años)',
                'descripcion' => 'Clases de Danza Clásica para niños principiantes de 6 a 8 años.',
                'docente' => 'Fabiana Daher',
                'horario' => 'MA Y VIE 17.00 HS',
            ],
            [
                'nombre' => 'Danza Clásica (9 -13 años)',
                'descripcion' => 'Clases de Danza Clásica para niños de 9 a 13 años.',
                'docente' => 'Fabiana Daher',
                'horario' => 'MAR Y VIE 18.00 HS',
            ],
            [
                'nombre' => 'Jazz Pop (7-11 años)',
                'descripcion' => 'Clases de Jazz Pop para niños de 7 a 11 años.',
                'docente' => 'Barbara Lucia',
                'horario' => 'MA Y JUE 18.00 HS',
            ],
            [
                'nombre' => 'Full Dance (10 - 13 años)',
                'descripcion' => 'Clases de danza de estilo libre para adolescentes de 10 a 13 años.',
                'docente' => 'Natasha Mogro',
                'horario' => 'MA Y JUE 18.00 HS',
            ],
            [
                'nombre' => 'Urbano Kids (6 - 9 años)',
                'descripcion' => 'Clases de danza urbana para niños de 6 a 9 años.',
                'docente' => 'Belén Millán',
                'horario' => 'MAY JUE 17.00 HS',
            ],
            [
                'nombre' => 'Reggaeton -Tik Tok (10-13 años)',
                'descripcion' => 'Clases de Reggaeton y TikTok Dance para adolescentes de 10 a 13 años.',
                'docente' => 'Belén Millán',
                'horario' => 'MA Y JUE 18.00 HS',
            ],
            [
                'nombre' => 'Canto Grupal',
                'descripcion' => 'Clases grupales de canto.',
                'docente' => 'No asignado',
                'horario' => 'LU 17.00 HS',
            ],
            [
                'nombre' => 'Clases de Piano Particular',
                'descripcion' => 'Clases particulares de piano.',
                'docente' => 'Ariel Mores',
                'horario' => 'MAR, MIER, JUE A COORDINAR',
            ],
            [
                'nombre' => 'K-Pop',
                'descripcion' => 'Clases de K-Pop para jóvenes.',
                'docente' => 'Belén Millán',
                'horario' => 'MA Y JUE 19 HS',
            ],
            [
                'nombre' => 'Urbano',
                'descripcion' => 'Clases de danza urbana.',
                'docente' => 'Belén Millán',
                'horario' => 'MA Y JUE 20 HS',
            ],
            [
                'nombre' => 'Danza Clásica Princ. (Entrenamiento Biomecánica para LA DANZA)',
                'descripcion' => 'Clases de danza clásica con enfoque en biomecánica para mejorar el rendimiento.',
                'docente' => 'Flor Martino',
                'horario' => 'LU 19 hs',
            ],
            [
                'nombre' => 'Danza Clásica Principiante',
                'descripcion' => 'Clases de danza clásica para principiantes.',
                'docente' => 'Flor Martino',
                'horario' => 'JUE 19.30 hs',
            ],
            [
                'nombre' => 'Danza Clásica Princip./Interm.',
                'descripcion' => 'Clases de danza clásica para nivel principiante e intermedio.',
                'docente' => 'Fabiana Daher',
                'horario' => 'MA Y VIE 19 hs',
            ],
            [
                'nombre' => 'Stretching',
                'descripcion' => 'Clases de estiramiento.',
                'docente' => 'Leonel Cirelli',
                'horario' => 'LUY MIE 9.00 hs',
            ],
            [
                'nombre' => 'Stretching',
                'descripcion' => 'Clases de estiramiento.',
                'docente' => 'Fredy Peña Meza',
                'horario' => 'MA Y JUE 15.00 HS',
            ],
            [
                'nombre' => 'Stretching Yoga',
                'descripcion' => 'Clases de estiramiento con enfoque en yoga.',
                'docente' => 'Gabriela Verónica Baratchar',
                'horario' => 'MIE Y VIE 10 HS',
            ],
            [
                'nombre' => 'Heels',
                'descripcion' => 'Clases de danza con tacones.',
                'docente' => 'Flor Martino',
                'horario' => 'LU 18 HS, MIER 17 HS',
            ],
            [
                'nombre' => 'Jazz Fusión',
                'descripcion' => 'Clases de Jazz Fusión.',
                'docente' => 'Mariano Liverti',
                'horario' => 'MA Y JUE 10 HS',
            ],
            [
                'nombre' => 'Danza Jazz',
                'descripcion' => 'Clases de danza Jazz.',
                'docente' => 'Marcelo Duran',
                'horario' => 'MIE Y VIE 14 hs',
            ],
            [
                'nombre' => 'Dance Mix',
                'descripcion' => 'Clases de Dance Mix.',
                'docente' => 'Barbara Lucia',
                'horario' => 'MIE Y VIE 9.00 hs',
            ],
            [
                'nombre' => 'Dance Mix Adultos Mayores',
                'descripcion' => 'Clases de Dance Mix para adultos mayores.',
                'docente' => 'Marcelo Duran',
                'horario' => 'MIE Y VI 10 hs',
            ],
            [
                'nombre' => 'Dance Mix',
                'descripcion' => 'Clases de Dance Mix.',
                'docente' => 'Marcelo Duran',
                'horario' => 'MA, JU y VIE 19.00 hs',
            ],
            [
                'nombre' => 'Dance Mix',
                'descripcion' => 'Clases de Dance Mix.',
                'docente' => 'Mariano Livetti',
                'horario' => 'LU Y MIE 19.00 hs',
            ],
            [
                'nombre' => 'Tap Principiante',
                'descripcion' => 'Clases de Tap para principiantes.',
                'docente' => 'Demian Silveira',
                'horario' => 'LU Y MIE 19.00 hs',
            ],
            [
                'nombre' => 'Tap Intermedio',
                'descripcion' => 'Clases de Tap para nivel intermedio.',
                'docente' => 'Demian Silveira',
                'horario' => 'LU Y MIE 20.00 hs',
            ],
            [
                'nombre' => 'Comedia Musical Adolescentes (Teatro - Danza - Canto)',
                'descripcion' => 'Clases de Teatro, Danza y Canto para adolescentes.',
                'docente' => 'No asignado',
                'horario' => 'VIE 18.00 A 21.00 hs',
            ],
            [
                'nombre' => 'Teatro Musical Adultos (Teatro - Canto)',
                'descripcion' => 'Clases de Teatro y Canto para adultos.',
                'docente' => 'No asignado',
                'horario' => 'MIE 18.00 A 20.00 hs',
            ],
            [
                'nombre' => 'Canto Adultos',
                'descripcion' => 'Clases de canto para adultos.',
                'docente' => 'Ariel Mores',
                'horario' => 'LU 18 HS',
            ],
            [
                'nombre' => 'Clases de Piano Particular',
                'descripcion' => 'Clases particulares de piano.',
                'docente' => 'Ariel Mores',
                'horario' => 'A COORDINAR',
            ],
            [
                'nombre' => 'Tango',
                'descripcion' => 'Clases de Tango.',
                'docente' => 'Nestor Toschi',
                'horario' => 'SAB 15 HS',
            ],
        ]);
    }
}
