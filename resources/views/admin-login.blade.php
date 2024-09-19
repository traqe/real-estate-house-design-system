<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: url({{ asset('assets/images/hero_2.jpg') }}); background-size: cover; display: flex; align-items: center; height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div style="background-color: rgb(237, 237, 237); border-radius: 8px;" class="col-md-4 p-5">
                <h3 style="color: #000080" class="text-center">Login</h3>
                <form action="{{ route('admin') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <a style="color: #000080; font-size: 10pt; margin-bottom: 5px;" href="/">Go to Home</a>
                    <br>
                    <button style="background-color: #000080; border: 0" type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
