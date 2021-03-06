<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <span class="title">Communauté</span>
            <div class="description">with jquery Datatable for display data with most usage functional. such as search, ajax loading, pagination, etc.</div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Membres</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>Admin</th>
                                <th>Rôle</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>Admin</th>
                                <th>Rôle</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            foreach ($allUsers as $user){
                                foreach ($user['social_profiles'] as $userSteam){?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $userSteam['display_name'] ?></td>
                                        <th><?= ($user['admin']) ? 'Oui' : 'Non' ?></th>
                                        <td><?= $user['role']['nom'] ?></td>
                                        <td><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'edit', $user['id']]); ?>" type="button" class="btn btn-sm btn-info"><i class="fa fa-wrench"></i></a></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>