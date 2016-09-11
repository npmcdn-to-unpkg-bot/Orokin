<section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner small banner-top youplay-banner-parallax">
        <div class="image" style="background-image: url('http://i.imgur.com/efSP4c0.jpg')"></div>
        <div class="info">
            <div>
                <div class="container text-center">
                    <h1 class="worldState">Membres</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->


    <div class="container youplay-search">
        <div class="row">
                <?php
                foreach ($allimgjson as $imgjson)
                {
                    $url = $imgjson->{'textureLocation'};
                    ?>
                    <img src="http://content.warframe.com/MobileExport/<?= $url ?>" alt="">
                    <?php
                }
                ?>
        </div>
    </div>

    <?= $this->element('footer') ?>

</section>