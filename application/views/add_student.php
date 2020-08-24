<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>

<body>
    <h1>Add Student</h1>
    <nav>
        <a href="<?= base_url('admin/add_student') ?>">Add Student</a>
        <a href="<?= base_url('admin/add_class') ?>">Add Class</a>
        <a href="<?= base_url('admin/scores') ?>">Update Scores</a>
        <a href="<?= base_url('admin/reportS') ?>">Report Sheet</a>
    </nav>
    <p><?= $err ?></p>
    <form action="<?= base_url('admin/addStudent') ?>" method="post">
        <input type="text" name="name" id="" placeholder="Student Fullname">
        <input type="text" name="dob" id="" placeholder="Date Of Birth">
        <input type="text" name="class" id="" placeholder="Class">
        <input type="text" name="phone" id="" placeholder="Guardian Contact">
        <input type="submit" value="Add Student">
    </form>

</body>

</html>