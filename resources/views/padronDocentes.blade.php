@extends('layouts.app')

@section('content')
<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">DOCENTES</h1>
        </div>
        <div class=" offset-md-2 col-md-8 text-center">
            


         <div class="card">
             <div class="card-body">
                <table class="table table-striped table-sm">
                    <thead class="table-dark"> 
                        <th>Docente</th>
                        <th>Título</th>
                        <th>Entidad Otorgante</th>
                        <th>Area Disciplinar</th>	
                        <th>Nivel	</th>
                        <th>Unidad Académica</th>
    
                    </thead>
                    <tbody>
                        
                            <tr>
                                <td>{{ucwords(mb_strtolower("ASSALES, MARIA MELINA"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA EN DOCENCIA UNIVERSITARIA"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV.NAC.DE MISIONES"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Humanas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA"))}}</td>
                                <td>{{ucwords(mb_strtolower("DERE"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("ECHEVERRIA, ADRIANA INES"))}}</td>
                                <td>{{ucwords(mb_strtolower("Especialista en Docencia Universitaria en Ciencias Empresariales y Sociales"))}}</td>
                                <td>{{ucwords(mb_strtolower("UCES (Universidad de Ciencias Empresariales y Sociales)"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Humanas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA"))}}</td>
                                <td>{{ucwords(mb_strtolower("ARQU"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("OMASTOTT, JORGE RAMON"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA EN DOCENCIA UNIVERSITARIA"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNNE FAC.CS.EXACTAS NAT.Y AGRI"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Humanas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("LEIVA AZUAGA, AGRIPINA"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA EN EXPLOTACION DE YACIMINETOS RAMA PRODUCCION"))}}</td>
                                <td>{{ucwords(mb_strtolower("UBA UNIV.NAC.DE BUENOS AIRES"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA"))}}</td>
                                <td>{{ucwords(mb_strtolower("INGE"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("BIZZOTTO, MARCELA BEATRIZ"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA EN ING.ESTRUCTURA"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNNE FAC.DE INGENIERï¿½A"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA"))}}</td>
                                <td>{{ucwords(mb_strtolower("INGE"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("LA RED MARTINEZ, DAVID LUIS"))}}</td>
                                <td>{{ucwords(mb_strtolower("Dr.en Ingenierï¿½a de Sistemas de Computaciï¿½n.Univ.Mï¿½laga"))}}</td>
                                <td>{{ucwords(mb_strtolower("Universidad de Mï¿½laga"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("ABELLAN, ENRIQUE JORGE"))}}</td>
                                <td>{{ucwords(mb_strtolower("MAGISTER EN INFORMï¿½TICA Y COMPUTACIï¿½N"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNNE FAC.CS.EXACTAS NAT.Y AGRI"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("MAGISTER"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("MONZON, JORGE EMILIO"))}}</td>
                                <td>{{ucwords(mb_strtolower("DR. EN CIENCIAS TECNOLOGICAS"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV.NAC.DEL NORDESTE"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("BERNAL, RUBEN ALFREDO"))}}</td>
                                <td>{{ucwords(mb_strtolower("DR. EN EL DPTO. DE LENGUAJES Y CS. DE LA COMPUTACION"))}}</td>
                                <td>{{ucwords(mb_strtolower("Universidad de Mï¿½laga"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("AFFUR, EDUARDO ALBERTO"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPEC.  EN HIGIENE Y SEGURIDAD"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV. TECNOLOGICA NACIONAL"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPE"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("AFFUR, EDUARDO ALBERTO"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPECIALISTA EN INGENIERIA EN CALIDAD"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV. TECNOLOGICA NACIONAL"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("ESPE"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("ALBERTO, JORGE ALFREDO"))}}</td>
                                <td>{{ucwords(mb_strtolower("MAGISTER EN GESTION AMBIENTAL"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV.NAC.DEL NORDESTE"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("MAGISTER"))}}</td>
                                <td>{{ucwords(mb_strtolower("HUMA"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("ALCALA, LAURA INES"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTORADO EN URBANISMO"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIVERSIDAD POLITECNICA DE CATALUNYA"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("ARQU"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("DALURZO, HUMBERTO CARLOS"))}}</td>
                                <td>{{ucwords(mb_strtolower("Dr. en Suelos, Agua y Medio Ambiente."))}}</td>
                                <td>{{ucwords(mb_strtolower("Universitat de Lleida"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("AGRA"))}}</td></tr>
                            <tr>
                                <td>{{ucwords(mb_strtolower("ROBLEDO DOBLADEZ, GERMAN ARIEL"))}}</td>
                                <td>{{ucwords(mb_strtolower("DR.EN CS.NATURALES (OR.EN ECOLOGIA Y CONSERVACION DE RECURSOS NAT. RENOV.)"))}}</td>
                                <td>{{ucwords(mb_strtolower("UNIV.NAC.LA PLATA"))}}</td>
                                <td>{{ucwords(mb_strtolower("Ciencias Aplicadas"))}}</td>
                                <td>{{ucwords(mb_strtolower("DOCTOR"))}}</td>
                                <td>{{ucwords(mb_strtolower("EXAC"))}}</td></tr>
                            
                        
    
                    </tbody>
                </table>
                <div class="alert alert-info">
                    --
                </div>
             </div>
         </div>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
