<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <style>
        nav{
            display: flex;
            flex-direction: column;
        }
        nav a{
            align-content: space-between;
        }
    </style>
</head>

<body>
    <h1>Dashboard</h1>
    <nav>
    <a href="<?= base_url('admin/add_student') ?>">Add Student</a>
    <a href="<?= base_url('admin/add_class') ?>">Add Class</a>
    <a href="<?= base_url('admin/scores') ?>">Update Scores</a>
    <a href="<?= base_url('admin/reportS') ?>">Report Sheet</a>
    </nav>

</body>

</html>