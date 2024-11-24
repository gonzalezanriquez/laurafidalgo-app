<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobremiController extends Controller
{
    public function show()
    {
        $events = [
            ['year' => 2023, 'event' => 'Participación en el Programa Pasaplatos canal Trece. Continúa dictando Seminarios Intensivos y Charlas Motivacionales en todo el país y en el exterior.'],
            ['year' => 2021, 'event' => 'Post pandemia reapertura de la Escuela Arte & Danza Belgrano. Seminarios intensivos y jurado en competencias de danza por todo el país.'],
            ['year' => 2021, 'event' => 'Comienza a preparar su nueva etapa en el Nuevo Bailando que llegará próximamente en la televisión abierta.'],
            ['year' => '2020-2021', 'event' => 'Arranca el corriente año con gran popularidad y es galardonada con el reconocimiento a su trayectoria en el Paseo del Hermitage.'],
            ['year' => 2020, 'event' => 'Comienza a ensayar la Obra Teatral “EL SHOW DE LOS CUERNOS” que debuta en la Ciudad de Mar del Plata en la temporada 2020.'],
            ['year' => 2019, 'event' => 'Regresa al Súper Bailando 2019 como Jurado en el formato del Bar. Paralelamente interpreta la obra “TENGAMOS EL SEXO EN PAZ” que llegó a las diferentes Provincias de la Argentina y gran Buenos Aires.'],
            ['year' => 2018, 'event' => 'Protagonizó el film NO LLORES POR MÍ INGLATERRA.'],
            ['year' => '2017-2019', 'event' => 'Sin interrupción estuvo al aire con un programa de su autoría y creación llamado CUALQUIERA PUEDE BAILAR.'],
            ['year' => 2016, 'event' => 'Fue convocada para ser Jurado del Certamen BAILA CÓRDOBA, realizado en dicha Provincia.'],
            ['year' => '2013-2014', 'event' => 'Actuó en la obra LOS GRIMALDI (MAR DEL PLATA).'],
            ['year' => '2013-2014', 'event' => 'Produce RAPUNZEL (COMEDIA MUSICAL PARA NIÑOS).'],
            ['year' => 2012, 'event' => 'Espectáculo “El gran show" junto a Palito Ortega, Ingrid GRUDKE, Mario DEVALIS, Juan Alberto MATEYKO, y grupo AIR (ex fuerza bruta), en la Ciudad de Villa Carlos Paz.'],
            ['year' => 2011, 'event' => 'Produce la obra "EL DILUVIO QUE VIENE", presentada en Mar del Plata y Ciudad de Buenos Aires. Forma parte del Jurado del concurso televisivo Soñando por Bailar. Productora de la obra teatral infantil "Blancanieves".'],
            ['year' => 2000, 'event' => 'Gira por Argentina como primera vedette del espectáculo “Pericom.com.ar" junto a Enrique PINTI.'],
            ['year' => 1999, 'event' => 'Gira por Argentina con el espectáculo "Pinti canta las 40 y el Maipo cumple 90".'], 
            ['year' => 1998, 'event' => 'Espectáculo “Pinti canta las 40 y el Maipo cumple 90" como primera Vedette, junto a Enrique PINTI, en el teatro Maipo.'],
            ['year' => 1997, 'event' => 'Bailarina en el programa de "BADÍA Y COMPAÑÍA" con Juan Alberto BADIA. Modelo de la Agencia Pancho DOTTO.'],
            ['year' => '1995-1998', 'event' => 'Elenco estable del teatro Roma de Avellaneda como bailarina clásica durante 4 años.'],
            ['year' => 1994, 'event' => 'Bailarina estable en “SÁBADOS DE FIESTA” de Berugo CARAMBULA.'],
            ['year' => 1993, 'event' => 'Trabajó en el Programa “Jugate con todo” de Cris Morena (Telefe).'],
            ['year' => 1992, 'event' => 'Trabajó como bailarina en el Programa “Tato de América” con Tato Bores.'],





        ];
        

        return view('sobremi.show', compact('events'));
    }

}
