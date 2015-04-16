<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Simple Resources, Tools & Help for Laravel Artisans - Laratisans</title>

    <meta name="description" content="We are the helpers of web builders and want to provide them with open knowledge, resources, tools that will help them build better products.">


    <!-- this code between <header> ... </header> -->
    <!-- <link href="css/bootstrap.min.css?7" media="screen" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">



    <!-- this code directly before </body> -->


    <!-- <link rel="stylesheet" href="{{ asset('assets/flat-ui/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/flat-ui/css/flat-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common-files/css/icon-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/common-files/css/animations.css') }}"> -->


<!-- 
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-header/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-content/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-blog/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-contacts/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-crew/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-price/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-projects/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/ui-kit/ui-kit-footer/css/style.css') }}"> -->




    <noscript>
        <link href="{{ asset('assets/css/skel.css') }}" media="screen" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/style.css') }}" media="screen" rel="stylesheet" type="text/css">
    </noscript>

    <link href="{{ asset('assets/css/custom.css') }}" media="screen" rel="stylesheet" type="text/css">

    


</head>
<body class="landing">


    @include('layouts.navbar')
        
        @yield('content')
    
    @include('layouts.footer')

    
    <!-- this code directly before </body> -->
    <script src="{{ asset('assets/common-files/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('assets/flat-ui/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/page-transitions.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/jquery.svg.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/jquery.svganim.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/jquery.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/common-files/js/startup-kit.js') }}"></script>

    <script src="{{ asset('assets/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>


    <script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollgress.min.js') }}"></script>
    <script src="{{ asset('assets/js/skel.min.js') }}"></script>
    <script src="{{ asset('assets/js/skel-layers.min.js') }}"></script>
    <script src="{{ asset('assets/js/init.js') }}"></script>


    <script>
        smoothScroll.init();

        $(document).ready( function () {

            $('form').ajaxChimp({
                url: $('form').attr('action'),
                callback: checkResult  
            });
        });

        function checkResult (resp) {

            if (resp.result === 'success') 
            {
                $('#mailChimpMsg').text('Thanks for joining us. We add you to our list very soon.').show('slow');
            }
            else
            {
                $('#mailChimpMsg').html('Oops there was an error. Please contact us directly <a href="mailto:hello@laratisans.com" style="color:#FFF;">hello@laratisans.com</a>.').show('slow');
            }
        }



    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61955256-1', 'auto');
      ga('require', 'linkid', 'linkid.js');
      ga('send', 'pageview');

    </script>

    <!-- https://www.flickr.com/photos/twitteroffice/4524718996 -->
    <!-- http://html5up.net/uploads/demos/alpha/ -->
</body>
</html>
