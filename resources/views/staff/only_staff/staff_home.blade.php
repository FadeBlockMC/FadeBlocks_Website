<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>    @include('header_footer.header')
</header>
<body>
    <main class="container mx-auto px-4 py-8">
        <section class="mb-12">
            <h2 class="text-3xl font-bold text-white">Staff Rules</h2>
            <p class="text-sm text-gray-400 mt-1">Updated: 1/1/25</p>
            <p class="text-gray-300 mt-4">Please read through the rules carefully to ensure your account does not violate any of the rules listed below.</p>
            <a href="{{ url('/staff/rules') }}" class="text-yellow-400 font-bold mt-4 inline-block">CLICK HERE TO VIEW RULES</a>
            <hr class="border-gray-700 my-6">
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-bold text-white">Staff Punishments</h2>
            <p class="text-sm text-gray-400 mt-1">Updated: 1/1/25</p>
            <p class="text-gray-300 mt-4">Please read through the rules carefully to ensure your account does not violate any of the rules listed below.</p>
            <a href="{{ url('/staff/punishments') }}" class="text-yellow-400 font-bold mt-4 inline-block">CLICK HERE TO VIEW RULES</a>
            <hr class="border-gray-700 my-6">
        </section>
</body>
</html>