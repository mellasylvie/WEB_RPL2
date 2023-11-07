<?php
    //cek tombol jika ditekan
    if(isset($_POST['login'])){
        if($_POST['username']=='admin' && $_POST['password']=='1012'){
            header("Location:home.php");
            exit;
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
            padding: 2%;
        }
        form{
            padding-left: 10%;
            padding-right: 10%;
        }
    </style>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)) :?>
        <p>Username/password salah</p>
    <?php endif;?>    

    <form action="" method="post">

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input class="form-control" type="text" name="username" required><br>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input class="form-control" type="password" name="password" required><br>
    </div>

        <button class="btn btn-primary" type="submit" value="login" name="login">Login</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>