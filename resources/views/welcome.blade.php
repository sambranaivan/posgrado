@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p></p><div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-info text-center">Noticias</h2>
                                </div>
                                {{-- COLUMNA 1 --}}
<p></p>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                           <a href="https://medios.unne.edu.ar/index.php?option=com_k2&view=item&id=4309:la-unne-avanza-con-defensas-de-tesis-de-posgrado-bajo-la-modalidad-a-distancia&Itemid=128&lang=es"><h4 class="card-title text-info text-left">
                                            La UNNE avanza con defensas de Tesis de Posgrado bajo la modalidad a distancia
                                           </h4></a>
                                       
                                           <a href="https://medios.unne.edu.ar/index.php?option=com_k2&view=item&id=4309:la-unne-avanza-con-defensas-de-tesis-de-posgrado-bajo-la-modalidad-a-distancia&Itemid=128&lang=es"> <img class="img-fluid"   src="{{asset('img/noticias/noticia_0664.jpg')}}" alt=""></a>
                                            <p></p>
                                       <p class="card-text text-justify">
                                        Ante la imposibilidad de actividades presenciales por el Covid-19, la Universidad Nacional del Nordeste (UNNE) avanzó en la realización de sus primeras defensas de Tesis de Posgrado bajo la modalidad a distancia en varias unidades académicas. Destacan que además de ser una alternativa ante la emergencia sanitaria, se favoreció la visibilidad de las defensas, ya que pudieron ser presenciadas por público de distintas provincias y países.
                                       </p>
                                      
                                        </div>
                                    </div>
                                        <p></p>
                                    <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                              ABIERTA LA CONVOCATORIA DE BECAS 2020/2021
                                        </h4>
                                    <a href="{{route('becas')}}">
                                         <img class="img-fluid"   src="{{asset('img/noticias/carolina.jpg')}}" alt="">
                                         </a><p></p>
                                    <p class="card-text">PLAZOS DE SOLICITUD:</p>
<p class="card-text">Postgrado: 10 de marzo de 2020</p>

<p class="card-text">Doctorado, estancias cortas, programas de movilidad de profesores y estudios institucionales: 3 de abril a las 9 AM (hora española). Doctorado.IUE y Movilidad de profesorado argentino: 1 de abril, a las 9 AM, y el 2 de abril, a las 9 AM, respectivamente</p>
<p> <a href="{{route('becas')}}">>>Más Informacion sobre Becas</a></p>
                                      </p>
                                     </div>
                                 </div>
                                     <p></p>
                                <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                                Nueva Carrera de Posgrado en la FAU
                                        </h4>
                                        <a href="http://www.arq.unne.edu.ar/arq-solar/">
                                         <img class="img-fluid"   src="{{asset('img/noticias/diplosolar.jpg')}}" alt="">
                                         </a><p></p>
                                    <p class="card-text">Diplomatura Superior en Arquitectura Solar</p>
                                      <p>
                                            Abrieron las inscripciones para la Diplomatura Superior en Arquitectura Solar 📐🏠☀

                                            La oferta de posgrado con modalidad presencial será dictada por la Facultad de Arquitectura y Urbanismo - UNNE.

                                            Información e inscripción en:
                                            <a  href="http://www.arq.unne.edu.ar/arq-solar/">
                                            http://www.arq.unne.edu.ar/arq-solar/
                                            </a>

                                      </p>
                                     </div>
                                 </div>
                                <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                             Catedrática de la Universidad de Castila - La Mancha visitó Rectorado en el marco de la primera jornada de intercambio de experiencias de internacionalización entre universidades argentinas y europeas
                                        </h4>
                                        <p>
                                        <a href="#">
                                         <img class="img-fluid"   src="{{asset('img/noticias/rsl.jpg')}}" alt="">
                                         </a>
                                        </p>
                                    <p class="card-text text-justify">
                                        <p class="text-justify">Catedrática de la Universidad de Castila - La Mancha visitó Rectorado en el marco de la primera jornada de intercambio de experiencias de internacionalización entre universidades argentinas y europeas, que se realizará en la sede de la UNNE en Buenos Aires</p>

<p class="text-justify">En la mañana de hoy la doctora Marcela Genero Booco, de la Universidad de Castilla - La Mancha de España, se reunió la rectora Delfina Veiravé.</p>

<p class="text-justify">La visita protocolar se realizó en el marco del curso de Posgrado "Revisiones sistemáticas de la literatura, un enfoque práctico para realizar una investigación rigurosa", que la profesional dicta en la Facultad de Derecho.</p>

