@extends('master')
@section('title', 'Projets')
@section('content')
                <!-- Projects Section-->
                <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projets</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Cards-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">NodeJS Api</h2>
                                            <p>Ce projet est une application dédiée aux films, qui récupère les données depuis une API
                                            externe grâce à un token d’authentificaion fourni par le site The Movie Database.
                                            L’objecif est d’aﬃcher toutes les informaions détaillées d’un film, y compris sa
                                            couverture.</p>
                                        </div>
                                        <img class="img-fluid w-50" src="{{asset('assets/projet1.webp')}}" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Stampee PHP MVC</h2>
                                            <p>Projet de site d'enchère de timbre sur le model MVC PHP sembable à Laravel.</p>
                                            <p>Gestion utilisateurs et des enchères ainsi que des filtres. </p>
                                        </div>
                                        <img class="img-fluid w-50" src="{{asset('assets/stampee.webp')}}" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Thème wordpress</h2>
                                            <p>Créer un site WordPress pour un club de voyage offrant à ses membres des voyages exclusifs vers des destinations uniques à travers le monde.</p>
                                            <p>Utilisation de plusieurs technologies comme SASS, javascript, wordpress infrastructure</p>
                                        </div>
                                        <img class="img-fluid w-50" src="{{asset('assets/club-de-voyage.png')}}" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Construisons le futur ensemble.</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contactez-moi</a>
                    </div>
                </div>
            </section>
@endsection