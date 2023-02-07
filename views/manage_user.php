<?php include 'header.php'; ?>
<div class="row m-auto">
    <div class="col-11 m-auto px-0 mt-2">
        <a class="btn btn-primary float-end btn-sm px-3" href="add_user.php" style="font-size: 12px;"><i class="fa fa-plus "></i> Add User</a>
    </div>
</div>
<div class="row m-auto">
    <div class="col-11 m-auto mt-2 rounded bg-dark p-5 table-responsive-lg">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php $result = whereNotIn('users', 'id', [$_SESSION['id']]) ?>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['role'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td class="text-center"><button class="btn btn-primary btn-sm" style="font-size:12px;"><i class="fa fa-edit"></i> Update</button></td>
                        <td class="text-center"><a class="btn btn-danger btn-sm delete" href="../actions/delete_user.php?id=<?= $row['id'] ?>" style="font-size:12px;"><i class="fa fa-trash"></i> Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'footer.php'; ?>