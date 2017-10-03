<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="container">
        <section class="firstSection">
            <div class="image" data-type="background" data-speed="2"></div>
            <div class="stuff" data-type="content">
                <div>
                    <h1 style="font-size: 55px;">Succesul tau</h1>
                    <h1 style="font-size: 55px; font-weight: bold;">MISIUNEA NOASTRA</h1>
                </div>
            </div>
        </section>

        <section>
            <div class="image" data-type="background" data-speed="7"></div>
            <div class="stuff" data-type="content">

                <div class="row center-cards">
                    <div class="col-lg-6">
                        <div class="card firstCard">

                            <!--Card image-->
                            <img class="img-fluid fitIn" src="images/otsolutions.jpg">
                            <!--Card content-->
                            <div class="card-body card-body-custom">
                                <!--Title-->
                                <h3 class="card-title">REZERVARI FERRY VIA</h3>
                                <img class="img-fluid homeOtSol" src="images/logootsol.gif">
                                <!--Text-->
                                <p class="card-text" style="font-size: 15px">Acoperind toata partea de Nord a Europei,
                                    va punem la dispozitie prin partenerului nostru, OT SOLUTIONS o varietate de rute ce
                                    fac legatura intre Europa continentala si Anglia, Irlanda, Danemarca, Suedia,
                                    Norvegia, Finlanda, Sicilia.</p>
                                <a href="#" class="btn btn-primary moreButton">Afla mai multe</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card wtransnetCard">
                            <div class="card-body card-body-custom">
                                <div class="marginator">
                                    <div class="row">
                                        <h3> SERVICII DE BURSA TRANSPORT VIA</h3>
                                    </div>
                                    <div class="row">
                                        <img class="img-fluid" src="images/logo-wtransnet.gif" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                            <!--Card image-->
                            <img class="img-fluid fitIn" src="images/wtransnet.jpg" alt="Card image cap">

                            <!--Card content-->
                            <div class="card-body card-body-custom">
                                <!--Title-->
                                <!--                                <h4 class="card-title">Card title</h4>-->
                                <!--Text-->
                                <p class="card-text" style="font-size: 15px;margin-top: 16px;">
                                    Vrei sa lucrezi cu Companii verificate cu nivel de solvabilitate ridicat sau cu
                                    Companii de Transport calificate? Vrei sa ai posibilitatea sa iti garantezi
                                    incasarea facturilor? Vrei sa iti dezvolti afacerea intr-un mediu sigur alaturi de o
                                    bursa careia ii pasa de tine? Daca raspunsurile au fost DA, Wtransnet poate fi
                                    solutia.</p>
                                <a href="#" class="btn btn-primary moreButton">Afla mai multe</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="customSection">
            <div class="image" data-type="background" data-speed="6">
                <div class="stufff" data-type="content">

                    <div class="row" style="height: 100%;">
                        <div class="col-lg-8 col-md-8 third-content-a">
                            <div class="row wc">
                                <div class="col-lg-12">
                                    <img class="img-fluid" src="images/logo_w_connecta.gif" alt="Card image cap">
                                </div>
                                <div class="col-lg-12" style="    margin-top: 18px;">

                                    Oportunitatea perfecta de a interactiona cu alte companii pentru a va putea prezenta
                                    serviciile si a identifica parteneri pentru cursele dumneavoastra. Reprezinta unul
                                    dintre
                                    cele mai importante evenimente din domeniul transporturilor si este organizat anual
                                    de
                                    catre
                                    Bursa Wtransnet.
                                </div>

                                <div class="col-lg-12">
                                    <a href="#" class="btn btn-primary moreButton">Afla mai multe</a>despre ultima
                                    editie a acestui eveniment, ce companii au participat, si cum functioneaza mai
                                    exact.
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 third-content-b">
                            <div class="wconecta-image">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="image" data-type="background" data-speed="5"></div>
            <div class="stuff" data-type="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card firstCard">

                            <!--Card image-->
                            <img src="images/logo-wabi.gif">
                            <!--Card content-->
                            <div class="card-body card-body-custom">
                                <p class="card-text" style="font-size: 15px">Un website este ca o carte de vizita.
                                    Prezenta online a unei companii este foarte importanta pentru dezvoltarea
                                    parteneriatelor si sporirea increderii in serviciile oferite.</p>
                                <p class="card-text" style="font-size: 15px">Echipa noastra va pune la dispozitie
                                    servicii de dezvoltare site-uri web si crearea de platforme menite sa va ajute in
                                    gestionarea business-ului dumneavoastra.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8 wabipresent">
                    </div>

                </div>
            </div>
        </section>


    </div>

    <div class="at-twitter"><a href="//twitter.com/hendrysadrak" target="_blank">@hendrysadrak</a></div>
</div>
<script>// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.hideMenu').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('.hideMenu').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.hideMenu').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }</script>