@extends('layouts.app')

@section('content')



    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d86398.08393304166!2d0.6981347676757814!3d47.413109071204815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1590124737806!5m2!1sfr!2sfr"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <div class="card" id="zone_info" style="width:680px; margin-top: 30px">
        <div class="card-body" >
            <!-- Contenu de la zone carrée-->
            <div class="row">

                <div class="col-lg-5" >

                    <img src="{{asset('img/loca.jpg')}}" style="width:40px;"><a href="http://127.0.0.1:8000/presentation" class="title" text center><strong><em> <span style=" font-size: 40px; color:#046380; text-decoration: underline;" >SmartLoire</span> </em></strong></a><br><br><br>
                    <p style="font-size: 20px;text-align: justify; margin-left: 10px">
                        SmartLoire est un planificateur d'itinéraire en ligne pour vous aider à trouver l'itinéraire
                        le plus rapide le long de multiples adresses. Le meilleur choix lorsque vous ne devez pas passer
                        par des endroits multiples <a href="http://127.0.0.1:8000/presentation">Afficher plus...</a>.</p>



                </div>
                <br/>
                <!--Carte google-->
                <div class="col-lg-7">
                    <img class="img-fluid" src="{{asset('img/image.jpg')}}" style="width: 300px; margin-right: 20px;  margin-top: 70px">

                </div>
            </div>
        </div>
    </div><br>




    <div class="card" >
        <div class="card-body" style="width: 300px">

        </div>
    </div>
    <br>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center ">
            <h2 style=" padding-left: 0px ;" > Visiter les châteaux du Centre-Val de Loire   </h2>

        </div>
    </div>
    <div id="section_blanche" class="container-fluid text-center" style="padding-top:70px;padding-bottom:70px; margin: 40px">
        <div class="container">
            <h1 class="titre_souligne">Vos Futures Destinations</h1>
            <div class="row">
                <div class="col-md-12" id="logo_partenaires">

                    <a href="https://www.soprasteria.com/fr/a-propos/sopra-steria-en-bref" target="_blank"><img src="{{asset('img/chambord.jpg')}}"
                                                                                                                alt="Soprasteria" width="200"></a>
                    <a href="https://www.apside.com/" target="_blank"><img src="{{asset('img/amboise.jpg')}}"
                                                                           alt="Apside" width="220"></a>
                    <a href="https://www.umanis.com/en-bref/" target="_blank"><img src="{{asset('img/langeais.jpg')}}"
                                                                                   alt="Umanis" width="200"></a>
                    <a href="https://www.acensi.fr/ACENSI - Présentation.html" target="_blank"><img src="{{asset('img/chateau.jpg')}}"
                                                                                                    alt="Acensi" width="200"></a>
                    <a href="https://www.umanis.com/en-bref/" target="_blank"><img src="{{asset('img/sully.jpg')}}"
                                                                                   alt="Umanis" width="230"></a>

                </div>
            </div>
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
