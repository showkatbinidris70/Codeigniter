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
        <form action="<?php echo base_url() . 'index.php/todo_user/edit/' . $todo_user['todo_id'] ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label for="todo_task_name" class="col-sm-2 col-form-label">
                            <h4> Task Name</h4>
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="todo_task_name" value="<?php echo set_value('todo_task_name', $todo_user['todo_task_name']); ?>">
                            <?php echo form_error('todo_task_name');
                            ?>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-info">Update</button>
                            <a href="<?php echo base_url() . 'index.php/todo_user/index' ?>" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>