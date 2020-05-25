@extends('layouts.app')

<?php $page_en_cours = 'presentation';?>
@section('content')

<div class="container text-center">
    <div class="row">

                <div class="col-sm-3 col-md-12">
                    <img src="{{asset('img/loca.jpg')}}" style="width:40px;"> <a class="title" text center><strong><em> <span style=" font-size: 40px; color:#046380; text-decoration: underline;" >SmartLoire</span> </em></strong></a><br><br><br>
                </div>

                <!-- google_ad_section_start -->
                <p style="font-size: 20px;text-align: justify; ">
                    SmartLoire est un planificateur d'itinéraire en ligne pour vous aider à trouver l'itinéraire
                    le plus rapide le long de multiples adresses. Le meilleur choix lorsque vous ne devez pas passer
                    par des endroits multiples.
                    SmartLoire trouve le chemin le plus rapide en triant tous vos arrêts d'une manière la plus optimale.
                    Cela vous permet d'économiser du temps et de l'argent. Et il aide à préserver l'environnement. </p>
                <h2>Planification d'itinéraires des endroits multiples</h2> <p style="font-size: 20px;text-align: justify; ">  C'est plus de personnes que vous pourriez penser. Beaucoup de gens
                    voyagent à de nombreux endroits tous les jours. Des touristes, des couriers, des transporteurs et des livreurs.
                    Mais aussi les huissiers, les inspecteurs et les services de rammasage passent par de
                    nombreuse adresses tous les jours. Et puis il y a les techniciens d'entretien,
                    des fripperies et des services de déchets. Nombreux sont ceux qui profitent de ce
                    planificateur d'itinéraire intelligent qui trouve le chemin le plus rapide. </p>
                <h3>Planification d'itinéraire en ligne gratuit avec des destinations multiples</h3>
                <p style="font-size: 20px;text-align: justify; "> Il y a beaucoup de développements dans les transports, comme les voitures économes
                    en carburant et bien plus encore. Mais il comprend aussi la planification des itinéraires
                    innovants par l'Internet. </p>

    </div>
</div>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">SmartLoire</h2>
                    <p>Visiter les châteaux de la loire.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Informations</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">A propos</a></li>
                        <li><a href="#" class="py-2 d-block">Service</a></li>
                        <li><a href="#" class="py-2 d-block">Termes et Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Devenir un partenir</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"> Support Client</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                        <li><a href="#" class="py-2 d-block">Conseils</a></li>
                        <li><a href="#" class="py-2 d-block">How it works</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Poser une question?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                            <li><a href="#" src="{{asset('img/img8.png')}}" width="50" height="50"></a></li>
                            <li><a href="#" src="{{asset('img/img6.jpg')}}" width="50" height="50"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>





    @endsection
