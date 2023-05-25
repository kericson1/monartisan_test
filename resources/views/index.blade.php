@extends('layouts/main')
@section('content')
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('assets/images/banner2.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Choisissez la solution dépannage qui vous convient !</h1>
                            <p>
                                Anticiper le moindre problème avec notre garantie AID :
                                Assistance Incidents Domestiques et bénéficier d'une intervention rapide
                                et efficace en cas de panne dans votre logement.
                            </p>
                            {{-- <a href="Javascript:void(0)" class="btn btn-primary">Déclarer un sinitre</a> --}}

                            <a class="btn btn-danger" href="{{url('/faq')}}">Consulter FAQ</a>
                            <a class="btn btn-success" href="#contact">Nous contacter</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="carousel-item">
                <img class="second-slide" src="{{ asset('assets/images/banner2.jpg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>Basic template</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and </p>
                        <a href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{ asset('assets/images/banner2.jpg') }}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1>Basic template</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and </p>
                        <a href="Javascript:void(0)">Read More</a>
                    </div>
                </div>
            </div> --}}
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
            <a class="bottom_arrow_scroll" href="#about"><img src="{{ asset('assets/icon/errow.png') }}" /></a>
        </div>
    </section>
    <!-- about  -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Sinitres</h2>
                        <span>
                            Un sinistre est un évènement couvert au contrat qui se réalise et qui pourrait donner lieu à
                            une indemnisation de la part de l'assureur. Par exemple, un dégât des eaux sur une toiture
                            ou un incendie.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row flexcss">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-box">
                        <h3>Définition de Sinistre </h3>
                        <p class="text-justify">
                            Prévoir l'avenir et tenter de savoir si telle de nos actions futures nous sera favorable, ce
                            que l'on peut réaliser avec des chances de succès ou ce que l'on doit éviter d'entreprendre
                            est le souci de chaque être humain. C'est une préoccupation qui n'échappait pas aux hommes
                            de l'Antiquité. Les devins répondaient à leurs attentes en examinant notamment le vol des
                            oiseaux. Le fait, d'en apercevoir un, perché ou volant à gauche, en latin "sinister", était
                            un signe jugé défavorable. En vieux français, ce mot latin avait donné "senestre"

                            De nos jours, le mot est utilisé dans le vocabulaire juridique du droit des assurances, pour
                            désigner toutes circonstances prévues au contrat d'assurance comme, le vol, l'incendie, le
                            décès du souscripteur ou d'un tiers, un naufrage, ou un dégâts des eaux, dont la survenance
                            génère pour la compagnie d'assurances l'obligation d'exécuter la prestation convenue.
                        </p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about-img">

                        <figure><img src="{{ asset('assets/images/aboutimg.png') }}" alt="img" /></figure>

                    </div>

                </div>
            </div>
            <p class="text-center mt-5">
                <a href="Javascript:void(0)" class="btn btn-primary text-center"
                    style="text-transform: uppercase; font-size:20px" id="sinistreButton">Déclarer un sinistre</a>
            </p>
            <div style="display:none" id="success_message" class="container mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                    </svg>
                    <div id="sinistre_saved" class="container">
                        <h3 id="succes">Sinistre déclaré avec succès</h3>
                        <span class="success_nom"></span>
                        <span class="success_police"></span>
                        <span class="success_assurance"></span>
                        <span class="success_email"></span>
                        <span class="success_contact1"></span>
                        <span class="success_contact2"></span>
                        <span class="success_lieu"></span>
                        <span class="success_nature"></span>
                        <span class="success_date"></span>
                        <span class="success_details"></span>
                    </div>
                </div>
            </div>
            <div id="sinistreForm" class="container mt-3">
                <form id="sinistre_form" action="#">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="assurance">Assurance <span>*</span> <span id="error_assurance"></span></label>
                            <select id="assurance" class="form-control" name="assurance">
                                <option selected value="" na>Choisir</option>
                                <option value="NSIA">NSIA</option>
                                <option value="SUNU">SUNU</option>
                                <option value="SIDAM">SIDAM</option>
                                <option value="BELIEFE">BELIEFE</option>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="police">Police <span>*</span> <span id="error_police"></span></label>
                            <input type="text" class="form-control" id="police" name="police" placeholder="Police">

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom et Prénoms <span>*</span> <span id="error_nom"></span></label>
                        <input type="text" class="form-control" id="nom" name="nom"
                            placeholder="Veuillez entrer votre nom et prénoms ">

                    </div>
                    <div class="form-group">
                        <label for="email">Email <span id="error_email"></span></label>
                        <input type="email" class="form-control" id="email" placeholder="xyz@mail.com"
                            name="email">

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="contact1">Contact 1 <span>*</span> <span id="error_contact1"></span></label>
                            <input type="text" class="form-control" id="contact1" name="contact1"
                                placeholder="Numéro de téléphone principal">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact2">Contact 2 <span id="error_contact2"></span></label>
                            <input type="text" class="form-control" id="contact2" name="contact2"
                                placeholder="Numéro de téléphone secondaire">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lieu">Lieu <span>*</span> <span id="error_lieu"></span></label>
                            <input type="text" class="form-control" id="lieu" name="lieu"
                                placeholder="Veuillez renseigner le lieu">

                        </div>
                        <div class="form-group col-md-6">
                            <label for="nature">Nature de l'intervention <span>*</span> <span
                                    id="error_nature"></span></label>
                            <select id="nature" class="form-control" name="nature">
                                <option selected value="">Choisir</option>
                                <option value="accident">Accident</option>
                                <option value="Incendie">Incendie</option>
                                <option value="Maladie">Maladie</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date_sinistre">Date de sinistre <span id="error_date"></span></label>
                        <input type="date" class="form-control" id="date_sinistre" placeholder="jj/mm/aaaa"
                            name="date_sinistre">

                    </div>
                    <div class="form-group">
                        <label for="date_sinistre">Details <span>*</span> <span id="error_details"></span></label>
                        <textarea name="details" id="details" cols="30" rows="5" class="form-control"></textarea>

                    </div>

                    <div class="form-group text-center">
                        <button type="button" id="sinistre_send" class="btn btn-primary"
                            style="text-transform: uppercase; font-size:20px">Declarer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h3>Contactez-nous</h3>
                        <p>Nous traiterons votre demande et nous vous reviendrons soit par mail ou directement par
                            appel.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 offset-md-3">
                    <div class="contact">
                        <div style="display:none" id="contact_success_message" class="container mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </symbol>
                            </svg>
                            <div class="alert alert-success d-flex align-items-center" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                    aria-label="Success:">
                                    <use xlink:href="#check-circle-fill" />
                                </svg>
                                <div id="contact_saved" class="container">
                                    <h4 id="succes">Votre Message a été envoyé avec succès</h4>
                                    <span class="success_contact_phone"></span>
                                    <span class="success_contact_email"></span>
                                    <span class="success_contact_message"></span>
                                </div>
                            </div>
                        </div>
                        <form action="#" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p><span>*</span> <span id="error_contact_phone"></p>
                                    <input class="contactus" placeholder="Téléphone" type="text" name="contact_phone"
                                        id="contact_phone">
                                </div>
                                <div class="col-sm-12">
                                    <p><span>*</span> <span id="error_contact_email"></p>
                                    <input class="contactus" placeholder="Email" type="email" name="contact_email"
                                        id="contact_email">
                                </div>
                                <div class="col-sm-12">
                                    <p><span>*</span> <span id="error_contact_message"></p>
                                    <textarea class="textarea" placeholder="Message" name="contact_message" id="contact_message">
                                
                                </textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="send" type="button" id="contact_button">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
