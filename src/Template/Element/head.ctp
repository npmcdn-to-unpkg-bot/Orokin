<?= $this->Html->charset();?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $this->fetch('title') ?></title>

<meta name="description" content="Clan Fr Warframe">
<meta name="keywords" content="warframe,jeu vidéo,worldstate,voidtrader,alerts,sorties,steam,réseau,social,news">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Icon -->
<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
<link rel="manifest" href="img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Open+Sans:400,700' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<?= $this->Html->css('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
<!-- FontAwesome -->
<!-- $this->Html->css('/assets/bower_components/font-awesome/css/font-awesome.min.css'); -->
<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') ?>

<!-- Owl Carousel -->
<?= $this->Html->css('/assets/bower_components/owl.carousel/dist/assets/owl.carousel.min.css') ?>

<!-- Magnific Popup -->
<?= $this->Html->css('/assets/bower_components/magnific-popup/dist/magnific-popup.css') ?>

<!-- Youplay -->
<?= $this->Html->css('/assets/youplay/css/youplay.min.css') ?>

<!-- Custom Styles -->
<?= $this->Html->css('/assets/custom.css') ?>

<!-- RTL (uncomment this to enable RTL support) -->
<!-- <link rel="stylesheet" type="text/css" href="../assets/youplay/css/youplay-rtl.css" /> -->

<?= $this->fetch('scriptTop') ?>