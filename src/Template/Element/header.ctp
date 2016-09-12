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
            <?= $this->Html->link(
                    $this->Html->image("http://i.imgur.com/7mi7dDR.png", ["alt" => "logo"]),
                    ['controller' => 'Home', 'action' => 'index'],
                    ['escape' => false, 'class' => 'navbar-brand']
            ) ?>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <!--
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
                -->
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>">
                        [Dev]Membres
                        <span class="label">Communauté</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'WorldState', 'action' => 'index']); ?>">
                        WorldState
                        <span class="badge bg-danger" style="position: relative;margin-top: -16px;margin-left: -8px">!</span>
                        <span class="label">En Direct</span>
                    </a>
                </li>
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'Codex', 'action' => 'index']); ?>">
                        Codex
                        <span class="label">Encyclopédie</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($this->request->session()->read('Auth.User')): ?>
                <li class="dropdown dropdown-hover">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?= $this->request->session()->read('Auth.User.social_profile.display_name') ?>
                        <span class="label"><?= $this->request->session()->read('Auth.User.role.nom') ?></span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>">Déconnexion</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login', '?' => ['provider' => 'Steam']]); ?>">
                        Connexion
                        <span class="label">Via Steam <i class="fa fa-steam"></i></span>
                    </a>
                </li>
                <?php endif ?>
                <!--
                <li>
                    <a class="search-toggle" href="search.html">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                -->
            </ul>
        </div>
    </div>
</nav>
<!-- /Navbar -->