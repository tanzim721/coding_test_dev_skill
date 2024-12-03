<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>

</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card login-card">
            <div class="card-header p-0">
                <img src="https://media.istockphoto.com/id/1419033642/photo/driving-on-the-motorway.jpg?b=1&s=612x612&w=0&k=20&c=c-f9IMAallgf0cm7Lfyt-RRwF2RfTGVtZVtSIeybAaw="
                    class="img-fluid" alt="Header Image">
            </div>
            <div class="card-body">
                <h3 class="text-center mb-4 d-flex justify-content-between">
                    <span>Sign In</span>
                    <div class="d-flex justify-content-end">
                        <i class="fa fa-facebook btn btn-light btn-sm me-2"></i><i class="fa fa-twitter btn btn-light btn-sm"></i>
                    </div>
                </h3>
                <form method="POST" action="{{ route('login') }}" class="p-4 shadow-lg rounded bg-white">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Remember Me</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Sign In</button>
                </form>
                <div class="text-center mt-3">
                    <span>Not a member? <a href="#" class="text-decoration-none">Sign Up</a></span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
