<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes</title>
</head>

<body>
    <h1>Add Class</h1>
    <nav>
        <a href="<?= base_url('admin/add_student') ?>">Add Student</a>
        <a href="<?= base_url('admin/add_class') ?>">Add Class</a>
        <a href="<?= base_url('admin/scores') ?>">Update Scores</a>
        <a href="<?= base_url('admin/reportS') ?>">Report Sheet</a>
    </nav>
    <p><?= $err ?></p>
    <form action="<?= base_url('admin/addClass') ?>" method="post">
        <input type="text" name="name" id="" placeholder="Class Name e.g JS2 or JS 2">
        <input type="text" name="teacher" id="" placeholder="Teacher">
        <input type="text" name="total" id="" placeholder="Class Total Student">
        <input type="text" name="phone" id="" placeholder="Teacher's Contact">
        <input type="submit" value="Add Class">
    </form>

</body>

</html>