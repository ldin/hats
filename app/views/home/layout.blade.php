<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css?0001" rel="stylesheet">

    @yield('header')

 </head>

<body>
    <div class="wrapper">
        <header>
            <div class="container top-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-2 main-logo">
                        <a href="/">
                            <img src="img/logo_arin.png">
                        </a>
                    </div>
                    <div class="col-sm-7 col-xs-12 ">
                        <div class="row">           
                            <div class="block-contact"> 
                                <p><a href=""><i class="picto picto-mail"></i><span> +9(495)3216547</span></a> </p>
                                <p><a href=""><i class="picto picto-phone"></i><span> Написать письмо</span></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <nav class="navbar ">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="navbar-main-menu">
                                  <ul class="nav navbar-nav navbar-right">
                                    @if(isset($type_page))
                                        @foreach($type_page as$type=>$page)
                                            <li {{ (Request::is($type.'*')) ? 'class="active"' : '' }}>{{HTML::link($type, $page)}}</li>
                                        @endforeach
                                    @endif
                                  </ul>
                                </div><!-- /.navbar-collapse -->
                            </nav>                      
                        </div>
                    </div>
                </div>
            </div>
            
        </header>

        <hr class="style">

        <main>

            @yield('content')

        </main>

    </div>

    
    <footer>
    <hr class="style">
        <div class="container">
            <div class="row">
                <p>Footer</p>
            </div>
        </div>
    </footer>

{{ HTML::script('/js/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/bootstrap.min.js') }}
{{ HTML::script('/js/main.js') }}
@yield('scripts')

</body>

</html>
