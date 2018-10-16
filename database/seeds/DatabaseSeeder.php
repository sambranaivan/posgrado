<?php

use Illuminate\Database\Seeder;

use App\Unidad;
use App\Carrera;
use App\Denominacion;
use App\Resolucion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUnidadesAcademicas();
        self::seedDenominacion();
        self::seedCarreras();
    }

    private function seedUnidadesAcademicas()
    {
            DB::table('unidads')->delete();

            $u = new Unidad();
            $u->nombre = 'Facultad de Medicina';
            $u->alias = 'medicina';
            $u->save();

            $u = new Unidad();
            $u->alias = 'odontologia';
            $u->nombre = 'Odontología';
            $u->save();

            $u = new Unidad();
            $u->alias = 'arquitectura';
            $u->nombre = 'Facultad de Arquitectura y Urbanismo';
            $u->save();

            $u = new Unidad();
            $u->alias = 'agrarias';
            $u->nombre = 'Facultad de Ciencias Agrarias';
            $u->save();

            $u = new Unidad();
            $u->alias = 'economicas';
            $u->nombre = 'Facultad de Ciencias Económicas';
            $u->save();

            $u = new Unidad();
            $u->alias = 'exactas';
            $u->nombre = 'Facultad de  Ciencias  Exactas y Naturales  y Agrimensura';
            $u->save();

            $u = new Unidad();
            $u->alias = 'exactas';
            $u->nombre = 'Facultad de Ciencias  Veterinarias';
            $u->save();

            $u = new Unidad();
            $u->alias = 'exactas';
            $u->nombre = 'Facultad de Derecho y Ciencias Sociales y Políticas';
            $u->save();

            $u = new Unidad();
            $u->alias = 'exactas';
            $u->nombre = 'Facultad de Humanidades';
            $u->save();

            $u = new Unidad();
            $u->alias = 'exactas';
            $u->nombre = 'Facultad de Ingeniería ';
            $u->save();




    }
     private function seedDenominacion(){
        DB::table('denominacions')->delete();

        $d = new Denominacion();
        $d->descripcion = 'Especialización';
        $d->save();

        $d = new Denominacion();
        $d->descripcion = 'Maestria';
        $d->save();

        $d = new Denominacion();
        $d->descripcion = 'Doctorado';
        $d->save();
     }

    private function seedCarreras(){
        DB::table('carreras')->delete();

        $c = new Carrera();
        $c->nombre = 'Maestría en Gestión y Desarrollo de la Vivienda Social';
        $c->setDenominacion('maestria');
        $c->addResolucion('Res. 734/11',1);
        $c->addResolucion('Res. 355/12',2);
        $c->addResolucion('Res. 443/16',3);
        $c->setUnidadAcademica('exactas');
        $c->save();


    }
}
