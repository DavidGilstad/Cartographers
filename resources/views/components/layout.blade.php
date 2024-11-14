<!doctype html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartographers</title>
</head>
<body class="bg-black text-white pb-20">
<div class="px-10">
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
