<<<<<<< HEAD
<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
 
 
 
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
 
 
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
 
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
 
 
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
</head>
 
<body class="text-center">
 
    <main class="form-signin">
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
 
        </form>
    </main>
 
 
 
</body>
 
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Bootstrap Example</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
        }

        .login-heading {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-floating {
            margin-bottom: 15px;
        }

        .form-floating input {
            border-radius: 5px;
            padding: 10px;
        }

        .login-btn {
            border-radius: 5px;
            padding: 10px 0;
        }

        .login-btn:hover {
            background-color: #007bff;
        }

        .login-link {
            text-decoration: none;
            color: #007bff;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    
    <div class="login-container">
        <h2 class="login-heading">Silahkan Login terlebih dahulu</h2>
        <form method="post" action="<?= base_url(); ?>/login/process">
            <?= csrf_field(); ?>

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            <div class="form-floating">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
                <label for="username">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary login-btn" type="submit">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="<?= base_url(); ?>register" class="login-link">sudah punya akun belum ?</a>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-V2mPcX0jPOtn7OW3OrQvYC0sHHRQ6ZzjJ/CpVKZUCF94jzqy5I5zvhfRbFkXfVW/" crossorigin="anonymous"></script>
</body>
</html>
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
