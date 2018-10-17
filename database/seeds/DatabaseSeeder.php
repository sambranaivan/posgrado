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
        // self::seedContructor();
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
            $u->alias = 'veterinaria';
            $u->nombre = 'Facultad de Ciencias  Veterinarias';
            $u->save();

            $u = new Unidad();
            $u->alias = 'derecho';
            $u->nombre = 'Facultad de Derecho y Ciencias Sociales y Políticas';
            $u->save();

            $u = new Unidad();
            $u->alias = 'humanidades';
            $u->nombre = 'Facultad de Humanidades';
            $u->save();

            $u = new Unidad();
            $u->alias = 'ingenieria';
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
        $c->setDenominacion('Maestria');
        $c->addResolucion('Res. 734/11',1);
        $c->addResolucion('Acreditada Res. 355/12',2);
        $c->addResolucion('Res. 443/16',3);
        $c->setUnidadAcademica('arquitectura');
        $c->save();

        $c = new Carrera();
        $c->nombre = 'Maestría en Gestión Ambiental y del Territorio Urbano';
        $c->setDenominacion('Maestria');
        $c->addResolucion('Res.Nº152/15 C.S.',1);
        $c->addResolucion('Acreditada (Acta Nº443/16)',2);
        $c->addResolucion(' Res. Nº4074/17 ME',3);
        $c->setUnidadAcademica('arquitectura');
        $c->save();


        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad  Nacional del Nordeste en el Área de Recursos Naturales','Res. Nº 780/95 C.S.','Acreditada (Res. Nº 1018/10).','Res Nº0337/14 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('agrarias');
        $c->save();


        $c = new Carrera();
        $c->constructor('Maestría en Producción Vegetal','Res. Nº 874/05 C. S.'  ,'Acreditada (Res Nº729/12).' ,'Res Nº0067/08ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('agrarias');
        $c->save();

        $c = new Carrera();
        $c->constructor('Especialización en Manejo de Recursos Forestales','Res. Nº 972/09 C.S.','Acreditada (Res. Nº 348/12)','Res. Nº2106/14 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('agrarias');
        $c->save();


        // ECONOMICAS
        $c = new Carrera();
        $c->constructor('Maestría en Gestión Empresarial','Res. Nº 308/99 C.S.','Acreditada. (Res. Nº 702/13)','');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría en Marketing','Res. Nº 182/12 C.S.',' Acreditada (Acta 389/13).',' Res. Nº 1544/15 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría en Contabilidad Superior y Auditoria','Res. Nº 816/12 C.S. ','Acreditada (Acta 426/15).','Res. Nº 561/17 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Gerencia y Vinculación Tecnológica','Res. Nº1024/09.','Acreditada (Res.Nº823/15)','Res. Nº2401/13 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Gestión de la Empresa Agropecuaria','Res. Nº 755/06 C.S. ','Acreditada (Res. Nº 823/15). ','Res. Nº 154/15 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Gestión Pública, Provincial y Municipal','Res. Nº 115/09 C.S.',' Acreditada (Acta 749/15)','Res. Nº022/17 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('economicas');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Tributación','Res. Nº 090/97 C.S.',' Acreditada Res Nº274/16',' Res. Nº3662/17 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('economicas');
        $c->save();



        // EXACTAS
    $c = new Carrera();
    $c->constructor('Doctorado  de la Universidad Nacional del Nordeste en  Química',' Res. Nº 648/95C.S. ','Acreditada (Res. Nº 706/13).','  Res. Nº3121/15 ME');
    $c->setDenominacion('Doctorado');
    $c->setUnidadAcademica('exactas');
    $c->save();
    $c = new Carrera();
    $c->constructor('Doctorado  de la Universidad Nacional del Nordeste en Física','Res. Nº 648/95C.S.',' Acreditada (Res. Nº790/13).',' Res. Nº2100/16 ME');
    $c->setDenominacion('Doctorado');
    $c->setUnidadAcademica('exactas');
    $c->save();
    $c = new Carrera();
    $c->constructor('Doctorado de la Universidad Nacional del Nordeste en Biología','Res. Nº 648/95 C.S.','  Acreditada (Res. Nº 742/13).',' Res. Nº2855/15 ME');
    $c->setDenominacion('Doctorado');
    $c->setUnidadAcademica('exactas');
    $c->save();
    $c = new Carrera();
    $c->constructor('Maestría en Tecnologías de la Información','Res. Nº 764/14 C.S.','Acreditada (Acta Nº434/15).',' Res Nº4144/17ME');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('exactas');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Análisis de Alimentos','Res. Nº 113/09 C.S.','Acreditada (Res. Nº106/16). ','Res Nº3683/17ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('exactas');
    $c->save();

        // Veterinaria

    $c = new Carrera();
    $c->constructor('Doctorado de la Universidad  Nacional del Nordeste en Ciencias Veterinarias','Res. Nº 314/95 C.S.',' Acreditada Res. Nº 1206/14.',' Res. Nº1062/17 ME');
    $c->setDenominacion('Doctorado');
    $c->setUnidadAcademica('veterinaria');
    $c->save();

    $c = new Carrera();
    $c->constructor('Maestría en Producción Animal Subtropical','Res. Nº 580/06 CS.',' Acreditada (Res Nº1204/14).',' Res. Nº1642/16 ME');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('veterinaria');
    $c->save();

    $c = new Carrera();
    $c->constructor('Especialización  en Cirugía de Pequeños Animales',' Res. Nº373/03 CS.',' Acreditada (Res Nº1192/14).',' Res. Nº/11 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('veterinaria');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Diagnostico  Anatomohistopatológico Veterinario',' Nº336/04CS.',' Acreditada (Res Nº217/08).',' Res. Nº0610/07 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('veterinaria');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Clínica de Animales de Compañía','Res. Nº 969/13 C.S.',' Acreditada (Acta 412/14).',' Res Nº1874/16 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('veterinaria');
    $c->save();

    //Derecho

    $c = new Carrera();
    $c->constructor('Doctorado en Derecho','Res. Nº 204/11 C.S. ','Acreditada (Acta 356/12).',' Res. Nº02477/15 ME');
    $c->setDenominacion('Doctorado');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Maestría en Ciencias Penales','Res Nº  200/07 C.S.',' Acreditada (Res. Nº 560/16).',' Res. Nº1147/15 ME');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Maestría en Derecho Empresario','Res. Nº 178/13 C.S. ','Acreditada (Acta 339/14). ','Res Nº1548/16 ME');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Maestría en Derecho de Familia, Niñez y Adolescencia','Res. Nº 507/08 C.S.',' Acreditada (Res. Nº 154/16).','  Res. Nº1808/12 ME');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Maestría en Magistratura y función Judicial','Res. Nº 817/16 C.S. ','Acreditada (Acta Nº 468/17).','');
    $c->setDenominacion('Maestria');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Derecho Laboral','Res. Nº 374/08 C.S.',' Acreditada (Res. Nº 1147/15).',' Res. Nº3940/17 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Derecho Administrativo','Res. Nº 410/08 C.S. ','Acreditada (Res. Nº 833/15).',' Res. Nº3823/17 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Seguridad Social','Res. Nº112/09 C.S.',' Acreditada (Res. Nº 894/15).',' Res. Nº3985/17 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Teoría y Técnica del Proceso Judicial','Res. Nº 267/07 C.S.',' Acreditada (Res. Nº  1047/15).','  Res. Nº4377/17 ME');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('derecho');
    $c->save();
    $c = new Carrera();
    $c->constructor('Especialización en Derecho Notarial y Registral','Res. Nº 805/14 ','C.S. Acreditada (Acta Nº468/17)','');
    $c->setDenominacion('Especialización');
    $c->setUnidadAcademica('derecho');
    $c->save();


        // HUMANIDADES
        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad Nacional del Nordeste en Letras','Res. Nº 517/99 C.S. ','Acreditada (Acta 488/17). ','Res. Nº 2092/14 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('humanidades');
        $c->save();
        $c = new Carrera();
        $c->constructor('Doctorado  en Filosofía','Res. Nº 517/99 C.S. ','Acreditada (Res. Nº  976/13).  ','Res. Nº 344/09 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('humanidades');
        $c->save();
        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad Nacional del Nordeste en Geografía ','Res. Nº 517/99 C.S. ','Acreditada (Res.Nº892/15). ','Res. Nº 593/17 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('humanidades');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización  en Docencia Universitaria','Res. Nº 147/06 C.S. ','Acreditada (Res. Nº 384/13). ','Res. Nº 856/17 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('humanidades');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Historia Regional','Res. Nº 570/11 C.S. ','Acreditada  (Res. Nº383/13.  ','Res. Nº 1373/15 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('humanidades');
        $c->save();


        // other


        // Ingnenieria
        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad Nacional del Nordeste en el Área de la Ingeniería','Res. Nº 572/98 C.S. ','Acreditada (Res. Nº 166/17 ','). Res Nº664/17 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('ingenieria');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría en Ciencias de la Ingeniería','Res. Nº 573/98 C.S. ','Acreditada (Res. Nº 240/11)- ','Res. Nº 1241/15 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('ingenieria');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Ingeniería Ambiental','Res. Nº 1030/15 C.S. ','Acreditada  (Acta Nº464/17)','');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('ingenieria');
        $c->save();

        //Medicina
        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad Nacional del Nordeste en Medicina','Res.Nº037/08 C.S.','Acreditada (Acta 314/10). ','Res. Nº 1871/11 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('medicina');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría ','en Ciencias de la Enfermería Comunitaria','Res. Nº 714/15 C.S.  –  ','Acreditada (Sesión  433/15','). Res Nº2043/17 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('medicina');
        $c->save();

        //Odontologia
        $c = new Carrera();
        $c->constructor('Doctorado de la Universidad Nacional del Nordeste en Odontología  ','Res. Nº 192/05 C.S. ','Acreditada (Res Nº433/14)','Res. Nº 543/16 ME');
        $c->setDenominacion('Doctorado');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría en Gestión de la Salud Pública con orientación en Prácticas Preventivas','Res. Nº 0650/11 C.S. ','Acreditada (Acta 368/12)','Res. Nº 031/15 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Maestría en Investigación en Ciencias de la Salud  ','Res. Nº 0569/11 C.S. ','Acreditada (Acta 368/12)','Res. Nº 808/15 ME');
        $c->setDenominacion('Maestria');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización  en Odontopediatría ','Res. Nº 179/13 C.S.  ','Acreditada (Acta 412/14). ','Res Nº 1636/16 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización  en Cirugía  y Traumatología Buco maxilofacial','Res. Nº 180/13 C.S. ','Acreditada (Acta 396/14). ','Res Nº 1624/16 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Odontología Legal ','Res. Nº 725/11 C.S. ','Acreditada (Acta Nº368/12)','Res. Nº 1359/15 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Docencia y Gestión Universitaria con orientación en Ciencias de la Salud ','Res. Nº 754/06 C.S. ','Acreditada (Res. Nº 319/13)','Res. Nº 1411/08 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('odontologia');
        $c->save();
        $c = new Carrera();
        $c->constructor('Especialización en Diagnóstico por Imágenes de la región Buco-Maxilofacial','Res. Nº 838/13 C.S. ','Acreditada (Acta Nº 412/14)','Res. Nº 1482/16 ME');
        $c->setDenominacion('Especialización');
        $c->setUnidadAcademica('odontologia');
        $c->save();

    }
}
