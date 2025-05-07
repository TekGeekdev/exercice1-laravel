@extends('master')
@section('title', 'Contact')
@section('content')
<section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Envie de discuter</h1>
                            <p class="lead fw-normal text-muted mb-0">Je suis ouvert à toute opportunité de travail, contactez-moi!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form id="contactForm" method="POST">
                                @csrf
                                    <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="name" 
                                        @isset($data) value="{{ $data?->name}}" @endisset/>
                                        <label for="name">Saissisez votre nom</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est requis</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" name="email"
                                        @isset($data) value="{{ $data?->email}}" @endisset/>
                                        <label for="email">Votre courriel</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">L'email est requis</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">L'email n'est pas valide</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" name="phone"
                                        @isset($data) value="{{ $data?->phone}}" @endisset/>
                                        <label for="phone">Votre numéro de téléphone</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Le numéro de téléphone est requis</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" 
                                        name="message">@isset($data){{ $data['message'] }}@endisset</textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Le message est requis</div>
                                    </div>
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Problème envoie formulaire</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Envoyer</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection