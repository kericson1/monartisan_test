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
@yield('content')
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
                            <ul>
                                <li><a href="{{url('/')}}" class="link text-white">Acceuil</a></li>
                                <li><a href="#sinistre" class="link text-white">Sinistre</a></li>
                                <li><a href="#contact" class="link text-white">Contact</a></li>
                                <li><a href="{{url('/faq')}}" class="link text-white">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Social Media </h3>
                            <ul class="contant_icon">
                                <li>
                                    <a href="https://www.facebook.com/monartisan.ci">
                                        <img src="{{ asset('assets/icon/fb.png') }}" alt="icon" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/mon_artisanci">
                                        <img src="{{ asset('assets/icon/tw.png') }}" alt="icon" />
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/mon-artisan">
                                        <img src="{{ asset('assets/icon/lin(2).png') }}" alt="icon" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
