<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Evénementielle</title>
    @include('require.style')
</head>

<body>
    @include('require.header')


    @yield('content')

    @include('require.footer')
    @include('require.script')
</body>

</html>