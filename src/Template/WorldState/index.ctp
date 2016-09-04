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
        <div class="image" style="background-image: url('http://i.imgur.com/lPpEwSu.png');" data-speed="-0.5"></div>
        <div class="info container align-center">
            <div>
                <h2 class="traderName"></h2>
                <div class="countdown tradercountdown h2 style-1" data-end="2017-01-21 12:00" data-timezone="UTC"></div>
                <br/>
                <h3 class="typeTraderLocation"></h3>
                <h3 class="traderLocation"></h3>
            </div>
        </div>
    </section>

    <div class="container mt-40">
        <div class="col-md-10 col-md-offset-1 voidTrader"></div>
        <div class="col-md-6">
            <h2 style="text-align: center">Invasions</h2>
            <div class="col-Invasion">
                <!--
                <div class="alert">
                    <span class="label label-success" style="float: right;font-weight: bold;font-size: 13px;">Masse Mutagène</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                        <div class="progress-bar progress-bar-info arrow progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                </div>
                -->
            </div>
        </div>
        <div class="col-md-6">
            <h2 style="text-align: center">Fissures</h2>
            <div class="col-Fissures">
                <div class="alert">
                    <div class="row">
                        <div class="col-md-3 col-xs-3" style="text-align: center">
                            <h4 style="font-size: 30px; margin: 0">LITH</h4>
                        </div>
                        <div class="col-md-9 col-xs-9">
                            <span data="1473003869" data-end="2016-11-04 15:44:29" class="label label-success alert-timer expiry">
                        <span>
                            <span>00</span>
                        </span>
                        <span>J </span>
                        <span>
                            <span>00</span>
                        </span>
                        <span>h </span>
                        <span>
                            <span>14</span>
                        </span>
                        <span>m </span>
                        <span>
                            <span>45</span>
                        </span>
                        <span>s </span>
                    </span>
                            <span style="font-weight: bold;">Kelpie (Sedna)</span>
                            <br/>
                            <span style="font-weight: bold;">Interception</span><span> | Grinner</span><span> | 80 - 100</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->element('footer') ?>

</section>

<?php $this->start('script') ?>

    <?= $this->Html->script('/js/warJson.js') ?>

<?php $this->end() ?>