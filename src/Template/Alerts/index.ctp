<!-- Banner -->
<section class="youplay-banner big banner-top youplay-banner-parallax">
    <div class="image" style="background-image: url('https://i.imgur.com/wQzVkEt.jpg')"></div>
    <div class="info">
        <div>
            <div class="container text-center">
                <img class="alignnone size-full" src="http://i.imgur.com/SZOtqEY.png" alt="LogoBig">
            </div>
        </div>
    </div>
</section>
<!-- /Banner -->

<div class="container mt-40">

    <div class="alert alert-warning" role="alert">
        <strong>Développement en cours!</strong>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2 style="text-align: center">Alerts</h2>
            <div class="col-Alerts"></div>
        </div>

        <div class="col-md-6">
            <h2 style="text-align: center">Invasions</h2>
        </div>
    </div>

    <h2 style="text-align: center">Sorties</h2>

    <div class="col-md-6">
        <div class="col-Sorties">
        </div>
    </div>

    <div class="col-md-6">

    </div>

</div>


<!-- Realistic Battles -->
<div class="h2"></div>
<section class="youplay-banner youplay-banner-parallax mid" id="exclusive">
    <div class="image" style="background-image: url('http://i.imgur.com/lPpEwSu.png');" data-speed="-0.5">
    </div>
    <div class="info container align-center">
        <div>
            <h2>Black Rock Shooter II</h2>

            <!-- See countdown init in bottom of the page -->
            <div class="countdown style-1 h2" data-end="2017-02-18 10:00:30" data-timezone="EST"></div>
        </div>
    </div>
</section>
<!-- /Realistic Battles -->

<?php $this->start('script'); ?>

    <?= $this->element('scriptWarjson') ?>

<?php $this->end(); ?>