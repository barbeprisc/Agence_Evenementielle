<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Evénementielle</title>
    @include('Pages.require.style')
</head>

<body>
    @include('Pages.require.header')


    @yield('content')

    @include('Pages.require.footer')
    @include('Pages.require.script')
</body>

</html>