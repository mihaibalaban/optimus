<?php

/* @var $this yii\web\View */

use kartik\tabs\TabsX;
use yii\bootstrap\Button;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <section class="firstSection">
            <div class="image shit">
            </div>
            <div class="stuff" data-type="content">
                <div class="row verticalAllign">
                    <div class="col-lg-3 rowOfImages">
                        <img class="img-fluid homeOtSol" src="images/logootsol.gif">
                    </div>
                    <div class="col-lg-3 rowOfImages">
                        <img class="img-fluid" src="images/logo-wtransnet.gif" alt="Card image cap">
                    </div>
                    <div class="col-lg-3 rowOfImages">
                        <img class="img-fluid" src="images/logo_w_connecta.gif" alt="Card image cap">
                    </div>
                    <div class="col-lg-3 rowOfImages">
                        <img src="images/logo-wabi.gif">
                    </div>
                </div>
            </div>
        </section>

        <section class="serviciiSecondSection">
            <div class="image" data-type="background" data-speed="7"></div>
            <div class="stuff" data-type="content">

                <div class="card firstCard">

                    <div class="secondTab">
                        <img class="img-fluid fitIn" src="images/ship_left.jpg">
                        <img id="image" class="img-fluid homeOtSol" src="images/logootsol.gif">
                        <p id="text">
                            Este o agentie de rezervari feribot pentru vehicule comerciale cu sediul in Ruse, Bulgaria.
                            Va
                            poate
                            fi de foarte mare ajutor in a economisi bani la cursele dvs. in tari ce necesita o
                            traversare cu
                            feribotul, intrucat OT SOLUTIONS are parteneriate directe cu principalii operatori maritimi
                            din
                            partea Nordica a Europei.
                        </p>
                        <!--Card content-->
                        <div class="card-body card-body-custom padding">
                            <?php
                            $items = [
                                [
                                    'label' => ' Anglia',
                                    'content' => 'sad',
                                    'active' => true
                                ],
                                [
                                    'label' => 'Irlanda',
                                    'content' => 'sad',
                                ],
                                [
                                    'label' => ' Suedia',
                                    'content' => 'sad',
                                ],
                                [
                                    'label' => ' Danemarca',
                                    'content' => 'sad',
                                ],
                                [
                                    'label' => ' Norvegia',
                                    'content' => 'sad',
                                    'headerOptions' => ['class' => 'secondTabX'],
                                ],
                                [
                                    'label' => 'Finlanda',
                                    'content' => 'sad',
                                    'headerOptions' => ['class' => 'secondTabX'],
                                ],
                                [
                                    'label' => ' Sicilia',
                                    'content' => 'sad',
                                    'headerOptions' => ['class' => 'secondTabX'],
                                ],
                            ];
                            $items2 = [


                            ];
                            echo TabsX::widget([
                                'items' => $items,
                                'position' => TabsX::POS_ABOVE,
                                'encodeLabels' => false
                            ]);

                            ?>
                        </div>
                        <div class="card-body card-body-custom-second">
                            <div class="row">
                                <div class="col-lg-3">
                                    <p id="circle"><img
                                                src="images/phone.gif"
                                                alt="otsolutions" class="img-responsive"></p>
                                    <p>Preturi mai mici cu pana la 40% fata de cele online sau de cele din port;</p>

                                </div>
                                <div class="col-lg-2">
                                    <p id="circle"><img
                                                src="images/agreed.gif"
                                                alt="otsolutions" class="img-responsive"></p>
                                    <p>Consultanta Gratuita in privinta cotatiilor de pret pe orice ruta;</p></div>
                                <div class="col-lg-2">
                                    <p id="circle"><img
                                                src="images/calendar.gif"
                                                alt="otsolutions" class="img-responsive"></p>
                                    <p>Disponibilitate si suport<br>
                                        24 ore/24, 7 zile/7;</p></div>
                                <div class="col-lg-2">
                                    <p id="circle"><img
                                                src="images/note.gif"
                                                alt="otsolutions" class="img-responsive"></p>
                                    <p>Facturare la valoare neta din Bulgaria;</p></div>

                                <div class="col-lg-3">
                                    <p id="circle"><img
                                                src="images/cash.gif"
                                                alt="otsolutions" class="img-responsive"></p>
                                    <p>Flexibilitate din punct de vedere al monedei;</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9">
                                    <p>Daca sunteti interesat in a obtine cotatii de pret pe o anumita ruta sau aveti
                                        nevoie
                                        de consultanta, completati formularul de mai jos, iar un reprezentat OPTIMUS va
                                        lua
                                        legatura cu dvs. pentru a va oferi mai multe detalii.</p>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="btn btn-primary moreButton">Afla mai multe</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="servicesSection3">
            <div class="image" data-type="background" data-speed="7"></div>
            <div class="stuff" data-type="content">
                <div class="secondTab">
                    <img class="img-fluid fitIn" src="images/poza-wtransnet.jpg">
                    <img id="image2" class="img-fluid homeOtSol" src="images/logo-wtransnet.gif">
                    <p id="text2">
                        Este o agentie de rezervari feribot pentru vehicule comerciale cu sediul in Ruse, Bulgaria.
                        Va
                        poate
                        fi de foarte mare ajutor in a economisi bani la cursele dvs. in tari ce necesita o
                        traversare cu
                        feribotul, intrucat OT SOLUTIONS are parteneriate directe cu principalii operatori maritimi
                        din
                        partea Nordica a Europei.
                    </p>

                </div>
            </div>

        </section>

        <section class="servicesSection4">
            <div class="image" data-type="background" data-speed="7"></div>
            <div class="stuff" data-type="content">
                <div class="row">

                    <!--                    <p  style="color: black;" id="wt-black">Wtransnet este pentru dumneavoastra daca:</p>-->
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
                    <p style="color: black;">WTRANSNET isi are originile in Barcelona unde este situat si sediul
                        central. A fost
                        infiintata in anul 1996 de catre oameni ce au lucrat in domeniul transporturilor. Ideea de baza
                        a
                        acestei burse este reprezentata de siguranta.
                        Procesul de filtrare QAP (Quality Assurance Policy) este metoda prin care fiecare aplicant este
                        verificat pentru a ne asigura ca in Wtransnet vor avea acces doar companiile care indeplinesc
                        aceste
                        criterii. </p>
                    <?php echo Button::widget(["label" => "Aplica pentru un cont demo", "options" => ["class" => "btn-primary grid-button"]]); ?>

                </div>
            </div>
        </section>

        <section class="servicesSection5">
            <div class="image" data-type="background" data-speed="7"></div>
            <div class="stuff" data-type="content">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid fitIn" src="images/servicesTab5.jpg">
                    </div>
                    <div class="col-lg-6 sixElements">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                        <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                    <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                    <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                    <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                    <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="elementFromSix">
                                    <p style="color: black">Garantia platii – un serviciu UNIC in Europa ce va ofera
                                        posibilitatea de a va
                                        asigura
                                        incasarea a 90% din valoarea facturii transportului.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
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