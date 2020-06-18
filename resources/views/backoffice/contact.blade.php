@extends('layouts.app')

<?php $page_en_cours = 'contact';?>



@section('content')



        <div class="container">
            <h2 class="text-center">Nous contacter</h2>

           <div class="row">
               <div class="col-md-6 col-md-offset-1 col-sm-8 col-md-offset-1">

                   <form method="POST" action="contact">
                       {{csrf_field()}}

                       <div class="form-group">
                           <label for="nom" class="control-label">Nom</label>
                           <input type="text" class="form-control" name="nom" id="nom" required="required">
                           {{$errors->first('nom','<span class="help-block">:description</span>')}}

                       </div>
                       <div class="form-group">
                           <label for="email" class="control-label"> Email</label>
                           <input type="email" class="form-control" name="email" id="email"  required="required">
                           {{$errors->first('email','<span class="help-block">:description</span>')}}
                       </div>
                       <div class="form-group">
                           <label for="sujet" class="control-label">Sujet de la demande</label>
                           <input type="text" class="form-control" name="sujet" id="sujet"  required="required">
                           {{$errors->first('sujet','<span class="help-block">:description</span>')}}
                       </div>
                       <div class="form-group">
                           <label for="description" class="control-label">Votre demande</label>
                           <textarea class="form-control" name="description" rows="10" cols="10" id="description"  required="required">
                             {{$errors->first('description','<span class="help-block">:description</span>')}}
                        </textarea>
                       </div>
                       <div class="form-group">
                           <button class="btn btn-primary btn-block" type="submit">Envoyer &raquo;</button>
                       </div>
                   </form>
               </div>
               <style>
                   .vertical-line{
                       border-left: ridge ;
                       display: inline-block;
                       height: auto;
                       margin: 0 30px;
                   }
               </style>
               <span class="vertical-line"></span>
               <div class="col" id="loca_adress">
                   <!--Adresse et contact-->
                   <div class="col-lg-12" id="info_localisation">
                       <!--Logo et texte sécrétariat-->
                       <div class="row">

                           <div class="col-lg-10">
                               <p>Bureau</p>
                               <p>Ouvert de 9H à 18H</p>
                               <p>+33 2 47 36 70 20</p>
                               <p>ousmanemoussa.thiam@univ-tours.fr</p>
                           </div>
                       </div>

                       <!--Logo et texte localisation-->
                       <div class="row">

                           <div class="col-lg-10">
                               <b>Faculté de Sciences et Techniques, Bâtiment L</b>
                               <p>1 avenue Monge, Parc de Grandmont</p>
                               <p>37200 Tours.</p>
                           </div>
                       </div>


                       <!-- Modal -->

                   </div>
                   <br/>
                   <!--Carte google-->
                   <div class="col-lg-10">
                       <iframe
                           src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5405.525474863435!2d0.701988!3d47.35803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fcd68f781fe08d%3A0x216b3c7ed1f3dba3!2s1+Avenue+Monge%2C+37200+Tours!5e0!3m2!1sfr!2sfr!4v1541269176032"
                           width="100%" height="300" max-width="992px" ; frameborder="0" style="border:0"
                           allowfullscreen></iframe>
                   </div>
               </div>
           </div>
            <br>


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
