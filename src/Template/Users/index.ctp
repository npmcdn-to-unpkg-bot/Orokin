
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
        <form action="search.html">
            <div class="youplay-input">
                <input name="search" placeholder="Search..." autofocus="" type="text">
            </div>
        </form>
        <br/>
        <div class="row">
            <div class="col-md-6">

                <?php
                foreach ($users as $user){
                    foreach ($user['social_profiles'] as $userSteam){?>
                        <a href="<?= $userSteam['profile_url']?>" target="_blank" class="angled-bg">
                            <div class="row">
                                <div class="col-md-3 col-xs-4 userbanner">
                                    <div class="angled-img">
                                        <div class="img">
                                            <img src="<?= $userSteam['photo_url']?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xs-8">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-9">
                                            <h4><?= $userSteam['display_name'] ?></h4>
                                        </div>
                                        <div class="col-xs-6 col-md-3 align-right">
                                            <?php
<<<<<<< HEAD
                                                if($user['online'])
                                                    echo 'Connecté';
                                                else
                                                    echo "Déconnecté";
                                                echo strtotime($user['last_active'])-strtotime(\Cake\I18n\Time::now());
=======
                                                //echo $user['last_active'];
                                                //echo \Cake\I18n\Time::now();
                                            if($user['last_active'] == null)
                                                echo 'déco';
                                            else
                                                echo strtotime($user['last_active']) - strtotime(\Cake\I18n\Time::now());
>>>>>>> origin/master
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <?= $this->element('footer') ?>

</section>
<?php
/*
    $test=2;
    $this->Html->scriptStart(['block' => true]);
    echo "alert(".$test.");";
    $this->Html->scriptEnd();
*/
?>