<p class="text-justify">Durante la reunión, ambas dialogaron sobre posgrados y las diferentes becas de investigación junto a la Secretaria de Posgrado Gladys Dapozo, y la Secretaria de Ciencia y técnica, María Silvia Leoni.</p>
                                     </div>
                                 </div>

                                </div>
                                {{-- //COLUMNA 2 --}}
                                <div class="col-md-4">

                                 <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                              Se presentó el Doctorado en Educación de la UNNE
                                        </h4>
                                        <p>
                                        <a href="#">
                                         <img class="img-fluid"   src="{{asset('img/noticias/dic19.jpg')}}" alt="">
                                         </a>

                                        </p>
                                        <p></p>
                                    {{-- <p class="card-text text-justify">
                                        La nueva oferta de posgrado, aprobada por la CONEAU en septiembre de este año, se dio a conocer ayer por la tarde en un acto dónde participaron la Secretaria de Posgrado, Gladys Dapozo, la Secretaria de Ciencia y Técnica, María Silvia Leoni, el Decano de la Facultad de Humanidades UNNE; Aldo Lineras, la Secretaria de Investigación y Posgrado de Humanidades, Teresa Artieda; y, el Coordinador Académico del Doctorado, Claudio Núñez.
                                    </p> --}}
                                    <p class="card-text text-justify">
                                  El doctorado tiene como objetivo brindar herramientas de comprensión e intervención tanto en los sistemas educativos de la región, sus políticas, sus concepciones, sus instituciones y sus prácticas, como también en espacios educativos no formales.
                                    </p>
                                    <p class="card-text text-justify">
                                        Los seminarios que comprenden el Doctorado en Educación, se organizan en torno a tópicos emergentes y clásicos como las tecnologías de la información y la comunicación, la educación de jóvenes y adultas, la interculturalidad, los pueblos indígenas, entre otros; con el fin de producir conocimientos que propicien la formación en educación.

                                      </p>
                                     </div>
                                 </div>


                                 {{--  --}}
                                 <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                             Nueva oferta de posgrado "Especialización en Gerenciamiento de empresas constructoras y de servicios"
                                        </h4>
                                        <p>
                                        <a href="http://bit.ly/2L2wND4">
                                         <img class="img-fluid"   src="{{asset('img/noticias/facuing.jpg')}}" alt="">
                                         </a>
                                        </p>
                                    <p class="card-text text-justify">
                                       La UNNE lanza la nueva oferta de posgrado "Especialización en Gerenciamiento de empresas constructoras y de servicios" que comenzará a dictarse en el 2020</p>

       <p class="card-text text-justify">La oferta académica, que será dictada por la Facultad de Arquitectura y Urbanismo - UNNE y la Facultad de Ingeniería - Universidad Nacional del Nordeste, será presentada el jueves 28 de noviembre a las 11 horas en la Sala del Consejo de la Facultad de Arquitectura en el #CampusResistencia.</p>

       <p class="card-text text-justify">La especialización tiene como objetivo alcanzar la promoción de conocimientos de técnicas de gestión empresarial en las empresas constructoras y de servicios, dotándolas de estrategias de administración, financiera, fiscal y de investigación de mercado para aumentar el desempeño empresarial aplicados al diseño de modelos de negocios innovadores, creativos, tecnológicamente avanzados y sostenibles desde un punto de vista social, económico y financiero, que permitan a las empresas del sector renovarse, proyectarse y crecer.</p>

       <p class="card-text text-justify">Más información en: <a href="http://bit.ly/2L2wND4">http://bit.ly/2L2wND4</a></p>

                                     </div>
                                 </div>
                                 {{--  --}}
                                 <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                             La UNNE presente en la primera reunión del Comité permanente de Posgrado de AUGM en Curitiba
                                        </h4>
                                        <p>
                                        <a href="#">
                                         <img class="img-fluid"   src="{{asset('img/noticias/curitiba.jpg')}}" alt="">
                                         </a>
                                        </p>
                                    <p class="card-text text-justify">
                                      La secretaria de Posgrado de la Universidad, Gladys Dapozo, participa de esta reunión realizada en la UFPR (Universidade Federal do Paraná), Brasil. En la misma se realizó una mesa debate sobre “Situación actual, desafíos y oportunidades del posgrado en las universidades de UGM”.</p>

<p class="card-text text-justify">Se presentaron los informes sobre las movilidades del programa Escala de Posgrado y se delinearon líneas de acción para consolidar el espacio de desarrollo del posgrado (ESPO-AUGM) entre las universidades participantes, entre otras cuestiones.</p>

<p class="card-text text-justify">La Asociación de Universidades Grupo Montevideo (AUGM) es una Red de Universidades públicas, autónomas y autogobernadas de Argentina, Bolivia, Brasil, Chile, Paraguay y Uruguay.</p>

                                     </div>
                                 </div>


                                </div>
                                {{-- COLUMAN 3 --}}
                                <div class="col-md-4">

                                 <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                               Se realizó el seminario-taller "Marcos de referencia para la creación y gestión de carreras de posgrado a distancia"
                                        </h4>
                                        <a href="https://www.youtube.com/watch?v=BNUwEY9lNiA">
                                         <img class="img-fluid"   src="{{asset('img/noticias/distamcia.PNG')}}" alt="">
                                         </a>
                                    <p class="card-text">
                                        Mirá el video y enterate de qué se trató 👇🏻

                                        <a href="https://www.youtube.com/watch?v=BNUwEY9lNiA">https://www.youtube.com/watch?v=BNUwEY9lNiA</a>
                                      </p>
                                     </div>
                                 </div>

                                 <p></p><div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-left">
                                               Se realizó la I Jornada de intercambio de experiencias en internacionalización entre Universidades argentinas y europeas
                                        </h4>
                                        <a href="#">
                                         <img class="img-fluid"   src="{{asset('img/noticias/uba.jpg')}}" alt="">
                                         </a>
                                    <p class="card-text text-justify">
                                       En la sede de la UNNE en CABA, se realizó la I Jornada de intercambio de experiencias en internacionalización entre Universidades argentinas y europeas </p>

                                        <p class="text-justify">La doctora Marcela Genero Bocco, de la Universidad Castilla La Mancha, fue una de las profesionales que expuso durante la actividad. Por su parte, el doctor Augusto Villa Monte disertó en videollamada desde #LaPlata, y finalmente, el doctor David Paton (de la Universidad Castilla La Mancha) concretó su presentacion desde Bari, #Italia.</p>

                                        <p class="text-justify">Estuvieron presentes referentes de las Universidades Nacionales de Quilmes, Moron y Tres de Febrero; del Instituto Universitario de la Policía Federal y de la Universidad Abierta Interamericana. Por parte de la UNNE, participó la Secretaria General de Posgrado, Gladys Dapozo, y el Secretario General de Relaciones Interinstitucionales, Gustavo Tripaldi.</p>

                                     </div>
                                 </div>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
{{-- end container --}}
@endsection
