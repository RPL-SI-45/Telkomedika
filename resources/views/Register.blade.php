<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
    <style>
        body {
            background-color: #b6252a; /* Set background color */
        }
        .form-signin {
            max-width: 400px; /* Adjust form width */
            margin: auto; /* Center the form horizontally */
            padding: 2rem; /* Add padding */
            border: 1px solid #ccc; /* Add border */
            border-radius: 10px; /* Add border radius */
            background-color: #fff; /* Set background color */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Add box shadow */
        }
        .form-signin img {
            margin: auto; /* Center the image */
            display: block; /* Make the image a block element */
        }
        .form-signin h1 {
            text-align: center; /* Center the heading */
            margin-bottom: 1.5rem; /* Add margin bottom */
        }
        .form-floating label {
            color: #6c757d; /* Set label color */
        }
        .btn-primary {
            background-color: #712cf9; /* Set button background color */
            border-color: #712cf9; /* Set button border color */
        }
        .btn-primary:hover, .btn-primary:focus {
            background-color: #6528e0; /* Set button hover color */
            border-color: #6528e0; /* Set button hover border color */
        }
        .text-body-secondary {
            color: #6c757d; /* Set secondary text color */
        }
    </style>
</head>
<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <!-- Your theme toggle dropdown -->
    </div>

    <main class="form-signin">
        <form>
            <img class="mb-4" src="/images/telkomedika.png" alt="" width="72" height="57">
            <h1 class="h3 mb-4 fw-normal">Personal Information</h1>

            <!-- Form fields -->
            <!-- You can add styling classes and adjust the design of each form field as needed -->

            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" placeholder="masukkan nama lengkap">
                <label for="nama">Masukkan nama lengkap</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" placeholder="masukkan email">
              <label for="email">Masukkan Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="telp" class="form-control" id="telp" placeholder="masukkan no telp">
              <label for="telp">Masukkan nomor telepon</label>
            </div>
            <!-- Add more form fields here (email, phone, card number, NIM, user type) -->
            <div class="form-floating mb-3">
              <input type="kartu" class="form-control" id="kartu" placeholder="no kartu">
              <label for="kartu">Masukkan nomor kartu</label>
            </div>
            <div class="form-floating mb-3">
              <input type="nim" class="form-control" id="nim" placeholder="nim">
              <label for="nim">Masukkan NIM</label>
            </div>
          <div class="form-floating mb-3">
            <select class="form-select" id="user_type" name="user_type">
                <option selected disabled>Pilih Jenis Pengguna</option>
                <option value="1">Admin</option>
                <option value="2">Pasien</option>
            </select>
            <label for="user_type">Jenis Pengguna</label>
        </div>
        
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start mb-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Registrasi</button>

        </form>
    </main>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
