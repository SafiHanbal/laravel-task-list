<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Task List</title>

    <style type="text/tailwindcss">
        .link {
            @apply block text-lg text-slate-700 mb-1;
        }

        .btn {
            @apply inline-block mb-3 px-2 py-1 bg-slate-300 border-slate-500 rounded shadow;
        }

        .input-container {
            @apply mb-3;
        }

        .label {
            @apply block;
        }

        .input {
            @apply block w-full px-2 py-1 border-solid border-slate-700 border-2 bg-slate-100 rounded outline-0;
        }

        .error-message {
            @apply text-red-500 text-sm
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container max-w-screen-lg mx-auto py-4">
        <h1 class="font-serif text-3xl mb-3">
            @yield('title')
        </h1>

        @yield('content')
    </div>
</body>

</html>
