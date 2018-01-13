<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;

$this->title = 'Optimus Transport';
?>
<div class="site-index">
    <section class="firstSection" style="    z-index: 0;">
        <div class="image contacts">
        </div>
        <div class="stuff" data-type="content">
            <h3>CONTACT</h3>
        </div>
    </section>
    <div class="container">
        <div class="contentPadding overSectionPartners overOnOneThousand">
            <div class="paddingBigElements">
                <div data-type="background" data-speed="6">
                    <div class="row firstCardPartners">

                        <div id="map"></div>

                    </div>
                </div>
            </div>

            <div class=" paddingBigElements">
                <div class="row no-padding">

                    <div class="col-lg-6">
                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'subject') ?>

                        <?= $form->field($model, 'phone') ?>

                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ]) ?>

                        <div class="form-group">
                            <?= Html::submitButton('Trimite', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact">
                            <h3><b>Rezervari pe feribot</b></h3>
                            <div class="contact-elements">
                                <p>+40-769.026.009</p>
                                <p>office@optimus-transport.ro</p>
                            </div>

                            <div class="contact-elements">
                                <p>Wtransnet & Wconnecta:</p>
                                <p>Lucian Coman</p>
                                <p>+40-755.017.888</p>
                                <p>lcoman@wtransnet.com</p>
                            </div>

                            <div class="contact-elements">
                                <p>Alexandra Offenberg</p>
                                <p>+40-769.026.032</p>
                                <p>aoffenberg@wtransnet.com</p>
                            </div>

                            <div class="contact-elements">
                                <p>WA-BI</p>
                                <p>TBC</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>

<script>
    function initMap() {
        var uluru = {lat: 44.418564, lng: 26.120408};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_Oyt_BpvggvPI7IK61Jn5L1Gxz26EooY&callback=initMap">
</script>

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
