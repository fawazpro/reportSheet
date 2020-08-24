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
    <h1>Edit Score Board</h1>
    <nav>
        <a href="<?= base_url('admin/add_student') ?>">Add Student</a>
        <a href="<?= base_url('admin/add_class') ?>">Add Class</a>
        <a href="<?= base_url('admin/scores') ?>">Update Scores</a>
        <a href="<?= base_url('admin/reportS') ?>">Report Sheet</a>
    </nav>
    <p><?= $err ?></p>
    <!-- <form action="<?= base_url('admin/addStudent') ?>" method="post">
        <input type="text" name="name" id="" placeholder="Score? Student or Class">
        <input type="submit" value="Add or Update Score">
    </form> -->

    <h4>Editting Scores for JS1 Computer</h4>
    <table id="example1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Class</td>
                <td><?=$subj?>CAT</td>
                <td><?=$subj?>Exam</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['class'] ?></td>
                <td><?= $row[$subj.'_cat'] ?></td>
                <td><?= $row[$subj.'_exam'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.tabledit.min.js') ?>"></script>
<script>
    $('#example1').Tabledit({
        url: 'example',
        inputClass: 'size',
        editButton: false,
        deleteButton: false,
        hideIdentifier: false,
        columns: {
            identifier: [0, 'id'],
            editable: [
                [3, 'subjCAT'],
                [4, 'subjEXAM']
            ]
        },
        onDraw() {
            console.log('hello');
        }
    });
</script>

</html>