@extends('master')
@section('title', 'Home')
@section('content')
<header class="py-5">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-xxl-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="fs-3 fw-light text-muted">Développeur web full-stack</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">En recherche de stage.</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/projets">Projets</a>
                                    <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="profile bg-transparent">
                                    <img class="profile-img" src="{{asset('assets/logo.png')}}" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">Bonjour</span></h2>
                                <p class="lead fw-light mb-4">Petit tour d'horizon.</p>
                                <p class="text-muted">Passionné depuis toujours par l'informatique, j'ai choisi de transformer cette passion en métier en développant mes compétences et en explorant un nouvel univers professionnel.</p>
                                <p class="text-muted">Actuellement étudiant en conception et programmation de sites Web au cégep Maisonneuve à Montréal, j'apprends à réaliser des maquettes de qualité jusqu'à leur déploiement en ligne.</p>
                                <p class="text-muted">Curieux et motivé, je suis déterminé à continuer d'apprendre et à saisir de nouvelles opportunités pour progresser et devenir un meilleur développeur.</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="text-gradient" href="https://www.linkedin.com/in/mathieu-ledeur-439396247/"><i class="bi bi-linkedin"></i></a>
                                    <a class="text-gradient" href="https://github.com/TekGeekdev"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection