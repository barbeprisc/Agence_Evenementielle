<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.require.css')
</head>

<body>
    @include('admin.require.header')

    @include('admin.require.aside')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                @yield('content')


            </div>
        </section>

    </main><!-- End #main -->
    @include('admin.require.footer')
    @include('admin.require.script')
</body>

</html>