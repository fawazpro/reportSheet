<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scores</title>
    <style>
        .size {
            width: 30px;
        }
    </style>
</head>

<body>
    <h1>Update Scores</h1>
    <nav>
        <a href="<?= base_url('admin/add_student') ?>">Add Student</a>
        <a href="<?= base_url('admin/add_class') ?>">Add Class</a>
        <a href="<?= base_url('admin/scores') ?>">Update Scores</a>
        <a href="<?= base_url('admin/reportS') ?>">Report Sheet</a>
    </nav>
    <p><?= $err ?></p>
    
    <h4>Select which subject and class to edit</h4>
    <form action="<?= base_url('admin/editboard') ?>" method="post">
    <label for="Class">Class</label><hr>
        <input type="radio" name="class" id="" value="js1">JS1 <br>
        <input type="radio" name="class" id="" value="js2">JS2 <br>
        <input type="radio" name="class" id="" value="js3">JS3 <br>
        <br>
        
    <label for="Subject">Subject</label><hr>
        <input type="radio" name="subject" id="" value="en">English <br>
        <input type="radio" name="subject" id="" value="mt">Mathematics <br>
        <input type="radio" name="subject" id="" value="nv">National Value <br>
        <input type="radio" name="subject" id="" value="pv">Pre Vocational Studies<br>
        <input type="radio" name="subject" id="" value="bs">Basic Science & Tech<br>
        <br>

        <input type="submit" value="Add or Update Score">
    </form>

    
</body>
</html>