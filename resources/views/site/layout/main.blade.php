<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Evénementielle</title>
    @include('site.require.style')
</head>

<body>
    @include('site.require.header')


    @yield('content')

    @include('site.require.footer')
    @include('site.require.script')
</body>

</html>