<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-xs-12">
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Modifier le Rôle</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create($role) ?>
                        <div class="sub-title">Role</div>
                        <div>
                        <?= $this->Form->input('nom', [
                            'label' => false
                        ]) ?>
                        </div>
                        <hr/>
                        <div>
                        <?= $this->Form->button(__('Sauvegarder'), [
                            'class' => 'btn btn-success'
                        ]) ?>
                        </div>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
