<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #cfc9ff, #e6e3ff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            width: 900px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .left-side {
            background: #f5f5f5;
            padding: 50px;
        }

        .right-side {
            background: linear-gradient(135deg, #6a5af9, #8a7dff);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .right-side img {
            width: 250px;
            border-radius: 20px;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
        }

        .btn-login {
            background: #6a5af9;
            border: none;
            border-radius: 12px;
            padding: 10px;
            color: white;
        }

        .btn-login:hover {
            background: #5a4ae3;
        }

        .social-btn {
            border-radius: 12px;
            padding: 10px;
            border: 1px solid #ddd;
            background: white;
            transition: 0.3s;
        }

        .social-btn:hover {
            background: #f0f0f0;
        }

        .divider {
            text-align: center;
            margin: 20px 0;
            color: #999;
        }
    </style>
</head>
<body>

<div class="card login-card">
    <div class="row g-0">
        
        <!-- LEFT -->
        <div class="col-md-6 left-side">
            <h4 class="fw-bold text-center">LOGIN</h4>
            <p class="text-center text-muted small">
                How to i get started lorem ipsum dolor at?
            </p>

            <form action="{{ route('admin.authenticate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-login">Login Now</button>
                </div>

                <div class="divider">Login with Others</div>

                <div class="d-grid gap-2">
                    <button class="social-btn">
                        <i class="fab fa-google me-2"></i> Login with Google
                    </button>
                    <button class="social-btn">
                        <i class="fab fa-facebook-f me-2"></i> Login with Facebook
                    </button>
                </div>
            </form>
        </div>

        <!-- RIGHT -->
        <div class="col-md-6 right-side">
            <img src="https://sagastudies.com/wp-content/uploads/2023/12/girl-student-1-819x1024.png" alt="user image">
        </div>

    </div>
</div>

</body>
</html>