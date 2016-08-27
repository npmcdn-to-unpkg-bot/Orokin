<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'default';

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif; ?>
<?php if(h($message) == "Not Found") : ?>
    <section class="content-wrap full youplay-404">
        <div class="youplay-banner banner-top">
            <div class="image" style="background-image: url('https://i.imgur.com/wQzVkEt.jpg')">
            </div>
            <div class="info">
                <div>
                    <div class="container align-center">
                        <h2 class="h1">404</h2>
                        <h3>Page Non Trouvée</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else: ?>
    <h2><?= h($message) ?></h2>
    <p class="error">
        <strong><?= __d('cake', 'Error') ?>: </strong>
        <?= sprintf(
            __d('cake', 'The requested address %s was not found on this server.'),
            "<strong>'{$url}'</strong>"
        ) ?>
    </p>
<?php endif; ?>