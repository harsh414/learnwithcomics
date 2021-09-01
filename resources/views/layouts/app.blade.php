<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous">
    </script>
    <script src="{{asset('js/loopcounter.js')}}"></script>

</head>
<body class="font-sans text-gray-900" x-data="{top:true}" style="background: url('https://res.cloudinary.com/dkerurdbc/image/upload/v1630479365/istockphoto-1006539038-640x640_xqpw6y.jpg');background-size: cover;opacity: 0.9">
<header class="fixed bg-black sm:bg-black z-50 flex flex-col top-0 left-0 right-0 md:flex-row items-center text-white justify-center px-8 py-1
                space-x-10 md:space-x-24"
        :class="{'bg-gray-300 sm:bg-gray-300 md:bg-gray-300 lg:bg-gray-300 ': !top}"
        @scroll.window="top= (window.pageYOffset)>10 ? false : true">
    <a href="{{route('home')}}" class="flex items-center justify-center space-x-2 hover:text-gray-200" style="text-decoration: none">
        <img src="https://res.cloudinary.com/dkerurdbc/image/upload/v1630415089/1630414988297_a8qpdn.png" class="h-20 w-20 md:h-32 md:w-32 rounded-full" alt="">
    </a>
    <div class="flex items-center justify-between">
        <div class="text-3xl md:text-5xl text-white font-extrabold
        " :class="{'text-gray-500': !top}" style="letter-spacing: 7px;">
            NATIONAL COMIC OLYMPICS
        </div>
    </div>
</header>
@yield('content');
</body>
<script type="text/javascript">
    $(document).ready(function (){
        $(function(){
            loopcounter('myCountdown');
        });
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo('#slideshow');
        }, 1000);
    });
    $('body').append('<style>.my_class::placeholder{color:dimgray}</style>');
    $('input').addClass('my_class');
</script>
@yield('scripts')
</html>
