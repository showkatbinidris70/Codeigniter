<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <title>Todo App</title>
</head>

<body>
    <div class="navbar navbar-dark bg-info">
        <div class="container">
            <a href="#" class="text-white">
                <h1>Simple Todo App</h1>
            </a>
        </div>
    </div>
    <div class="container" style="padding-top: 10px;">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <h3>View Users</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a href="<?php echo base_url() . 'index.php/todo_user/create' ?>" class="btn btn-info">
                            <h5>+ Create</h5>
                        </a>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Task Name</th>
                            <th width="60">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                    </thead>
                    <?php if (!empty($todo_users)) {
                        $serialNo = 1;
                        foreach ($todo_users as $todo_user) { ?>
                            <tr>
                                <td><?php echo $serialNo++; ?></td>
                                <td><?php echo $todo_user['todo_task_name']; ?></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/todo_user/edit/' . $todo_user['todo_id'] ?>" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/todo_user/delete/' . $todo_user['todo_id'] ?>" class="btn btn-success">Complete</a>
                                </td>
                            </tr>

                        <?php }
                    } else { ?>
                        <tr>
                            <td colspan="5">Records not found</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>