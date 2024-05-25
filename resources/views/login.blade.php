<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
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
            background-color: #6c757d; /* Set button background color */
            border-color: #6c757d; /* Set button border color */
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #b6252a; /* Set button hover color */
            border-color: #b6252a; /* Set button hover border color */
        }

        .text-body-secondary {
            color: #6c757d; /* Set secondary text color */
        }

        .custom-card {
            max-width: 800px; /* Set card width */
            margin: auto; /* Center the card */
        }

        .custom-form {
            max-width: 600px; /* Set form width */
            margin: auto; /* Center the form */
        }

        .custom-form img {
            display: block; /* Center the image */
            margin: 0 auto 1.5rem; /* Center the image with margin bottom */
        }

        .custom-form h1 {
            text-align: center; /* Center the heading */
            margin-bottom: 1.5rem; /* Add margin bottom */
        }
    </style>
</head>
<body>
    <section class="bg-red-700 flex items-center justify-center h-screen"> <!-- Override Tailwind background color -->
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">

            </div>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 custom-card">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8 custom-form">
                    <img class="mb-4" src="/images/telkomedika.png" alt="" width="72" height="57">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                       Welcome Back
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="post" action="{{ route('login.action') }}">
                        @csrf
                        @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Error!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li><span class="block sm:inline">{{ $error }}</span></li>
                                @endforeach
                            </ul>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>
                        @endif
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Sign in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
