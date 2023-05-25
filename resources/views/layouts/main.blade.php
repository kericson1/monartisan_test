<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Boocic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/fevicon.png') }}')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/images/logo-monartisan.png') }}" alt="logo"
                                            style="width: 50%; height:auto">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="{{ url('/') }}">Acceuil</a> </li>
                                        <li> <a href="#about">Sinistre</a> </li>
                                        <li> <a href="#contact">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
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

                            <a class="btn btn-danger">Consulter FAQ</a>
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
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                        aria-label="Success:">
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
                {{-- <div class="alert alert-success alert-dismissible fade show successMessage" role="alert"
                    id="successMessage" style="display: none">
                    <span class="showSuccess"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> --}}

                <form id="sinistre_form" action="#">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="assurance">Assurance <span>*</span> <span id="error_assurance"></span></label>
                            <select id="assurance" class="form-control" name="assurance">
                                <option selected value="" na>Choisir</option>
                                <option value="NSIA">NSIA</option>
                            </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="police">Police <span>*</span> <span id="error_police"></span></label>
                            <input type="text" class="form-control" id="police" name="police"
                                placeholder="Police">

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
    <!-- end abouts -->

    <!-- Download -->
    {{-- <div id="screenshot" class="Screenshot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Screenshot</h2>
                        <span>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img class="first-slide"
                                    src="{{ asset('assets/images/banner.png') }}" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="second-slide"
                                    src="{{ asset('assets/images/banner.png') }}" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="third-slide"
                                    src="{{ asset('assets/images/banner.png') }}" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i
                                class='fa fa-angle-left'></i></a> <a class="carousel-control-next"
                            href="#main_slider" role="button" data-slide="next"> <i
                                class='fa fa-angle-right'></i></a>
                    </div>
                    <div class="read-more">
                        <a href="Javascript:void(0)">download now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end Download -->

    <!-- service -->
    {{-- <div id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Services </h2>
                        <span>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of <br>using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container margin-r-l">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/1.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/1.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/1.jpg') }}" class="fancybox"
                                    rel="ligthbox">Food</a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/2.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/2.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/1.jpg') }}" class="fancybox"
                                    rel="ligthbox">Fashion</a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/3.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/3.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/3.jpg') }}" class="fancybox"
                                    rel="ligthbox">Booking</a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/4.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/4.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/4.jpg') }}" class="fancybox"
                                    rel="ligthbox">Marketing</a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/5.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/5.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/5.jpg') }}" class="fancybox"
                                    rel="ligthbox">Design</a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                    <div class="service-box">
                        <figure>
                            <a href="{{ asset('assets/images/6.jpg') }}" class="fancybox" rel="ligthbox">
                                <img src="{{ asset('assets/images/6.jpg') }}" class="zoom img-fluid "
                                    alt="">
                            </a>
                            <span class="hoverle">
                                <a href="{{ asset('assets/images/6.jpg') }}" class="fancybox" rel="ligthbox">Making
                                    Food</a>
                            </span>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end service -->
    <!-- our blog -->
    {{-- <div id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Blog</h2>
                        <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{ asset('assets/images/blog-image0.jpg') }}" alt="#" />
                            <span>10 August 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="Comment"> 06 </strong> Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{ asset('assets/images/blog-image.jpg') }}" alt="#" />
                            <span>12 August 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="Comment"> 06 </strong> Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{ asset('assets/images/blog-image.jpg') }}" alt="#" />
                            <span>14 August 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="Comment"> 06 </strong> Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="blog-box">
                        <figure><img src="{{ asset('assets/images/blog-image0.jpg') }}" alt="#" />
                            <span>15 August 2019</span>
                        </figure>
                        <div class="travel">
                            <span>Post By : Travel Agency</span>
                            <p><strong class="Comment"> 06 </strong> Comment</p>
                            <p><strong class="like">05 </strong>Like</p>
                        </div>
                        <h3>London Amazing Tour</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end our blog -->
    <!-- Testimonial -->
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
                                    <input class="contactus" placeholder="Téléphone" type="text"
                                        name="contact_phone" id="contact_phone">
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
    <!-- end Testimonial -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Adresse</h3>
                            <i><img src="{{ asset('assets/icon/3.png') }}">MON ARTISAN SAS Côte d'ivoire, Abidjan</i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Liens utiles</h3>
                            <i><img src="{{ asset('assets/icon/1.png') }}">Locations</i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Social Media </h3>
                            <ul class="contant_icon">
                                <li><img src="{{ asset('assets/icon/fb.png') }}" alt="icon" /></li>
                                <li><img src="{{ asset('assets/icon/tw.png') }}" alt="icon" /></li>
                                <li><img src="{{ asset('assets/icon/lin(2).png') }}" alt="icon" /></li>
                                <li><img src="{{ asset('assets/icon/instagram.png') }}" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 width">
                        <div class="address">
                            <h3>Newsletter </h3>
                            <input class="form-control" placeholder="Enter your email" type="type"
                                name="Enter your email">
                            <button class="submit-btn">Subscribe</button>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="copyright">
                <p>Copyright 2023 Tous droits réservés par <a href="{{ url('/') }}">Monartisan</a></p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script>
        $(document).ready(function() {
            // $(".fancybox").fancybox({
            //     openEffect: "none",
            //     closeEffect: "none"
            // });

            // $(".zoom").hover(function() {

            //     $(this).addClass('transition');
            // }, function() {

            //     $(this).removeClass('transition');
            // });

            // **********************************************************************************************************
            /*
            ------------------- Declaration de sinistre avec jquery et AJAX --------------------------------------------
            */
            $("#sinistreForm").hide()
            $("#sinistreButton").on('click', function() {
                $("#sinistreForm").show(1000)
                $("#sinistreButton").hide()
                $("#success_message").hide()
            })

            $("#sinistre_send").on('click', function() {
                $.ajax({
                    type: "POST",
                    url: "sinistre",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        assurance: $("#assurance").val(),
                        contact1: $("#contact1").val(),
                        date_sinistre: $("#date_sinistre").val(),
                        details: $("#details").val(),
                        lieu: $("#lieu").val(),
                        nom: $("#nom").val(),
                        police: $("#police").val(),
                        email: $("#email").val(),
                        contact2: $("#contact2").val(),
                        nature: $("#nature").val(),
                    },
                    success: function(resp) {
                        $("#succes").show()
                        $("#success_message").show()

                        $("#sinistreForm").hide(1000)
                        $("#sinistreButton").show()
                        var data = resp.data

                        $(".success_nom").html("Nom: " + data.nom + ", ")
                        $(".success_assurance").html("Assurance: " + data.assurance + ", ")
                        $(".success_police").html("Police: " + data.police + ", ")
                        $(".success_email").html("Email: " + data.email + ", ")
                        $(".success_contact1").html("Contact1: " + data.contact1 + ", ")
                        $(".success_contact2").html("Contact2: " + data.contact2 + ", ")
                        $(".success_lieu").html("Lieu: " + data.lieu + ", ")
                        $(".success_nature").html("Nature: " + data.nature + ", ")
                        $(".success_date").html("Date: " + data.date + ", ")
                        $(".success_details").html("Details: " + data.details)
                        $('#sinistre_form')[0].reset()
                    },
                    error: function(resp) {
                        var datas = JSON.parse(resp.responseJSON.error)
                        $.each(datas, function(key, value) {
                            $('#error_' + key).html(value).css({
                                "color": "#f00"
                            })
                        })
                    }
                })
            })

            // contact_button

            $("#contact_button").on('click', function() {
                $.ajax({
                    type: "POST",
                    url: "contact",
                    data: {
                        '_token': "{{ csrf_token() }}",
                        contact_phone: $("#contact_phone").val(),
                        contact_email: $("#contact_email").val(),
                        contact_message: $("#contact_message").val(),
                    },
                    success: function(resp) {
                        var data = resp.data
                        $("#contact_success_message").show()
                        $(".success_contact_phone").html("Téléphone: " + data.contact_phone + ", ")
                        $(".success_contact_email").html("Email: " + data.contact_email +
                            ", ")
                        $(".success_contact_message").html("Message: " + data.contact_message +
                            ", ")
                        $('#contactForm')[0].reset()
                    },
                    error: function(resp) {
                        var datas = JSON.parse(resp.responseJSON.error)
                        $.each(datas, function(key, value) {
                            $('#error_' + key).html(value).css({
                                "color": "#f00"
                            })
                        })
                    }
                })
            })
        });
    </script>
</body>

</html>
