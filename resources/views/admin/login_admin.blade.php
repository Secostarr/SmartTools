<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $home->nama_situs ?? 'Admin Login' }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">

    <style>
        /* ===============================
           BACKGROUND CONFIG (GANTI DI SINI)
        ================================ */
        :root {
            --bg-image: url("{{ asset('../../public/img/bg_home.jpg') }}");
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;

            background-image: var(--bg-image);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Overlay gelap */
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            z-index: -1;
        }

        /* ===============================
           LOGIN CARD
        ================================ */
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 14px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
        }

        .login-card h2 {
            font-weight: 800;
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 0 2px rgba(13, 110, 253, 0.2);
        }

        button {
            background: #0d6efd;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            font-weight: 600;
            transition: 0.3s;
        }

        button:hover {
            background: #0b5ed7;
        }

        .form-check-label {
            font-size: 14px;
            font-weight: 600;
        }

        .show-password {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
        }

        .show-password input[type="checkbox"] {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .show-password label {
            margin: 0;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <div class="login-card">

        @if (session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif

        <h2>Admin - Login</h2>

        <form action="{{ route('admin.auth') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="username" placeholder="Enter your name" required>
            </div>

            <div class="mb-2">
                <label>Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="show-password">
                <input type="checkbox" id="showPassword">
                <label for="showPassword">Show Password</label>
            </div>

            <button type="submit">Login</button>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Show Password -->
    <script>
        document.getElementById('showPassword').addEventListener('change', function () {
            const password = document.getElementById('password');
            password.type = this.checked ? 'text' : 'password';
        });
    </script>

</body>
</html>
