<?php

use Illuminate\Database\Seeder;
use App\Carrera;
class DiplomaturaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        self::seedDiplomaturas();
    }



    private function seedDiplomaturas(){
        $d = new Carrera;
        $d->denominacion_id = 4;
        $d->nombre = "Diplomatura Superior en Cardiologáa";
        $d->titulo = 'Diplomado Superior en Cardiología';
        $d->setUnidadAcademica("medicina");
        $d->save();
        $d->addAutoridad('Dr. Eduardo Perna');
        $d->addAutoridad('Dra. Stella M. Macín','Co-Directora');


    }
}
