<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andres - {{ $title ?? '' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-layouts.navigation />

@if (session())
<div class="status">
    <p class="text-white">
        {{ session('status') }}
    </p>
</div>
@endif

{{ $slot }}

</body>
</html>