<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="{{ asset('assets/alquran.png') }}" type="image/jpg" />

    <title>Al-Qur'an API | Documentation by Faisol Arifin</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/syntax-highlighter/styles/shCore.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/syntax-highlighter/styles/shThemeRDark.css') }}" media="all">

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            window.scrollTo({ top: 0, behavior: 'smooth' })
            document.documentElement.scrollTo({ top: 0, behavior: 'smooth' })
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector('#mode').addEventListener('click',()=>{
                document.querySelector('html').classList.toggle('dark');
            })
        });
    </script>

    @yield('content')
    
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/retina.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/syntax-highlighter/scripts/shCore.js') }}"></script>
    <script src="{{ asset('assets/js/syntax-highlighter/scripts/shBrushXml.js') }}"></script>
    <script src="{{ asset('assets/js/syntax-highlighter/scripts/shBrushCss.js') }}"></script>
    <script src="{{ asset('assets/js/syntax-highlighter/scripts/shBrushJScript.js') }}"></script>

</body>

</html>
