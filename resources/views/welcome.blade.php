@extends('layouts.app')

@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-info">Noticias</h2>
                                </div>
                                {{-- COLUMNA 1 --}}
                                <div class="col-md-4">

                                 <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-center">
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
                                <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-center">
                                             Catedrática de la Universidad de Castila - La Mancha visitó Rectorado en el marco de la primera jornada de intercambio de experiencias de internacionalización entre universidades argentinas y europeas
                                        </h4>
                                        <p>
                                        <a href="http://www.arq.unne.edu.ar/arq-solar/">
                                         <img class="img-fluid"   src="{{asset('img/noticias/rsl.jpg')}}" alt="">
                                         </a>
                                        </p>
                                    <p class="card-text text-justify">
                                        <p>Catedrática de la Universidad de Castila - La Mancha visitó Rectorado en el marco de la primera jornada de intercambio de experiencias de internacionalización entre universidades argentinas y europeas, que se realizará en la sede de la UNNE en Buenos Aires</p>

<p>En la mañana de hoy la doctora Marcela Genero Booco, de la Universidad de Castilla - La Mancha de España, se reunió la rectora Delfina Veiravé.</p>

<p>La visita protocolar se realizó en el marco del curso de Posgrado "Revisiones sistemáticas de la literatura, un enfoque práctico para realizar una investigación rigurosa", que la profesional dicta en la Facultad de Derecho.</p>

<p>Durante la reunión, ambas dialogaron sobre posgrados y las diferentes becas de investigación junto a la Secretaria de Posgrado Gladys Dapozo, y la Secretaria de Ciencia y técnica, María Silvia Leoni.</p>
                                     </div>
                                 </div>

                                </div>
                                {{-- //COLUMNA 2 --}}
                                <div class="col-md-4">

                                 <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-center">
                                              Se presentó el Doctorado en Educación de la UNNE
                                        </h4>
                                        <p>
                                        <a href="http://www.arq.unne.edu.ar/arq-solar/">
                                         <img class="img-fluid"   src="{{asset('img/noticias/dic19.jpg')}}" alt="">
                                         </a>
                                        </p>
                                    <p class="card-text text-justify">
                                        La nueva oferta de posgrado, aprobada por la CONEAU en septiembre de este año, se dio a conocer ayer por la tarde en un acto dónde participaron la Secretaria de Posgrado, Gladys Dapozo, la Secretaria de Ciencia y Técnica, María Silvia Leoni, el Decano de la Facultad de Humanidades UNNE; Aldo Lineras, la Secretaria de Investigación y Posgrado de Humanidades, Teresa Artieda; y, el Coordinador Académico del Doctorado, Claudio Núñez.
                                    </p>
                                    <p class="card-text text-justify">
                                  El doctorado tiene como objetivo brindar herramientas de comprensión e intervención tanto en los sistemas educativos de la región, sus políticas, sus concepciones, sus instituciones y sus prácticas, como también en espacios educativos no formales.
                                    </p>
                                    <p class="card-text text-justify">
                                        Los seminarios que comprenden el Doctorado en Educación, se organizan en torno a tópicos emergentes y clásicos como las tecnologías de la información y la comunicación, la educación de jóvenes y adultas, la interculturalidad, los pueblos indígenas, entre otros; con el fin de producir conocimientos que propicien la formación en educación.

                                      </p>
                                     </div>
                                 </div>


                                </div>
                                {{-- COLUMAN 3 --}}
                                <div class="col-md-4">

                                 <div class="card">
                                     <div class="card-body">
                                        <h4 class="card-title text-info text-center">
                                               Se realizó el seminario-taller "Marcos de referencia para la creación y gestión de carreras de posgrado a distancia"
                                        </h4>
                                        <a href="http://www.arq.unne.edu.ar/arq-solar/">
                                         <img class="img-fluid"   src="{{asset('img/noticias/distamcia.png')}}" alt="">
                                         </a>
                                    <p class="card-text">
                                        Mirá el video y enterate de qué se trató 👇🏻

                                        <a href="https://www.youtube.com/watch?v=BNUwEY9lNiA">https://www.youtube.com/watch?v=BNUwEY9lNiA</a>
                                      </p>
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
