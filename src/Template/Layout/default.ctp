<?= $this->Html->docType('html5');?>
<html>
<head>
    <?= $this->Html->charset();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>youplay</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Icon -->
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <?= $this->Html->css('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>
    <!-- FontAwesome -->
    <!-- $this->Html->css('/assets/bower_components/font-awesome/css/font-awesome.min.css'); -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <?= $this->Html->css('/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css'); ?>

    <!-- Magnific Popup -->
    <?= $this->Html->css('/assets/bower_components/magnific-popup/dist/magnific-popup.css'); ?>

    <!-- Youplay -->
    <?= $this->Html->css('/assets/youplay/css/youplay-shooter.min.css'); ?>


    <!-- Custom Styles -->
    <?= $this->Html->css('/assets/custom.css'); ?>

    <!-- RTL (uncomment this to enable RTL support) -->
    <!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->

</head>


<body>

<!-- Navbar -->
<nav class="navbar-youplay navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://i.imgur.com/7mi7dDR.png" alt="">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#preorder">
                        Pre-Order
                        <span class="label">Early Edition</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        News
                        <span class="label">Our Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        Community
                        <span class="label">Forums</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-hover dropdown-cart">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu pb-20" style="width: 300px;">
                        <div class="block-content ml-20 mr-20 mnb-10">
                            <div class="lwa lwa-default">
                                <form class="block-content" action="#" method="post">
                                    <p>Username:</p>
                                    <div class="youplay-input">
                                        <input type="text" name="log">
                                    </div>

                                    <p>Password:</p>
                                    <div class="youplay-input">
                                        <input type="password" name="pwd">
                                    </div>

                                    <div class="youplay-checkbox mb-15 ml-5">
                                        <input type="checkbox" name="rememberme" value="forever" id="rememberme" tabindex="103">
                                        <label for="rememberme">Remember Me</label>
                                    </div>

                                    <button class="btn btn-sm ml-0 mr-0" name="wp-submit" id="lwa_wp-submit" tabindex="100">Log In</button>

                                    <br>
                                    <p><a href="#">Lost password?</a> | <a href="#">Register</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="search-toggle" href="search.html">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->


<!-- Main Content -->
<section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner big banner-top youplay-banner-parallax">
        <div class="image" style="background-image: url('http://i.imgur.com/wQzVkEt.jpg')"></div>
        <div class="info">
            <div>
                <div class="container text-center">
                    <img class="alignnone size-full" src="http://i.imgur.com/SZOtqEY.png" alt="LogoBig">
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->

    <div class="container">
        <div class="col-md-6">
            <h2>Alerts</h2>
            <table class="table table-bordered table-hover alerts">
                <tbody>
                </tbody>
            </table>
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
                <!-- Problème avec heure d'été -->
                <div class="countdown style-1 h2" data-end="2017-02-18 10:00:30" data-timezone="EST"></div>
            </div>
        </div>
    </section>
    <!-- /Realistic Battles -->


    <!-- The True Emotions -->
    <h2 class="container h1" id="news">Recent News</h2>
    <section class="youplay-news container">
        <!-- Single News Block -->
        <div class="news-one">
            <div class="row vertical-gutter">
                <div class="col-md-4">
                    <a href="blog-post.html" class="angled-img">
                        <div class="img">
                            <img src="assets/images/game-cos-1-500x375.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="clearfix">
                        <h3 class="h2 pull-left m-0"><a href="blog-post.html">Meet on Apple Devices - Black Rock Shooter</a></h3>
                        <span class="date pull-right"><i class="fa fa-calendar"></i> May 14, 2016</span>
                    </div>
                    <div class="tags">
                        <i class="fa fa-tags"></i>  <a href="#">Release</a>, <a href="#">Black Rock Shooter</a>, <a href="#">iOs</a>, <a href="#">Apple</a>
                    </div>
                    <div class="description">
                        <p>
                            Arcu curabitur magna lorem Luctus. Curabitur eleifend facilisi vulputate nam. Primis magna fringilla sed nunc felis cubilia suscipit adipiscing euismod eros cursus adipiscing dis vel etiam. Per id malesuada facilisi odio.
                        </p>
                    </div>
                    <a href="#" class="btn read-more pull-left">Read More</a>
                </div>
            </div>
        </div>
        <!-- /Single News Block -->

        <!-- Single News Block -->
        <div class="news-one">
            <div class="row vertical-gutter">
                <div class="col-md-4">
                    <a href="#" class="angled-img">
                        <div class="img">
                            <img src="assets/images/game-cos-2-500x375.jpg" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="clearfix">
                        <h3 class="h2 pull-left m-0"><a href="#">Closed Beta  Started Today - Black Rock Shooter II</a></h3>
                        <span class="date pull-right"><i class="fa fa-calendar"></i> April 24, 2016</span>
                    </div>
                    <div class="tags">
                        <i class="fa fa-tags"></i>  <a href="#">Black Rock Shooter II</a>, <a href="#">Beta</a>, <a href="#">Start Today</a>
                    </div>
                    <div class="description">
                        <p>Curabitur. Magnis sapien metus euismod a sociosqu ac phasellus non. Sociosqu, lorem. Curabitur. Adipiscing penatibus tempus habitant, porttitor cum sed.</p>

                        <p>Condimentum justo semper semper elementum. Nulla rhoncus ac eros aliquet praesent massa sed ante sociis vivamus. Vulputate lobortis turpis hymenaeos. Ac ipsum arcu sollicitudin lorem feugiat ullamcorper. Tempus donec iaculis.</p>
                    </div>
                    <a href="#" class="btn read-more pull-left">Read More</a>
                </div>
            </div>
        </div>
        <!-- /Single News Block -->
    </section>
    <!-- /The True Emotions -->


    <!-- Preorder -->
    <section class="youplay-banner big mt-40">
        <div class="image" style="background-image: url('http://i.imgur.com/lPpEwSu.png')"></div>
        <div class="info">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="fs-40">Realistic Battles</h2>
                            <p class="lead">Eleifend sem ipsum conubia euismod potenti ante ad sem sed, dictumst hymenaeos torquent quis. Class leo. Odio orci velit nulla habitasse conubia tempor eleifend dui suscipit mauris eget mollis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Preorder -->

    <!-- Footer -->
    <footer class="youplay-footer">
        <div class="wrapper">

            <!-- Widgets -->
            <div class="widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="side-block">
                                <div class="block-content">
                                    <img src="assets/images/logo.png" alt="">
                                    <br>
                                    <br>
                                    <p>
                                        Pretium placerat senectus cubilia purus. In curae; sem morbi odio, platea magna. Fames integer accumsan. Pellentesque proin fermentum et consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <!-- Side Popular News -->
                            <div class="side-block">
                                <h4 class="block-title">Popular News</h4>
                                <div class="block-content p-0">
                                    <!-- Single News Block -->
                                    <div class="row youplay-side-news">
                                        <div class="col-xs-3 col-md-4">
                                            <a href="blog-post-1.html" class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/game-cos-1-500x375.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xs-9 col-md-8">
                                            <h4 class="ellipsis"><a href="blog-post-1.html" title="Bloodborne - First Try!">Ready for Preorder - Call of Shooter</a></h4>
                                            <span class="date"><i class="fa fa-calendar"></i> May 14, 2016</span>
                                        </div>
                                    </div>
                                    <!-- /Single News Block -->

                                    <!-- Single News Block -->
                                    <div class="row youplay-side-news">
                                        <div class="col-xs-3 col-md-4">
                                            <a href="#!" class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/game-cos-2-500x375.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xs-9 col-md-8">
                                            <h4 class="ellipsis"><a href="#!" title="Whats New in Middle-earth">Closed Beta Started Today - Call of Shooter</a></h4>
                                            <span class="date"><i class="fa fa-calendar"></i> April 24, 2016</span>
                                        </div>
                                    </div>
                                    <!-- /Single News Block -->

                                    <!-- Single News Block -->
                                    <div class="row youplay-side-news">
                                        <div class="col-xs-3 col-md-4">
                                            <a href="#!" class="angled-img">
                                                <div class="img">
                                                    <img src="assets/images/game-cos-3-500x375.jpg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-xs-9 col-md-8">
                                            <h4 class="ellipsis"><a href="#!" title="Let's Grind Diablo III">We are in Facebook Now!</a></h4>
                                            <span class="date"><i class="fa fa-calendar"></i> April 5, 2016</span>
                                        </div>
                                    </div>
                                    <!-- /Single News Block -->
                                </div>
                            </div>
                            <!-- /Side Popular News -->
                        </div>
                        <div class="col-md-3">
                            <!-- Our Twitter -->
                            <div class="side-block">
                                <h4 class="block-title">Our Twitter</h4>
                                <div class="block-content">
                                    <div class="youplay-twitter" data-twitter-user-name="nkdevv" data-twitter-count="2" data-twitter-hide-replies="false"></div>
                                </div>
                            </div>
                            <!-- /Our Twitter -->
                        </div>
                        <div class="col-md-3">
                            <!-- Instagram -->
                            <div class="side-block">
                                <h4 class="block-title">Instagram</h4>
                                <div class="youplay-instagram row small-gap" data-instagram-user-id="2133360819"></div>
                            </div>
                            <!-- /Instagram -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->

            <!-- Copyright -->
            <div class="copyright">
                <div class="container">
                    <strong>nK</strong> &copy; 2016. All rights reserved
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </footer>
    <!-- /Footer -->

</section>
<!-- /Main Content -->

<!-- Search Block -->
<div class="search-block">
    <a href="#" class="search-toggle glyphicon glyphicon-remove"></a>
    <form action="search.html">
        <div class="youplay-input">
            <input type="text" name="search" placeholder="Search...">
        </div>
    </form>
</div>
<!-- /Search Block -->

<!-- jQuery -->
<?= $this->Html->script('/assets/bower_components/jquery/dist/jquery.min.js'); ?>
<!-- Hexagon Progress -->
<?= $this->Html->script('/assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js'); ?>
<!-- Bootstrap -->
<?= $this->Html->script('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>
<!-- Jarallax -->
<?= $this->Html->script('/assets/bower_components/jarallax/dist/jarallax.min.js'); ?>
<!-- Smooth Scroll -->
<?= $this->Html->script('/assets/bower_components/smoothscroll-for-websites/SmoothScroll.js'); ?>
<!-- Owl Carousel -->
<?= $this->Html->script('/assets/bower_components/owl.carousel/dist/owl.carousel.min.js'); ?>
<!-- Countdown -->
<?= $this->Html->script('/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js'); ?>
<!-- Moment.js -->
<?= $this->Html->script('/assets/bower_components/moment/min/moment.min.js'); ?>
<?= $this->Html->script('/assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js'); ?>
<!-- Magnific Popup -->
<?= $this->Html->script('/assets/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js'); ?>
<!-- Youplay -->
<?= $this->Html->script('/assets/youplay/js/youplay.min.js'); ?>
<!-- init youplay -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script>
    if(typeof youplay !== 'undefined') {
        youplay.init({
            // enable parallax
            parallax:         true,

            // set small navbar on load
            navbarSmall:      false,

            // enable fade effect between pages
            fadeBetweenPages: true,

            // twitter and instagram php paths
            php: {
                twitter: './php/twitter/tweet.php',
                instagram: './php/instagram/instagram.php'
            }
        });
    }
</script>


<script type="text/javascript">
    /*
        function warJson() {
            $.post('Home/warJson',function (response) {
                $(".countdown").attr('data-end', response.trader);
                $(".countdown").each(function () {
                    $(this).countdown($(this).attr('data-end'), function (event) {
                        $(this).html(
                            event.strftime([
                                '<div class="countdown-item">',
                                '<span>Jours</span>',
                                '<span><span>%D</span></span>',
                                '</div>',
                                '<div class="countdown-item">',
                                '<span>Heures</span>',
                                '<span><span>%H</span></span>',
                                '</div>',
                                '<div class="countdown-item">',
                                '<span>Minutes</span>',
                                '<span><span>%M</span></span>',
                                '</div>',
                                '<div class="countdown-item">',
                                '<span>Secondes</span>',
                                '<span><span>%S</span></span>',
                                '</div>'
                            ].join(''))
                        );
                    });
                });
                setTimeout("warJson()",5000);
            }, 'json');
        }
        warJson();
        */

        var dt = new Date();
        var time = dt.getTimezoneOffset();
        time = time*-60;



        function warjson(time) {
            $.post('Home/warjson', { time: time },function (datas) {
                alert('test');
                $.each(datas.datas.Alerts, function (key, value) {
                    var tr = $('<tr/>');
                    var td = $('<td/>');
                    var nom = $('<span class="AlertmissionNom"/>').text(value.MissionInfo.location);
                    td.append(nom);
                    td.append('<br/>');
                    var type = $('<span class="AlertmissionType"/>').text(value.MissionInfo.missionType);
                    td.append(type);
                    td.append('<br/>');
                    if(value.MissionInfo.maxWaveNum) {
                        var wave = $('<span class="AlertWave"/>').text(value.MissionInfo.maxWaveNum + " vagues");
                        td.append(wave);
                        td.append('<br/>');
                    }
                    var faction = $('<span class="Alertfaction"/>').text(value.MissionInfo.faction);
                    td.append(faction);
                    td.append('<br/>');
                    var level = $('<span class="Alertlevel"/>').text(value.MissionInfo.minEnemyLevel + " - " + value.MissionInfo.maxEnemyLevel);
                    td.append(level);
                    td.append('<br/>');
                    if(value.MissionInfo.archwingRequired == true){
                        var archwing = $('<span class="Alertarchwing"/>').text('Archwing');
                        td.append(archwing);
                        td.append('<br/>');
                    }
                    var credit = $('<span class="Alertcredit"/>').text(value.MissionInfo.missionReward.credits + ' crédits');
                    td.append(credit);
                    td.append('<br/>');
                    $.each(value.MissionInfo.missionReward.items, function (key, value){
                        var reward = $('<span class="Alertreward"/>').text(value);
                        td.append(reward);
                        td.append('<br/>');
                    });
                    $.each(value.MissionInfo.missionReward.countedItems, function (key, value){
                        var reward = $('<span class="Alertreward"/>').text(value.ItemType + " " + value.ItemCount);
                        td.append(reward);
                        td.append('<br/>');
                    });

                    if(value.Activation.sec <= datas.timenow){
                        var timeExpiry = $('<span class="Alerttime"/>').text('Fini dans: ' + value.Expiry.usec);
                        td.append(timeExpiry);
                        td.append('<br/>');
                    }
                    else {
                        var timeActivation = $('<span class="Alerttime"/>').text('Commence dans: ' + value.Activation.usec);
                        td.append(timeActivation);
                        td.append('<br/>');
                    }
                    td.appendTo(tr);
                    tr.appendTo(".alerts tbody");
                });
                setTimeout("warjson()",5000);

            }, 'json');
        }

        warjson(time);

/*

        $(".countdown").each(function () {
            $(this).countdown($(this).attr('data-end'), function (event) {
                $(this).html(
                    event.strftime([
                        '<div class="countdown-item">',
                        '<span>Days</span>',
                        '<span><span>%D</span></span>',
                        '</div>',
                        '<div class="countdown-item">',
                        '<span>Hours</span>',
                        '<span><span>%H</span></span>',
                        '</div>',
                        '<div class="countdown-item">',
                        '<span>Minutes</span>',
                        '<span><span>%M</span></span>',
                        '</div>',
                        '<div class="countdown-item">',
                        '<span>Seconds</span>',
                        '<span><span>%S</span></span>',
                        '</div>'
                    ].join(''))
                );
            });
        });
        */
</script>

</body>

</html>
