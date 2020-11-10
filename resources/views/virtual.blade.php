@extends('layouts.app')

@section('content')
<div class="container-fluid ">

    <div class="row">
        <div class="col-md-12 text-center text-info">
            <h1 class="text-center text-white" style="background-image:url({{asset('img/carreras/fondo.png')}});background-size:cover; ">Oferta virtual de posgrado 2021</h1>
        </div>
        <div class="col-md-12 text-center">
            


         <div class="card">
             
             <div class="card-body">
                 
               <div class="row">
                   <div class="col-md-2"></div>
                   <div class="col-md-10">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link btn-lg active" id="pills-curso-tab" data-toggle="pill" href="#pills-curso" role="tab" aria-controls="pills-curso" aria-selected="true">Cursos de Posgrado</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link btn-lg" id="pills-diplomatura-tab" data-toggle="pill" href="#pills-diplomatura" role="tab" aria-controls="pills-diplomatura" aria-selected="false">Diplomatura</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link btn-lg" id="pills-especializacion-tab" data-toggle="pill" href="#pills-especializacion" role="tab" aria-controls="pills-especializacion" aria-selected="false">Especialización</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-lg" id="pills-maestria-tab" data-toggle="pill" href="#pills-maestria" role="tab" aria-controls="pills-maestria" aria-selected="false">Maestría</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link btn-lg" id="pills-doctorado-tab" data-toggle="pill" href="#pills-doctorado" role="tab" aria-controls="pills-doctorado" aria-selected="false">Doctorado</a>
                          </li>
                      </ul>
                   </div>
               </div>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-curso" role="tabpanel" aria-labelledby="pills-curso-tab">

                        <table class="table table-sm table-striped text-left">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                    <th>Oferta</th>
                                    {{-- <th>Contenido</th> --}}
                                    <th>Link</th>
                                    <th>Consultas</th>
                            
                                </tr>
                            </thead>
                                
                        <tbody>
                                                   
                             
                             
                             
                            
                            
                             <tr>
                                    <td>Ciencias Ecónomicas</td>
                                    <td>Curso de posgrado</br> Aplicaciones estadísticas en los mercados financieros</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                 
                                    <td><a href="mailto:ecoposgrado@gmail.com"> ecoposgrado@gmail.com</a></td></tr>
                             <tr>
                                    <td>Ciencias Veterinarias</td>
                               
                                    <td>Curso de posgrado:</br> Caracteres de Faena y calidad de carne</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                  
                                    <td><a href="mailto:posgrado@vet.unne.edu.ar"> posgrado@vet.unne.edu.ar</a></td></tr>
                             <tr>
                                    <td>Ciencias Veterinarias</td>
                                    <td>Curso de posgrado:</br> Introducción a la producción bubalina. </td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                  
                                    <td><a href="mailto:posgrado@vet.unne.edu.ar"> posgrado@vet.unne.edu.ar</a></td></tr>
                             <tr>
                                    <td>Ciencias Veterinarias</td>
                                    <td>Curso de posgrado:</br> Hemograma y perfiles Bioquímicos en perros y gatos</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                   
                                    <td><a href="mailto:posgrado@vet.unne.edu.ar"> posgrado@vet.unne.edu.ar</a></td></tr>
                            
                             <tr>
                                    <td>Derecho</td>
                                    <td>Curso de Posgrado Virtual:</br> Cuestiones actuales del Derecho Sucesorio </td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                  
                                    <td><a href="mailto: sucesoriovirtualdch@gmail.com">  sucesoriovirtualdch@gmail.com</a></td></tr>
                             <tr>
                                    <td>Derecho</td>
                                    <td>Curso de Posgrado</br> "Algunos temas actuales de Derechos Humanos". </td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                  
                                    <td><a href="mailto:info.posgrado.derecho@comunidad.unne.edu.ar"> info.posgrado.derecho@comunidad.unne.edu.ar</a></td></tr>
                            
                             <tr>
                                    <td>Ingeniería</td>
                                    <td>Cursos acreditables</br> a la Especialización en Ingeniería Ambiental</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_115.pdf">más información</a></td>
                                   
                                    <td><a href="mailto:medebortoli@ing.unne.edu.ar "> medebortoli@ing.unne.edu.ar </a></td></tr>
                             <tr>
                                    <td>Ingeniería</td>
                                    <td>Cursos acreditables</br> a la Maestría en Ciencias de la Ingeniería</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_115.pdf">más información</a></td>
                                 
                                    <td><a href="mailto:medebortoli@ing.unne.edu.ar "> medebortoli@ing.unne.edu.ar </a></td></tr>
                            
                             <tr>
                                    <td>Medicina</td>
                                    <td>Curso de posgrado:</br> COACHING : Empoderamiento y liderazgo 2021</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                   
                                    <td><a href="mailto:posgrado@med.unne.edu.ar"> posgrado@med.unne.edu.ar</a></td></tr>
                             <tr>
                                    <td>Medicina</td>
                                    <td>Curso de de Posgrado 2021</br> -Coaching integrativo "</td>
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                  
                                    <td><a href="mailto:posgrado@med.unne.edu.ar"> posgrado@med.unne.edu.ar</a></td></tr>
                                    <tr><td>Odontología</td><td>Curso de Posgrado</br> Estrategias de lectocomprensión de textos académicos en Inglés relacionados con la Ciencias de la Salud.</td><td><a href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td><td><a href="mailto:posgrado@odn.unne.edu.ar">posgrado@odn.unne.edu.ar</a></td>
                                    </tr>
                                    <tr><td>Odontología</td><td>Curso de Posgrado</br> Introducción a la Implantología de Alta Complejidad y Rehabilitación Oral </td><td><a href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td><td><a href="mailto:posgrado@odn.unne.edu.ar">posgrado@odn.unne.edu.ar</a></td>
                                    </tr>
                                    <tr><td>Odontología</td><td>Curso virtual de Posgrado</br> Enseñar y Aprender en tiempos y Espacios Diferentes </td><td><a href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td><td><a href="mailto:posgrado@odn.unne.edu.ar">posgrado@odn.unne.edu.ar</a></td>
                                    </tr>
                           
                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane fade" id="pills-diplomatura" role="tabpanel" aria-labelledby="pills-diplomatura-tab">
                        <table class="table table-sm table-striped text-left">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                  
                                    <th>Oferta</th>
                                    {{-- <th>Contenido</th> --}}
                                    <th>Link</th>
                                    {{-- <th>Duración</th> --}}
                                    {{-- <th>Fecha de inicio</th> --}}
                                    {{-- <th>Finalización prevista</th> --}}
                                    {{-- <th>Director/Responsable<th> --}}
                                    <th>Consultas</th>
                                    {{-- <th>TE de contacto: </th> --}}
                                </tr>
                            </thead>
                                
                        <tbody>
                             <tr>
                                    <td>Ciencias Exactas y Naturales y Agrimensura</td>
                                  
                                    <td>Diplomatura Superior en </br> Construccíon de Sistemas Embebidos</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_215.pdf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:sip.facena@comunidad.unne.edu.ar "> sip.facena@comunidad.unne.edu.ar </a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Ciencias Exactas y Naturales y Agrimensura</td>
                                  
                                    <td>Diplomatura Superior en </br> Toxicología Legal y Forense</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_339.pdf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:sip.facena@comunidad.unne.edu.ar "> sip.facena@comunidad.unne.edu.ar </a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Ciencias Exactas y Naturales y Agrimensura</td>
                                  
                                    <td>Diplomatura Superior en </br> Hemostasia</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_340.pdf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:sip.facena@comunidad.unne.edu.ar "> sip.facena@comunidad.unne.edu.ar </a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Arquitectura y Urbanismo</td>
                                  
                                    <td>Diplomatura Superior en </br> Energía Solar</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_221.pdf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:energiasrenovables.fauunne@gmail.com"> energiasrenovables.fauunne@gmail.com</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Humanidades</td>
                                  
                                    <td>Diplomatura Superior en </br> Problemáticas Políticas Contemporáneas </td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/diplomatura">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:inv_posgrado@hum.unne.edu.ar"> inv_posgrado@hum.unne.edu.ar</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Ciencias Ecónomicas</td>
                                  
                                    <td>Diplomatura Superior en </br> Gestión y Administración de Empresas de familia</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/diplomatura">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:ecoposgrado@gmail.com"> ecoposgrado@gmail.com</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Ciencias Ecónomicas</td>
                                  
                                    <td>Diplomatura Superior en </br> Estudios de Procesos Socioeconómicos</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/diplomatura">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:ecoposgrado@gmail.com"> ecoposgrado@gmail.com</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             
                             
                             
                            
                             <tr>
                                    <td>Derecho</td>
                                  
                                    <td>Diplomatura Superior en </br> Derecho de las Familias, Niños, Niñas y Adolescentes</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/pdf/resoluciones/resolucion_159.pdf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:diplomaturadefamiliadchvirtual@gmail.com"> diplomaturadefamiliadchvirtual@gmail.com</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             <tr>
                                    <td>Derecho</td>
                                    <td>Curso de Posgrado Virtual:</br> Cuestiones actuales del Derecho Sucesorio </td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/cursos">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto: sucesoriovirtualdch@gmail.com">  sucesoriovirtualdch@gmail.com</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                            
                             <tr>
                                    <td>Derecho</td>
                                  
                                    <td>Diplomatura Superior en </br> Técnicas para la Investigación Empírica en Ciencias Jurídicas y Sociales</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/diplomatura">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto: info.posgrado.derecho@comunidad.unne.edu.ar">  info.posgrado.derecho@comunidad.unne.edu.ar</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                            
                             <tr>
                                    <td>Medicina</td>
                                  
                                    <td>Diplomatura Superior en </br> Pediatría Clínica Avanzada</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://posgrado.unne.edu.ar/carreras/diplomatura">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td><a href="mailto:posgrado@med.unne.edu.ar"> posgrado@med.unne.edu.ar</a></td>
                                    {{-- <td></td>--}}
                                    </tr> 
                             
                                    <tr>
                                        <td>Odontología</td>
                                        <td>Curso de Posgrado: ¿Cómo diseñar dispositivos pedagógicos digitales y originales a través de las TIC y las TAC en Ciencias de la Salud?</td>
                                        <td>http://posgrado.unne.edu.ar/carreras/cursos</td><td>posgrado@odn.unne.edu.ar</td>
                                    </tr>
                                       
                             <tr>
                                    <td>Ciencias Exactas y Naturales y Agrimensura</td>
                                   
                                    <td>Diplomatura Universitaria en</br> Programación y Robótica Educativa</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://exa.unne.edu.ar/postgrado/1/index.php?tabla=dupyre2020">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td>&nbsp;</td></tr>
                            <tr>
                                    <td>Ciencias Exactas y Naturales y Agrimensura</td>
                                   
                                    <td>Diplomatura Universitaria en</br> Sistemas Fotovoltaicos</td>
                                    {{-- <td></td> --}}
                                    <td><a taget="_blank" href="http://exa.unne.edu.ar/postgrado/1/index.php?tabla=dusf">más información</a></td>
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    {{-- <td></td> --}}
                                    <td></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-especializacion" role="tabpanel" aria-labelledby="pills-especializacion-tab">

                        <table class="table table-sm table-striped text-left">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                    <th>Oferta</th>
                                    {{-- <th>Contenido</th> --}}
                                    <th>Link</th>
                                    <th>Consultas</th>
                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-maestria" role="tabpanel" aria-labelledby="pills-maestria-tab">

                        <table class="table table-sm table-striped text-left">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                    <th>Oferta</th>
                                    {{-- <th>Contenido</th> --}}
                                    <th>Link</th>
                                    <th>Consultas</th>
                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-doctorado" role="tabpanel" aria-labelledby="pills-doctorado-tab">

                        <table class="table table-sm table-striped text-left">
                            <thead>
                                <tr>
                                    <th>Facultad</th>
                                    <th>Oferta</th>
                                    {{-- <th>Contenido</th> --}}
                                    <th>Link</th>
                                    <th>Consultas</th>
                            
                                </tr>
                            </thead>
                        </table>
                    </div>
                    
                  </div>
           
               
               
             </div>
         </div>
        </div>
    </div>
{{-- end row --}}
</div>
{{-- end container --}}
@endsection
