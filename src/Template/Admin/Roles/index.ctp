<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <span class="title">Communauté</span>
            <div class="description">with jquery Datatable for display data with most usage functional. such as search, ajax loading, pagination, etc.</div>
        </div>
        <a href="<?= $this->Url->build(['controller' => 'Roles', 'action' => 'add']); ?>" class="btn btn-info"><i class="fa fa-plus"></i></a>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Rôles</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            foreach ($roles as $role){?>
                                <tr>
                                    <td><?= $role['id'] ?></td>
                                    <td><?= $role['nom'] ?></td>
                                    <td>
                                        <a href="<?= $this->Url->build(['controller' => 'Roles', 'action' => 'edit', $role['id']]); ?>" type="button" class="btn btn-sm btn-info"><i class="fa fa-wrench"></i></a>
                                        <a href="<?= $this->Url->build(['controller' => 'Roles', 'action' => 'delete', $role['id']]); ?>" type="button" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <?php
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