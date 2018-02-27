<?php

/* @var $this yii\web\View */

use kartik\tabs\TabsX;
use yii\bootstrap\Button;
use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <section class="firstSection">
        <div class="image shit">
        </div>
        <div class="stuff" data-type="content">
            <div class="row verticalAllign">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rowOfImages">
                    <img class="  mobileImageServicii  img-fluid homeOtSol" src="images/logootsol.gif">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rowOfImages">
                    <img class="img-fluid mobileImageServicii" style="max-width: 213px;" src="images/logo-wtransnet.gif" alt="Card image cap">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rowOfImages">
                    <img class="mobileImageServicii img-fluid"  style="max-width: 213px;" src="images/logo_w_connecta.gif" alt="Card image cap">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 rowOfImages">
                    <img class="mobileImageServicii img-fluid" style="max-width: 213px;" src="images/logo-wabi.gif">
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="contentPadding">
            <div class="paddingBigElements">
                <div class="card serviciiFirstCard">

                    <div class="secondTab secondTabb1 ">
                        <div class="greyScaleBackground">
                            <img class="img-fluid fitIn displayNone" style="height: 100%" src="images/ship_left.jpg">
                            <img id="image"  class="img-fluid homeOtSol" src="images/logootsol.gif">
                            <p id="text" class="serviciiFirstText">
                                Este o agentie de rezervari feribot pentru vehicule comerciale cu sediul in Ruse,
                                Bulgaria.
                                Va
                                poate
                                fi de foarte mare ajutor in a economisi bani la cursele dvs. in tari ce necesita o
                                traversare cu
                                feribotul, intrucat OT SOLUTIONS are parteneriate directe cu principalii operatori
                                maritimi
                                din
                                partea Nordica a Europei.
                            </p>
                        </div>
                    </div>

                    <!--Card content-->
                    <div class="card-body card-body-custom padding whiteCollor">

                        <div class="row">
                            <?php
                            foreach ($routes as $r) {
                                ?>
                                <div class="col-lg-2">

                                    <div class="author_bio_toggle_wrapper">
                                        <a href="#0"
                                           id="<?= $r['country']['id'] ?>"
                                           class="btn clickedElement btn-sm btnExpand"><?= $r['country']['name'] ?></a>
                                    </div>


                                    <div id="<?= "author_bio_wrap" . $r['country']['id'] ?>" style="display: none;">
                                        <?php

                                        foreach ($r['routes'][0] as $route) {
                                            ?>
                                            <p><?= $route['route_name'] ?></p>
                                            <?php
                                        } ?>
                                    </div>


                                </div>
                                <?php
                            } ?>
                        </div>

                    </div>
                    <div class="card-body card-body-custom-second whiteCollor">
                        <div class="row" style="text-align: center;">
                            <div class="col-lg-3 col-md-4 col-sm-4 just-for-small">
                                <p id="circle"><img
                                            src="images/phone.gif"
                                            alt="otsolutions" class="img-responsive"></p>
                                <p>Preturi mai mici cu pana la 40% fata de cele online sau de cele din port;</p>

                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 just-for-small">
                                <p id="circle"><img
                                            src="images/calendar.gif"
                                            alt="otsolutions" class="img-responsive"></p>
                                <p>Disponibilitate si suport<br>
                                    24 ore/24, 7 zile/7;</p></div>
                            <div class="col-lg-2 col-md-4 col-sm-4 just-for-small">
                                <p id="circle"><img
                                            src="images/note.gif"
                                            alt="otsolutions" class="img-responsive"></p>
                                <p>Facturare la valoare neta din Bulgaria;</p></div>
                            <div class="col-lg-2 col-md-6 col-sm-6 just-for-small">
                                <p id="circle"><img
                                            src="images/cash.gif"
                                            alt="otsolutions" class="img-responsive"></p>
                                <p>Flexibilitate din punct de vedere al monedei;</p></div>
                            <div class="col-lg-3 col-md-6 col-sm-6 just-for-small">
                                <p id="circle"><img
                                            src="images/agreed.gif"
                                            alt="otsolutions" class="img-responsive"></p>
                                <p>Consultanta Gratuita in privinta cotatiilor de pret pe orice ruta;</p>
                            </div>
                        </div>
                        <div class="row secondSectionPadding">
                            <div class="col-lg-9">
                                <p>Daca sunteti interesat in a obtine cotatii de pret pe o anumita ruta sau
                                    aveti
                                    nevoie
                                    de consultanta, completati formularul de mai jos, iar un reprezentat OPTIMUS
                                    va
                                    lua
                                    legatura cu dvs. pentru a va oferi mai multe detalii.</p>
                            </div>
                            <div class="col-lg-3">
                                <a href="https://www.otsolutions.bg" class="btn btn-primary btn-sm moreButton">Afla
                                    mai multe</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="paddingBigElements">
                <div class="secondTab secondTabb2">
                    <div class="greyScaleBackground">
                        <img class="img-fluid fitIn displayNone" style="height: 100%" src="images/poza-wtransnet.jpg">
                        <img  style="max-width: 213px;"id="image" class="img-fluid homeOtSol" src="images/logo-wtransnet.gif">
                        <p id="text" style="    margin-top: 10px;" class="serviciiFirstText">
                            Fiind singura Bursa din Europa cu un sistem de Garantie a Platii, <b>Wtransnet pune la
                            dispozitie un mediu sigur pentru desfasurarea activitatii membrilor sai. De mai bine de 20
                            de ani punem accent pe securitatea dvs. ca membru, din acest motiv filtrele noastre de
                            securitate si calitate asigura inregistrarea in bursa doar a Caselor de Expeditii solvabile
                            si a Companiilor de Transport calificate.
                        </p>

                    </div>
                </div>

            </div>

            <div class="paddingBigElements">
                <div class="row" style="color: #f5f5f5;text-align: center;">
                    <div class="col-md-4 circle2">
                        <img src="images/world.gif"
                             alt="wtrasnet-logo" class="img-responsive">
                        <p>Efectuati transporturi sau expeditii de marfuri la nivel international</p>
                    </div>
                    <div class="col-md-4 circle2">
                        <img src="images/map.gif"
                             alt="wtrasnet-logo" class="img-responsive">
                        <p><strong>Lucrati in mod constant cu Vestul si Sudul Europei</strong><br>Bursa specializata in
                            trafic pe: <strong>Spania, Franta,<br>Portugalia si Italia</strong></p>
                    </div>
                    <div class="col-md-4 circle2">
                        <img src="images/car.gif"
                             alt="wtrasnet-logo" class="img-responsive">
                        <p><strong>Operati cu vehicule de mare tonaj</strong> (camione)</p>
                    </div>
                </div>
                <div class="row">

                    <a href="http://www.wtransnet.com/en/try-free/" class="btn btn-primary demoWbutton">Aplica pentru un
                        cont demo</a>

                </div>

            </div>

            <div class="paddingBigElements">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img class="img-fluid fitIn displayNone" src="images/servicesTab5.jpg">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="sixElements">
                            <div class="titleQuestionner">
                                <p class="titleSection5">Ce ofera Wtransnet?</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <b>Garantia platii</b>
                                        <p> – un serviciu <b>UNIC in Europa</b> ce va ofera
                                            posibilitatea de a va
                                            asigura
                                            incasarea a 90% din valoarea facturii transportului.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <p><b>Matching System</b> – sunteti notificat automat prin e-mail/aplicatie
                                            telefon
                                            mobil/SMS de potriviri pentru ofertele postate de dumneavoastra. In
                                            felul
                                            acesta puteti sa economisiti timpul petrecut cautand marfuri/camione.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <p><b>White List</b> – acces la o lista ce contine casele de expeditii care
                                            si-au luat
                                            angajamentul de a-si achita facturile la un termen de/pana in 0/30/45 de
                                            zile.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <p><b>Companies Information Service</b> – va punem la dispozitie informatii
                                            despre
                                            compania cu care sunteti pe punctul de a incepe o colaborare.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <p><b>Business Assistant (Asistent personal)</b> – ca membru vi se aloca un
                                            asistent
                                            personal ce va ajuta pe parcusul colaborarii sa utilizati la potential
                                            maxim
                                            toate instrumentele oferite de Wtransnet.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="elementFromSix">
                                        <p><b>Associate Searcher</b> – este un motor intern de cautare, acesta ofera
                                            posibilitatea ca membrii bursei sa filtreze companiile inregistrate in
                                            functie de criterii specifice (rutele de interes, limbile vorbite, tari
                                            de
                                            care sunt interesate, flota, activitatile companiei etc).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="paddingBigElements">

                <div class="secondTab">
                    <div class="greyScaleBackground">
                        <img class="img-fluid fitIn smallWidth" style="height: 100%" src="images/wconnecta-banner.jpg">
                    </div>
                    <img id="image" style="max-width: 213px;" class="img-fluid homeOtSol" src="images/wconecta-logo.gif">
                    <p id="text" class="oneThousandWidth">
                        Ce este Wconnecta?
                        Wconnecta este un proiect proeminent, care dupa 7 editii, a devenit un eveniment cu un
                        impact puternic in randul companiilor din domeniul transporturilor la nivel European. Scopul
                        acestuia este acela de a ajuta companiile din acest sector sa gaseasca parteneri de
                        incredere si noi oportunitati de afaceri.
                        Este o oportunitate ca aceste companii sa se cunoasca si sa intemeieze potentiale colaborari
                        cu ceilalti participanti. Succesul Wconnecta consta in volumul foarte mare de contacte pe
                        care un participant le poate dobandi intr-o singura zi, munca ce ar dura luni de zile pentru
                        un departament de vanzari.
                    </p>
                    <!--Card content-->
                    <div class="card-body card-body-custom-third">
                        <div class="row">
                            <div id="first" class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <iframe class="youtubeIframe" width="600" height="375"
                                        src="https://www.youtube.com/embed/2jf6wg6Dc7M"
                                        frameborder="0"></iframe>
                            </div>
                            <div id="second" class="col-lg-5 col-md-5 col-sm-5 col-xs-12 wconectaText">
                                <p id="text" class="serviciiTextVideo">In 2016, Wconnecta a atras peste 1000 de
                                    participanti de la peste 500 de
                                    companii, din 23 de tari diferite, cu 32% mai mult ca editia anterioara
                                    acesteia. Vezi prezentarea video aici.

                                    Anul acesta va fi organizata cea de-a 8-a editie a acestui eveniment si va avea
                                    loc in Germania.

                                    Afla mai multe Wconnecta, editiile anterioare, companiile care au participant la
                                    acest eveniment si in ce consta mai exact pe www.wconnecta.com</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="paddingBigElements lastElementServicii">
                <div class="secondTab">

                    <img class="img-fluid fitIn wabiImgLastServicii" style="height: 100%" src="images/wabi-banner.jpg">
                    <img id="image" class="img-fluid homeOtSol minWidthWabi" src="images/logo-wabi.gif">
                    <p id="text" class="minWidthWabiText">
                        WA-BI va pune la dispozitie servicii de dezvoltare WEB, optimizare SEO, securizarea bazelor
                        de
                        date, mentenanta si dezvoltare aplicatii. Va oferim consultanta si ne asiguram ca veti
                        obtine
                        cea mai buna solutie pentru produsele si serviciile pe care compania dumneavoastra doreste a
                        le
                        promova.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>// Hide Header on on scroll down

    $(window).resize(function () {
        if ($(window).width() <= 768) {
            $("#first").insertAfter("#second");
        }
    })
    if ($(window).width() <= 768) {
        $("#first").insertAfter("#second");
    }
    var didScroll;
    var lastScrollTop = 0;
    var delta = 6;
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
    }

    var expandID = [1, 2, 3, 4, 5, 6, 7];

    var countryCount = "<?= count($routes) ?>";

    $('.clickedElement').click(function () {
        console.log(this.id)
        $("#author_bio_wrap" + this.id).slideToggle("fast");

    });


</script>