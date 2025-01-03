<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(80deg, #000000, #FFD700);
            color: #fff;
        }

        .login-container {
            max-width: 900px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .image-container {
            position: relative;
            padding: 2px;
        }

        .image-container img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .form-container {
            padding: 40px;
        }

        .form-floating .form-control {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 20px;
            /* Membuat input menjadi rounded */
        }

        .form-floating .form-control:focus {
            box-shadow: 0 2px 6px rgba(13, 110, 253, 0.3);
            border-color: #FFD700;
            outline: none;
        }

        .form-floating label {
            color: #6c757d;
            transition: all 0.2s;
        }

        .form-floating .form-control:focus~label {
            color: #FFD700;
        }

        .social-buttons a {
            width: 50px;
            height: 50px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 5px;
            background-color: #e9ecef;
            text-decoration: none;
            color: #FFD700;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .social-buttons a:hover {
            background-color: #FFD700;
            color: #fff;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 2px;
            background: #ccc;
        }

        .divider span {
            margin: 0 10px;
            color: #6c757d;

        }

        .form-check-label {
            font-size: 14px;
        }

        .register-link {
            color: #dc3545;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="row login-container">
        <!-- Bagian Gambar -->
        <div class="col-md-6 image-container">
            <img src="assets/img/edelweis flow.jpg" alt="Login Illustration">
        </div>
        <!-- Bagian Form -->
        <div class="col-md-6 form-container">
            <h4 class="text-center text-dark">Sign in with</h4>
            <div class="d-flex justify-content-center social-buttons mt-3">
                <a href="google_login.php"><i class="bi bi-google text-primary"></i></a>
                <a href="instagram_login.php"><i class="bi bi-instagram text-danger"></i></a>
                <a href="tiktok_login.php"><i class="bi bi-tiktok text-dark"></i></a>
            </div>

            <div class="divider">
                <span>Or</span>
            </div>
            <form action="proses/login_proses.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" placeholder="Username" name="username"
                        required>
                    <label for="floatingName">Nama Lapangan</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                        name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">

                    <a href="#" class="text-decoration-none text-right">Forgot password?</a>
                </div>
                <button type="submit" class="btn w-100" style="background: linear-gradient(35deg, #000000, #FFD700); color: white; border: none;">LOGIN</button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>

</html>