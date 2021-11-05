<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card col-lg-6 mx-auto">
            <div class="carr-header bg-primary">
                <h4 class="text-white">
                    Login Karyawan
                </h4>
            </div>
            <div class="card-body">
                <form action="login-process.php" method="post">
                    Username
                    <input type="text" name="username"
                    class="form-control mb-2" required>
                    
                    Password
                    <input type="text" name="password"
                    class="form-control mb-2" required>
                    <button type="submit" name="login"
                    class="btn btn-danger btn-block">
                        Log In
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>