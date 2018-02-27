<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<?php

/* @var $this yii\web\View */

use kartik\tabs\TabsX;
use yii\bootstrap\Button;

$this->title = 'Optimus Transport';
?>
<div class="site-index">
    <section class="firstSection" style="    z-index: 0;">
        <div class="image partners">
        </div>
        <div class="stuff" data-type="content">
            <h3>PARTENERI</h3>
        </div>
    </section>
    <div class="container">
        <div class="contentPadding overSectionPartners overOnOneThousand">
            <div class="paddingBigElements">
                <div data-type="background" data-speed="6">
                    <div class="row firstCardPartners">
                        <div class="col-lg-7 col-md-7 no-padding secondSectionPartners">
                            <div class=" part">

                                <p> <b>Optimus</b> Transport este partenerul ideal in promovarea serviciilor
                                    dumneavoastra
                                    pe teritoriul Romaniei, avand o baza de date de peste 10000 de companii din
                                    domeniul transporturilor.</p>

                                <p>Experienta dobandita de-alungul anilor din interactiunea cu firme din acest
                                    domeniu ne-a facut sa identificam nevoile acestor companii si ne motiveaza
                                    constant sa gasim cele mai bune servicii pe care am putea sa le punem la
                                    dispozitie. Companiile care recunosc numele si brand-ul <b>Optimus Transport</b> il
                                    asociaza cu calitate in detrimentul cantitatii.</p>

                                <p> Atentia la detalii, orientarea catre client si flexibilitatea noastra sunt
                                    criterii de baza ce ne permit sa oferim servicii de promovare personalizata
                                    in
                                    functie de segmentul targetat al pietei.</p>

                                <p> Ne implicam doar in proiecte in care credem si nu promovam niciodata
                                    clientilor
                                    nostri servicii pe care noi insasine nu le-am folosi/incerca/utiliza.</p>

                                <p> Suntem deschis spre noi parteneriate si asteptam oricand propunerile
                                    dumneavoastra. Pentru discutii detaliate referitoare la proiecte viitoare va
                                    rugam sa luati legatura cu administratorul companiei OPTIMUS TRANSPORT,
                                    Eduard
                                    Ularu, la numarul de telefon <b>+40-751.145.509</b></p>

                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 no-padding displayNonePartners">
                            <img class="partnersSecondSection-image" src="images/secondSection-partners.jpg">
                        </div>


                    </div>
                </div>
            </div>

            <div class=" paddingBigElements">
                        <div class="row no-padding">

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 test" style="padding: 15px;">
                                <div class="card bottomPartPartners">

                                    <!--Card image-->
                                    <img class="img-fluid fitIn"  style="height: 100%" src="images/wtransnet-partners.jpg">
                                    <!--Card content-->
                                    <div class="card-body cardPartners paddingLeft">
                                        <!--Title-->
                                        <img class="img-fluid homeOtSol" style=" max-width: 213px;" src="images/logo-wtransnet.gif">
                                        <!--Text-->
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 test" style="padding: 15px;">
                                <div class="card bottomPartPartners">

                                    <!--Card image-->
                                    <img class="img-fluid fitIn" style="height: 100%" src="images/ot-partners.jpg">
                                    <!--Card content-->
                                    <div class="card-body cardPartners paddingLeft">
                                        <!--Title-->
                                        <img class="img-fluid homeOtSol" src="images/logootsol.gif">
                                        <!--Text-->
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 test" style="padding: 15px;">
                                <div class="card bottomPartPartners">

                                    <!--Card image-->
                                    <img class="img-fluid fitIn" style="height: 100%" src="images/wconecta-partners.jpg">
                                    <!--Card content-->
                                    <div class="card-body cardPartners paddingLeft">
                                        <!--Title-->
                                        <img style="max-width: 213px;" class="img-fluid homeOtSol" src="images/logo_w_connecta.gif">
                                        <!--Text-->
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 test" style="padding:15px;">
                                <div class="card bottomPartPartners">

                                    <!--Card image-->
                                    <img class="img-fluid fitIn" style="height: 100%" src="images/wabi-partners.jpg">
                                    <!--Card content-->
                                    <div class="card-body cardPartners paddingLeft">
                                        <!--Title-->
                                        <img class="img-fluid homeOtSol" src="images/logo-wabi.gif">
                                        <!--Text-->
                                    </div>

                                </div>
                            </div>


                        </div>
            </div>


        </div>
    </div>
</div>

<script>
    // Hide Header on on scroll down
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

    $("#author_bio_wrap_toggleAnglia").click(function () {
        $("#author_bio_wrap").slideToggle("fast");

    });

    $(document).ready(function () {
        var $Menu = $('.Img');
        $('.Img').mouseenter(function () {
            $('.PopUp').css('opacity', '1');
            $('.PopUp').css('margin-top', '20px');
        });
        $('.Img').mouseleave(function () {
            $('.PopUp').css('opacity', '0');
            $('.PopUp').css('margin-top', '0px');
        });
        $('.Img').on('click', function () {
            if ($Menu.hasClass('Img')) {
                $('.Img').addClass('click');
                $('.Img').removeClass('Img');
                $('.Profile').addClass('clickProfile');
                $('.Profile').removeClass('Profile');
                $('.clickPopUp').css('display', 'block');
                $('.PopUp').css('display', 'none');
            } else {
                $('.click').addClass('Img');
                $('.click').removeClass('click');
                $('.clickProfile').addClass('Profile');
                $('.clickProfile').removeClass('clickProfile');
                $('.clickPopUp').css('display', 'none');
                $('.PopUp').css('display', 'block');
            }
        });
    });

</script>