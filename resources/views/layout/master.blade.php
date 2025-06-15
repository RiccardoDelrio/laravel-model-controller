<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield(section: "title")</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include ('partials.header')
    @yield("content")
</body>

</html>