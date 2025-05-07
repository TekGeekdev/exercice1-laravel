@extends('master')
@section('title', 'Home')
@section('content')
<div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Parcours</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2018 - 2020</div>
                                                <div class="small fw-bolder">Agent de sécurité</div>
                                                <div class="small text-muted">Port grimaud</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Surveillance sécurité, incendie et sur mer dans une cité lacustre, multiples missions du simple accueil des personnes au sauvetage de personnes en détresse.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">2005 - 2017</div>
                                                <div class="small fw-bolder">DCNS Naval groupe</div>
                                                <div class="small text-muted">Saint-tropez</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Chargé de la surveillance et de la sécurisation d’un site sensible de l’industrie navale. Contrôle des accès, rondes de sécurité, gestion des incidents et application stricte des consignes de sûreté en coordination avec les équipes internes et les forces de l’ordre si nécessaire.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2024-2025</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">College</div>
                                                    <div class="small text-muted">Maisonnneuve, Montréal</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Conception et programmation de site web</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Concevoir et maintenir à jour des sites Web transactionnels (programmation, design, bases de données). Établir l’architecture informationnelle, le design et la configuration des sites Web.</div></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2021 -2023</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">DES</div>
                                                    <div class="small text-muted">Outremont, Montréal</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Diplome d'étude secondaire</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>Diplome d'étude secondaire avec matières enrichie en anglais, mathematique et science.</div></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Languages list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Typescript</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div></div>
                                        </div>
                                    </div>
                                    <!-- Professional skills list-->
                                    <div >
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Outils</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Docker</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Kubernetes</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Figma</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Déploiement en ligne</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            @endsection