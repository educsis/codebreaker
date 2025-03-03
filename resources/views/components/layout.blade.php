<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codebreaker</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        body {
            background-image: radial-gradient(circle at 15% -3%,#365280,#080e17 116%)
        }
    </style>
</head>
    <body class="pt-8  text-white print:bg-white print:text-black grid place-items-center h-full">
        {{ $slot }}
    </body>
</html>
