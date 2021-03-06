<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wechta - Osiedle Druskienicka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/gif" sizes="16x16">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- jQuery UI style -->
    <link href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
        <a class="navbar-brand d-lg-block d-none" href="{{ route('index') }}"><img class="img-fluid header-img" src="{{ asset('images/logo-leaf.png') }}" alt="Logo"></a>
        <a class="navbar-brand d-lg-none d-block" href="#"><img class="img-fluid my-3" src="{{ asset('images/logo.png') }}" alt="Logo mobile"></a>
        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul id="navbar" class="nav nav-tabs navbar-nav text-uppercase">
                <li class="nav-item">
                    <a class="nav-link active estate-link" href="#">Osiedle Druskienicka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Zdjęcia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aktualności</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
                </li>
            </ul>
            <ul class="nav justify-content-around">
                <li class="navigation__phone nav-link">
                    <img src="{{ asset('images/phone-icon.png') }}" alt="phone icon">
                    <a href="tel:+48618663014">61 866 30 14</a>
                </li>
                <li class="navigation__mail nav-link">
                    <img src="{{ asset('images/email-icon.png') }}" alt="phone icon">
                    <a href="mailto:mieszkania@wechta.pl">mieszkania@wechta.pl</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section class="main-image">
            <div class="container-fluid px-0">
                <img class="img-fluid builds-image" src="{{ asset('images/Osiedle-Druskienicka.jpg') }}" alt="Osiedle Druskienicka">
            </div>
        </section>
        <section  class="blue-bg-cut">
            <div class="container">
                <h1 class="text-center text-uppercase blue pt-5 pb-2">Osiedle Druskienicka</h1>
                <div class="text-center grey bigger-text ml-25"><span class="blue mr-3">/</span>Jakieś wizerunkowe hasło
                </div>
            </div>
            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="homepage-slider">
                            <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                            <img class="img-fluid" src=".{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                            <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                            <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                        </div>
                        <div class="homepage-slider-nav mt-4">
                                <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                                <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                                <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                                <img class="img-fluid" src="{{ asset('images/img-slick-home/Layer-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <h2 class="blue text-uppercase font-weight-bold mb-5">Coś o świetnej <br />lokalizacji</h2>
                        <div>Projekt osiedla mieszkaniowego przy ul. Druskienickiej na Podolanach zakłada realizację 9
                            budynków, których budowa przebiegać będzie etapowo. Obecnie w ofercie sprzedaży I etap
                            obejmujący 3 budynki ( nr 1, 2, 3), których realizację przewidziano na IV kwartał 2019 r.
                            Większość mieszkań usytuowanych na parterach będzie posiadać ogródki. Na terenie kompleksu
                            przewidziano sieć dróg wewnętrznych, miejsca parkingowe, place zabaw, lokale usługowe oraz
                            tereny zielone. Nieopodal usytuowane są tereny rekreacyjne nad jeziorami: Rusałka,
                            Strzeszyńskie oraz Kierskie.</div>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="d-lg-flex d-block justify-content-around align-items-center">
                    <div class="mb-5 mb-lg-0">
                        <img class="img-fluid  d-block mx-auto" src="{{ asset('images/icons/architecture.png') }}" alt="Nowoczesna architektura">
                        <p class="text-center">Nowoczesna <br/>architektura</p>
                    </div>
                    <div class="mb-5 mb-lg-0">
                        <img class="img-fluid  d-block mx-auto" src="{{ asset('images/icons/house.png') }}" alt="Mieszkania 1-3 pokojowe">
                        <p class="text-center">Mieszkania <br/>1-3 pokojowe</p>
                    </div>
                    <div class="mb-5 mb-lg-0">
                        <img class="img-fluid  d-block mx-auto" src="{{ asset('images/icons/localization.png') }}" alt="Doskonała lokalizacja">
                        <p class="text-center">Doskonała <br>lokalizacja</p>
                    </div>
                    <div class="mb-5 mb-lg-0">
                        <img class="img-fluid  d-block mx-auto" src="{{ asset('images/icons/infrastruktura.png') }}" alt="Świetna infrastruktura">
                        <p class="text-center">Świetna <br>infrastruktura</p>
                    </div>
                    <div class="mb-5 mb-lg-0">
                        <img class="img-fluid  d-block mx-auto" src="{{ asset('images/icons/car.png') }}" alt="Hala garażowa i miejsca postojowe">
                        <p class="text-center">Hala garażowa <br>i miejsca postojowe</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="blue-bg-full">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-lg-6 col-12">
                        <h2 class="blue text-uppercase font-weight-bold mb-5">Coś o życiu <br/>fajnym miejscu</h2>
                        <div>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec iaculis nulla. Curabitur
                            lacinia dui nisi, id gravida ipsum imperdiet in. Sed quis ullamcorper est. Vestibulum
                            viverra at velit sit amet elementum. Etiam sapien ex, bibendum at ultrices vitae, feugiat
                            vitae mauris. Nulla aliquam eros non dui tristique, quis ornare enim lacinia.
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img class="img-fluid" src="{{ asset('images/family.jpg') }}" alt="Rodzina mieszkająca na Osiedlu Druskienicka">
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-5">
            <div class="container">
                <h2 class="text-center text-uppercase grey my-5">Aktualności</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 d-lg-flex d-block">
                        <img class="img-fluid img-news" src="{{ asset('images/flat.jpg') }}" alt="Mieszkanie Druskienicka">
                        <div class="news-text blue-bg-full px-0 px-lg-3">
                            <div class="text-uppercase grey news-text__date py-3">11 grudnia 2019</div>
                            <div class="news-text__title blue font-weight-bold">Mieszkanie z opcją wykończenia pod klucz</div>
                            <div class="news-text__read-more-btn text-right white">czytaj więcej</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-lg-flex d-block mt-3 mt-lg-0">
                        <img class="img-fluid img-news" src="{{ asset('images/building.jpg') }}" alt="Mieszkanie Druskienicka">
                        <div class="news-text blue-bg-full px-0 px-lg-3">
                            <div class="text-uppercase grey news-text__date py-3">11 grudnia 2019</div>
                            <div class="news-text__title blue font-weight-bold">Mieszkanie z opcją wykończenia pod klucz</div>
                            <div class="news-text__read-more-btn text-right white">czytaj więcej</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="py-5 white">
        <div class="container">
            <div class="row justify-content-center">
                <img class="img-fluid h-100 mr-5" src="{{ asset('images/logo-white.png') }}" alt="Logo Wechta Fiz">
                <div class="footer-text mt-3">
                    <p class="font-weight-bold">/  Wechta Inwestycje Spółka z o.o.</p>
                    <p>ul. Szyperska 14, 61-754 Poznań</p>
                    <p>tel:<a class="white" href="tel:0618663014">61 866 30 14</a><a class="white" href="tel:0618392232"></a></p>
                    <p>e-mail: <a class="white" href="mailto:mieszkania@wechta.pl">mieszkania@wechta.pl</a></p>
                </div>
            </div>
            <div class="row pt-5 footer-copyright">
                <div class="col-12 text-center">
                <p class="mb-0">Zakaz kopiowania materiałów bez zgody autora</p>
                <p>Copyright © 1998-2018 Wechta Inwestycje Spółka z ograniczoną odpowiedzalnością.</p>
            </div>
            </div>
        </div>
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery UI JavaScript -->
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>