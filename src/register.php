<!DOCTYPE html>
<html lang="en">

<head>
    <title>LOGIN FORM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>

<body>
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="login-form bg-light mt-4 p-4">
                        <form action="cekRegister.php" method="POST" class="row g-3">
                            <h4>Sign Up</h4>
                            <div class="col-12">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="col-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary float-end w-100">Login</button>
                            </div>
                        </form>
                        <hr class="mt-4">
                        <div class="col-12">
                            <p class="text-center mb-0">Have account yet? <a href="login.php">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>

</html>