<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/styles.css?0002" rel="stylesheet">

  <!-- <link href="http://allfont.ru/allfont.css?fonts=birchctt" rel="stylesheet" type="text/css" /> -->

    @yield('header')

 </head>

<body>
    <div class="wrapper">
        <header id="top-site">
            <div class="container top-block">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-sm-offset-2 main-logo">
                        <a href="/">
                            <img src="/img/logo_arin.png">
                        </a>
                    </div>
                    <div class="col-sm-7 col-xs-12 ">
                        <div class="row">           
                            <div class="block-contact"> 
                                <p><a href=""><i class="picto picto-phone"></i><span> +9(495)3216547</span></a> </p>
                                <p><a href=""><i class="picto picto-mail"></i><span> Написать письмо</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        

        <hr class="style">

        <div id="main-menu">
            <div class="container">
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
                      <ul class="nav navbar-nav">
                        @if(isset($type_page))
                            @foreach($type_page as$type=>$page)
                                <li {{ (Request::is($type.'*')) ? 'class="active"' : '' }}>{{HTML::link($type, $page)}}</li>
                            @endforeach
                        @endif
                      </ul>
                    </div> <!-- /.navbar-collapse -->
                </nav> 
            </div>                     
        </div>

        </header>
                        
        <main>

            @yield('content')

        </main>

    </div>


    <footer>
        <div class="text-center">
            <a href="#top-site" class="totop"></a>
        </div>
        <hr class="style">
        <div class="linegray">
            <div class="container text-center">
                @if(isset($type_page))
                    @foreach($type_page as$type=>$page)
                        {{HTML::link($type, $page, array('class'=>'menu-item'))}}
                    @endforeach
                @endif                
            </div>
        </div>
        <div class="footer-bg">
            <div class="container">
                <div class="row">
                    <div class='col-xs-12 col-sm-6 left-block'>
                        <div class='col-xs-12 col-md-6 main-logo'>
                            <a href="/">
                                <img src="/img/logo_arin.png">
                            </a>
                        </div>
                        <div class='col-xs-12 col-md-6'>
                            <p>Поставки лучших головных уборов из качественных экологических
                            материалов по ценам произвоодителей</p>
                        </div>
                    </div>
                    <div id="formRequest" class='col-xs-12 col-sm-6'>

                        @if(Session::has('message_sent'))
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          {{ Session::get('message_sent') }}
                        </div>
                        @else
                            @if(Session::has('message_error'))
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                              {{ Session::get('message_error') }}
                            </div>
                            @endif

                            <p>Что бы заказать каталоги или задать вопрос,<br> <b>заполните форму</b></p>
                            <form method="POST" action="/form-request"  role="form">
                                <div class="row">
                                    <div class="col-xs-5 input-block">
                                        <div class="form-group">
                                            <label for="inputName" class="sr-only">Имя</label>
                                            <input type="text" name="name" class="" id="inputName" placeholder="Ваше имя" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputPhohe" class="sr-only">Телефон</label>
                                            <input type="phone" name="phone" class="" id="inputPhohe" placeholder="Ваш телефон" >
                                          </div>
                                          <div class="form-group">
                                            <label for="inputEmail" class="sr-only">Email</label>
                                            <input type="email" name="email" class="" id="inputEmail" placeholder="Ваш e-mail" required>
                                          </div>
                                          
                                    </div>
                                    <div class="col-xs-7 input-block">
                                          <div class="form-group">
                                            <label for="inputQuestion" class="sr-only">Ваше обращение</label>
                                            <textarea name="text" class="" id="inputQuestion" placeholder="Ваш вопрос" rows='4' required></textarea>
                                          </div>     

                                    </div>

                                </div>
                                <div class="row text-right">
                                    <button type="submit" class="btn btn-solid">Отправить</button>
                                </div>
                            </form> 
                        @endif                       
                    </div>
                </div>
            </div> <!-- /.container -->
        </div>    
        <div class="linegray">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>2015 Arin-shapeau</p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p>Тел:<a href="tel:+74951237654"> 8(495) 1237654</a></p>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <p>mail:<a href="mailto:arin@hapeau.mail"> arin@hapeau.mail</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

{{ HTML::script('/js/jquery-1.11.3.min.js') }}
{{ HTML::script('/js/bootstrap.min.js') }}
{{ HTML::script('/js/main.js') }}
@yield('scripts')

</body>

</html>
