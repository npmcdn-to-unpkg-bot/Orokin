<div class="container-fluid">
    <div class="side-body">
        <div class="page-title">
            <span class="title">Membres</span>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <table class="datatable table table-striped" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>Rôle</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Pseudo</th>
                                <th>Rôle</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php foreach ($allUsers as $user){
                                foreach ($user['social_profiles'] as $userSteam){?>
                                    <tr>
                                        <td><?= $user['id'] ?></td>
                                        <td><?= $userSteam['display_name'] ?></td>
                                        <td><?= $user['role'] ?></td>
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