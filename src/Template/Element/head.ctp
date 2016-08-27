<?= $this->Html->charset();?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?= $this->fetch('title'); ?></title>

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
<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'); ?>

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