<section class="content-wrap full">
    <section class="youplay-banner">
        <div class="image" style="background-image: url('https://i.imgur.com/wQzVkEt.jpg');"></div>
        <div class="info">
            <div>
                <div class="container text-center youplay-login">
                    <div class="youplay-form">
                        <?= $this->Form->create($user) ?>
                        <h2><?= __('Inscription') ?></h2>
                        <div class="youplay-input">
                            <?= $this->Form->input('username', [
                                'placeholder' => 'Identifiant',
                                'label' => false
                            ]) ?>
                        </div>
                        <div class="youplay-input">
                            <?= $this->Form->input('password', [
                                'placeholder' => 'Mot de passe',
                                'label' => false
                            ]) ?>
                        </div>
                        <div class="youplay-select">
                        <?= $this->Form->input('role', [
                            'options' => ['admin' => 'Admin', 'author' => 'Author'],
                            'label' => false
                        ]) ?>
                        </div>
                        <br/>
                        <?= $this->Form->button(__('Ajouter'), [
                            'class' => 'btn btn-default db',
                        ]) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
        <br/>
    </section>
</section>
