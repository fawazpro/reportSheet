<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>

<body>
    <h1>You are welcome</h1>
    <form action="<?= base_url('dashboard') ?>" method="post">
        <input type="text" name="uname" id="">
        <input type="password" name="pword" id="">
        <input type="submit" value="login">
    </form>
    <a href="<?= base_url('test') ?>"></a>

</body>

</html>