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
            ); ?>
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
                    <a href="<?= $this->Url->build(['controller' => 'WorldState', 'action' => 'index']); ?>">
                        WorldState
                        <span class="badge bg-danger">!</span>
                        <span class="label">En Direct</span>
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