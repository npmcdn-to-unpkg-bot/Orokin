<!-- jQuery -->
<?= $this->Html->script('/assets/bower_components/jquery/dist/jquery.min.js') ?>
<!-- Hexagon Progress -->
<?= $this->Html->script('/assets/bower_components/HexagonProgress/jquery.hexagonprogress.min.js') ?>
<!-- Bootstrap -->
<?= $this->Html->script('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
<!-- Jarallax -->
<?= $this->Html->script('/assets/bower_components/jarallax/dist/jarallax.min.js') ?>
<!-- Smooth Scroll -->
<?= $this->Html->script('/assets/bower_components/smoothscroll-for-websites/SmoothScroll.min.js') ?>
<!-- Owl Carousel -->
<?= $this->Html->script('/assets/bower_components/owl.carousel/dist/owl.carousel.min.js') ?>
<!-- Countdown -->
<?= $this->Html->script('/assets/bower_components/jquery.countdown/dist/jquery.countdown.min.js') ?>
<!-- Moment.js -->
<?= $this->Html->script('/assets/bower_components/moment/min/moment.min.js') ?>
<?= $this->Html->script('/assets/bower_components/moment-timezone/builds/moment-timezone-with-data.min.js') ?>
<!-- Magnific Popup -->
<?= $this->Html->script('/assets/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js') ?>
<!-- Youplay -->
<?= $this->Html->script('/assets/youplay/js/youplay.min.js') ?>
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

<?php if($this->request->session()->read('Auth.User')):?>
    <script type="text/javascript">
        function activity() {
            $.post('Users/activity',function() {
                setTimeout('activity()', 10000);
            }, 'json');
        }
        activity();
    </script>
<?php endif; ?>