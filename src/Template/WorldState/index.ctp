<?php $this->start('title') ?>
    <?= $title ?>
<?php $this->end() ?>
<section class="content-wrap">
    <!-- Banner -->
    <section class="youplay-banner small banner-top youplay-banner-parallax">
        <div class="image" style="background-image: url('http://i.imgur.com/efSP4c0.jpg')"></div>
        <div class="info">
            <div>
                <div class="container text-center">
                    <h1 class="worldState">World State </h1>
                    <div class="alert alert-warning" role="alert">
                        <strong>Développement en cours!</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="text-align: center">Alerts</h2>
                <div class="col-Alerts"></div>
            </div>
            <div class="col-md-6">
                <h2 style="text-align: center">Sorties</h2>
                <div class="alert sortiesInfo"></div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a style="font-weight: bold" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Récompenses <span class="icon-plus"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body sortiesReward"></div>
                        </div>
                    </div>
                </div>
                <div class="sortiesMissions"></div>
            </div>
        </div>
    </div>

    <div class="h2"></div>
    <section class="youplay-banner youplay-banner-parallax small" id="exclusive">
        <div class="image" style="background-image: url('http://i.imgur.com/lPpEwSu.png');" data-speed="-0.5">
        </div>
        <div class="info container align-center">
            <div>
                <h2 class="traderName"></h2>
                <div class="countdown tradercountdown h2 style-1" data-end="2017-01-21 12:00" data-timezone="EST"></div>
                <br/>
                <h3 class="typeTraderLocation"></h3>
                <h3 class="traderLocation"></h3>
            </div>
        </div>
    </section>

    <div class="container mt-40">
        <div class="col-md-10 col-md-offset-1 voidTrader"></div>
    </div>

    <?= $this->element('footer') ?>

</section>

<?php $this->start('script') ?>

    <?= $this->Html->script('/js/warJson.js') ?>

<?php $this->end() ?>