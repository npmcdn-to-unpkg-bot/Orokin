<?= $this->Html->docType('html5');?>
<html lang="fr">
    <head>
        <?= $this->element('head') ?>
    </head>
    <body>
        <?= $this->element('header') ?>

        <!-- Main Content -->

        <?= $this->fetch('content') ?>

        <!-- /Main Content -->

        <?= $this->element('search') ?>

        <?= $this->element('script') ?>

        <?= $this->fetch('script') ?>
    </body>
</html>
