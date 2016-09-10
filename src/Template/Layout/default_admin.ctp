<?= $this->Html->docType('html5');?>
<html lang="fr">

<head>
    <?= $this->Html->charset();?>
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/icon.png">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <?= $this->Html->css("/assets_admin/lib/css/bootstrap.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/font-awesome.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/animate.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/bootstrap-switch.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/checkbox3.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/jquery.dataTables.min.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/dataTables.bootstrap.css") ?>
    <?= $this->Html->css("/assets_admin/lib/css/select2.min.css") ?>
    <!-- CSS App -->
    <?= $this->Html->css("/assets_admin/css/style.css") ?>
    <?= $this->Html->css("/assets_admin/css/themes/flat-blue.css") ?>
</head>

<body class="flat-blue">
<div class="app-container">
    <div class="row content-container">
        <nav id="navbar" class="navbar navbar-fixed-top navbar-top navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-expand-toggle">
                        <i class="fa fa-bars icon"></i>
                    </button>
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-th icon"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-times icon"></i>
                    </button>
                    <li class="dropdown profile">
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>"><i class="fa fa-sign-out"></i> Déconnexion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="side-menu sidebar-inverse">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <div class="icon fa fa-paper-plane"></div>
                            <div class="title">Administration</div>
                        </a>
                        <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="<?= $this->Url->build(['controller' => 'Home', 'action' => 'index']); ?>">
                                <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                            </a>
                        </li>
                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#component-example">
                                <span class="icon fa fa-group"></span><span class="title">Communauté</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="component-example" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">Membres</a>
                                        </li>
                                        <li><a href="<?= $this->Url->build(['controller' => 'Roles', 'action' => 'index']); ?>">Rôles</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Dropdown-->
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-element">
                                <span class="icon fa fa-cubes"></span><span class="title">Équipements</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-element" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Warframes</a>
                                        </li>
                                        <li><a href="#">Armes</a>
                                        </li>
                                        <li><a href="#">Archwings</a>
                                        </li>
                                        <li><a href="#">Compagnons</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <?= $this->fetch('content') ?>
    </div>
    <footer class="app-footer">
        <div class="wrapper">
            <span class="pull-right">2.1 <a href="#"><i class="fa fa-long-arrow-up"></i></a></span> © 2015 Copyright.
        </div>
    </footer>
    <div>
        <!-- Javascript Libs -->
    <?= $this->Html->script("/assets_admin/lib/js/jquery.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/bootstrap.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/Chart.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/bootstrap-switch.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/jquery.matchHeight-min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/jquery.dataTables.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/dataTables.bootstrap.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/select2.full.min.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/ace/ace.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/ace/mode-html.js") ?>
    <?= $this->Html->script("/assets_admin/lib/js/ace/theme-github.js") ?>
            <!-- Javascript -->
    <?= $this->Html->script("/assets_admin/js/app.js") ?>
    <?= $this->Html->script("/assets_admin/js/index.js") ?>
</body>

</html>
