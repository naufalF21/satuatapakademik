<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body class="bg-base-white font-poppins">
    <div class="flex flex-col text-base">
        <x-navbar />
        <div>
            @yield('content')
        </div>
        @include('includes.footer')
    </div>

</body>

</html>
