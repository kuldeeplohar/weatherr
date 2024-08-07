<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather World</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://c.pxhere.com/images/24/16/6e1c37ea75f848b81cb3f766177f-1618901.jpg!d') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header {
            position: fixed; /* Fixes the header at the top of the page */
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(52, 58, 64, 0.8); /* Semi-transparent background */
            color: #fff;
            padding: 10px 0;
            text-align: center;
            z-index: 1000; /* Ensures the header stays on top of other elements */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow for depth */
        }

        .login-section {
            max-width: 400px;
            margin: 100px auto 50px auto; /* Adjust margin-top to account for the fixed header */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .login-section h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-section p {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        .register-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body class="antialiased">
    <header>
        <h1>Weather World</h1>
    </header>

    <section class="login-section">
        <h2>Register</h2>

     <form action="{{ route('register.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
      @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
        @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
</form>

        <a href="/" class="register-link">Already have an account? Log in here.</a>
    </section>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
