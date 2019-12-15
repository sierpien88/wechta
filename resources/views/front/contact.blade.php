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

<body class="contact-page">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
        <a class="navbar-brand d-lg-block d-none" href="{{ route('index') }}"><img class="img-fluid header-img" src="{{ asset('images/logo-leaf.png') }}"
                alt="Logo"></a>
        <a class="navbar-brand d-lg-none d-block" href="#"><img class="img-fluid my-3" src="{{ asset('images/logo.png') }}"
                alt="Logo mobile"></a>
        <button class="navbar-toggler mr-5" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul id="navbar" class="nav nav-tabs navbar-nav text-uppercase">
                <li class="nav-item">
                    <a class="nav-link estate-link" href="#">Osiedle Druskienicka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Zdjęcia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aktualności</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact') }}">Kontakt</a>
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
        <section>
            <div class="container my-5 pt-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12 text-right pr-5">
                        <h1 class="text-uppercase blue font-weight-bold contact-title">/ Biuro<br />sprzedaży mieszkań
                        </h1>
                        <div>
                            ul. Szyperska 14, 61-754 Poznań
                            <br />
                            poniedziałek - piątek 8:00-17:00
                        </div>
                        <div class="blue font-weight-bold">61-866-30-14 <span>/</span> 61-866-30-12</div>
                        <div><a href="mailto:mieszkania@wechta.pl">mieskania@wechta.pl</a></div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <img class="img-fluid mt-lg-0 mt-5" src="{{ asset('images/mapa.jpg') }}" alt="Mapa biura sprzedaży firmy Wechta">
                    </div>
                </div>
            </div>
        </section>
        <section class="blue-bg-cut py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 worker-container mb-5">
                        <div class="worker-container__name font-weight-bold">Marcin Jezierski</div>
                        <div class="worker-container__occupy">Doradca klienta</div>
                        <div class="worker-container__number font-weight-bold my-1">
                            <a href="tel:501662109">
                                <img src="{{ asset('images/phone-icon.png') }}" alt="phone icon">
                                501-662-109
                            </a>
                        </div>
                        <div class="worker-container__email"><a class="black"
                                href="mailto:marcin.jezierski@wechta.pl"><u>marcin.jezierski@wechta.pl</u></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 worker-container mb-5">
                        <div class="worker-container__name">Agnieszka Lewandowska</div>
                        <div class="worker-container__occupy">Doradca klienta</div>
                        <div class="worker-container__number font-weight-bold my-1">
                            <a href="tel:501662520">
                                <img src="{{ asset('images/phone-icon.png') }}" alt="phone icon">
                                501-662-520
                            </a>
                        </div>
                        <div class="worker-container__email"><a class="black"
                                href="mailto:agnieszka.lewandowska@wechta.pl"><u>agnieszka.lewandowska@wechta.pl</u></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 worker-container mb-5">
                        <div class="worker-container__name">Judyta Walkowiak</div>
                        <div class="worker-container__occupy">Doradca klienta</div>
                        <div class="worker-container__number font-weight-bold my-1">
                            <a href="tel:501662496">
                                <img src="{{ asset('images/phone-icon.png') }}" alt="phone icon">
                                501-662-496
                            </a>
                        </div>
                        <div class="worker-container__email"><a class="black"
                                href="mailto:judyta.walkowiak@wechta.pl"><u>judyta.walkowiak@wechta.pl</u></a></div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 worker-container mb-5">
                        <div class="worker-container__name">Sylwia Wasiak</div>
                        <div class="worker-container__occupy">Doradca klienta</div>
                        <div class="worker-container__number font-weight-bold my-1">
                            <a href="tel:501662573">
                                <img src="{{ asset('images/phone-icon.png') }}" alt="phone icon">
                                501-662-573
                            </a>
                        </div>
                        <div class="worker-container__email"><a class="black"
                                href="mailto:sylwia.wasiak@wechta.pl"><u>sylwia.wasiak@wechta.pl</u></a></div>
                    </div>
                </div>
            </div>
            <div class="container mb-5">
                <div class="row justify-content-center">
                    <div class="col-12 worker-container text-center">
                        <div class="worker-container__name text-uppercase font-weight-bold technical-department">Dział
                            techniczny:</div>
                        <div class="worker-container__email"><a class="black"
                                href="mailto:dzial.techniczny@wechta.pl"><u>dzial.techniczny@wechta.pl</u></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blue-bg-full">

            <form action="">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="font-weight-bold blue text-uppercase">Masz pytania? Napisz do nas</h2>
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="d-block mb-0" for="email">e-mail*</label>
                            <input class="w-100" type="email" name="email" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label class="d-block mb-0" for="phone">telefon (opcjonalnie)</label>
                            <input class="w-100" type="text" name="phone">
                        </div>
                        <div class="col-12 mt-3">
                            <label class="d-block mb-0" for="message d-block">treść wiadomości*</label>
                            <textarea class="w-100" name="message" id="message" rows="8" required></textarea>
                        </div>
                        <div class="col-12 mt-2">
                            <label class="container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at
                                faucibus mi. Phasellus cursus vitae lorem vitae condimentum. Mauris dapibus massa et
                                pharetra tempor. Etiam placerat, sem non placerat malesuada, velit neque varius tellus,
                                sit amet mattis elit leo vitae arcu. Proin tempor risus non pulvinar efficitur.
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at
                                faucibus mi. Phasellus cursus vitae lorem vitae condimentum. Mauris dapibus massa et
                                pharetra tempor. Etiam placerat, sem non placerat malesuada, velit neque varius tellus,
                                sit amet mattis elit leo vitae arcu. Proin tempor risus non pulvinar efficitur.
                                <input type="checkbox" required>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 required-fields">*pola wymagane</div>
                    <div class="col-12">
                        <button class="btn btn-regular text-right white text-uppercase">Wyślij</button>
                    </div>
                </div>
                </div>
            </form>
        </section>
    </main>
    <footer class="py-5 white">
        <div class="container">
            <div class="row justify-content-center">
                <img class="img-fluid h-100 mr-5" src="{{ asset('images/logo-white.png') }}" alt="Logo Wechta Fiz">
                <div class="footer-text mt-3">
                    <p class="font-weight-bold">/ Wechta Inwestycje Spółka z o.o.</p>
                    <p>ul. Szyperska 14, 61-754 Poznań</p>
                    <p>tel:<a class="white" href="tel:0618663014">61 866 30 14</a><a class="white"
                            href="tel:0618392232"></a></p>
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