<section class="content-wrap full">
    <section class="youplay-banner">
        <div class="image" style="background-image: url('https://i.imgur.com/wQzVkEt.jpg');"></div>
        <div class="info">
            <div>
                <div class="container text-center youplay-login">
                    <div class="youplay-form">
                        <h2>Connexion</h2>
                        <?= $this->Form->create() ?>
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
                        <?= $this->Form->button(__('Se Connecter'), [
                            'class' => 'btn btn-default db',
                        ]) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>