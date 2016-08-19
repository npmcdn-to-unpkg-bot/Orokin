<!-- File: src/Template/Alerts/index.ctp -->

<?= $this->Html->docType('html5');?>
<html lang="fr">
    <head>
        <?= $this->element('head') ?>
    </head>
    <body>
        <?= $this->element('header') ?>

        <!-- Main Content -->
        <section class="content-wrap">

            <?= $this->fetch('content') ?>
            
            <?= $this->element('footer') ?>
            
        </section>
        <!-- /Main Content -->

        <?= $this->element('search') ?>

        <?= $this->element('script') ?>

        <?= $this->fetch('script') ?>

    </body>
</html>
