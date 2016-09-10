<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-xs-12">
                <br/>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Modifier l'utilisateur</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create($user); ?>
                        <div class="sub-title">Role</div>
                        <div>
                        <?= $this->Form->input('role_id', [
                            'label' => false
                        ]); ?>
                        </div>
                        <div class="sub-title">Admin</div>
                        <div>
                        <?= $this->Form->checkbox('admin', [
                            'class' => 'toggle-checkbox'
                        ]); ?>
                        </div>
                        <hr/>
                        <div>
                        <?= $this->Form->button(__('Sauvegarder'), [
                            'class' => 'btn btn-success'
                        ]); ?>
                        </div>
                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
