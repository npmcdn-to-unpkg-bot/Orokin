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
                <li class="dropdown dropdown-hover ">
                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Codex <span class="caret"></span> <span class="label">Encyclopédie</span>
                    </a>
                    <div class="dropdown-menu">
                        <ul role="menu">
                            <li><a href="<?= $this->Url->build(['controller' => 'Warframes', 'action' => 'index']); ?>">Warframes</a>
                            </li>
                            <li><a href="forums-topics.html">Forums Topics</a>
                            </li>
                            <li><a href="forums-single-topic.html">Single Topic</a>
                            </li>
                            <li><a href="matches-list.html">Matches List</a>
                            </li>
                            <li><a href="match.html">Match</a>
                            </li>
                            <li><a href="match-2.html">Match with Maps</a>
                            </li>
                        </ul>
                        <ul role="menu">
                            <li><a href="widgets.html">Widgets <span class="badge bg-default">New</span></a>
                            </li>
                            <li><a href="components.html">Components</a>
                            </li>
                            <li><a href="coming-soon.html">Coming Soon</a>
                            </li>
                            <li><a href="contact.html">Contact Us</a>
                            </li>
                            <li><a href="search.html">Search</a>
                            </li>
                            <li><a href="login.html">Login</a>
                            </li>
                            <li><a href="404.html">404</a>
                            </li>
                            <li><a href="blank.html">Blank</a>
                            </li>
                        </ul>
                    </div>
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