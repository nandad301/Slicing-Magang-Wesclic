<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'UMY Tracer Study' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .menu-icon { display: none; }
        @media (max-width: 768px) {
            .menu-icon { display: block; }
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">
    @include('components.navbar')

    {{ $slot }}

    @include('components.footer')
</body>
</html>
