<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use kartik\file\FileInput;

?>

<?php

/* @var $this yii\web\View */

use kartik\tabs\TabsX;
use yii\bootstrap\Button;
use yii\widgets\ActiveForm;

$this->title = 'Optimus Transport';
?>
<div class="site-index">
    <section class="firstSection" style="    z-index: 0;">
        <div class="image carriers">
        </div>
        <div class="stuff" data-type="content">
            <h3>CARIERE</h3>
            <div class="row padding">
                <div class="col-lg-4">
                    <div class="card-center">
                        <div class="card-body-custom-carriers">
                            Angajari
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-center">
                        <div class="card-body-custom-carriers">
                            Intership
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card-center">
                        <div class="card-body-custom-carriers">
                            Freight Operator
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="contentPadding">
            <div class="paddingBigElements">
                <div style="padding-right: 0;">
                    <img class="carriersSecondSection-image" src="images/hamburg.jpg">

                    <div class=" overTextCarriers" style="text-align: -webkit-center;">
                        <h4 style="text-align: center">Alaturate echipei naostre</h4>
                        <div class="uploadFile">
                            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                            <?= $form->field($model, 'cvFile')->label(false)->widget(FileInput::classname(), [
                                'options' => ['multiple' => false],
                                'language' => 'en',
                                'pluginOptions' => [
                                    'initialCaption' => "Selecteaza Cv",
                                    'showUpload' => false,
                                    'showCancel' => false,
                                    'showPreview' => false,
                                    'showRemove' => false,
                                    'browseLabel' => 'Cauta CV',
//                                        'removeLabel' => '',
                                    'mainClass' => 'input-group-lg',
                                    'fileActionSettings' => [
                                        'showZoom' => false,
                                    ],
                                ]
                            ]); ?>

                            <button class="btn btn-primary moreButton">Uploadeaza CV</button>

                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" paddingBigElements">
                <div class="image" data-type="background" data-speed="6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3>INTERNSHIPS</h3>
                            <p>Suntem implicati in mod activ in procesul educational al studentilor din Romania, iar
                                programul nostru de internship asigura in permanenta cate doua locuri doritorilor.
                                Data Processing Analyst (2 locuri)
                            </p>
                            <a href="#" class="btn btn-primary moreButton">Aplica</a>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12" style="    text-align: center;">
                            <div class="circleCarriers">
                                <img src="images/carriers-circle.gif"
                                     alt="wtrasnet-logo" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paddingBigElements">
                <div class="row" style="height: 760px;">
                    <div class="col-lg-5 col-md-5 col-sm-5" style="height: 564px;">
                        <img class="partnersSecondSection-image" src="images/carrier-freelance.jpg">
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 secondSectionCarriers">
                        <div class=" part">
                            <h4>FREELANCE REPRESENTATIVE (WTRANSNET)</h4>
                            <p>Acesta reprezinta proiectul nostru dedicat Expeditorilor Caselor de Expeditii din
                                Romania. Fiecare companie care ajunge sa se inregistreze din recomandarea ta
                                primeste un discount la abonamentul serviciilor Wtransnet, iar tu primesti comision
                                la fiecare client inregistrat.</p>

                            <p><b>Cum functioneaza?</b> Este optional. Nu ai target. Primesti comision/client. Te
                                poti opri
                                oricand. Presupune identificarea potentialilor clienti ai serviciului de bursa,
                                Wtransnet. Operatorului i se ofera un training de baza pentru acest serviciu. Pe
                                scurt, treaba unui Freight Operator este sa recomande Wtransnet companiilor cu care
                                interactioneaza, iar de restul ne ocupam noi!</p>

                            <p><b> Care este comisionul tau?</b></p>

                            <p>Acesta variaza in functie de tipul de client, insa va fi intre minim 10 – maxim 30
                                de EUR/inregistrare.</p>
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