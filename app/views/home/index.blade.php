@extends('home.layout')

@section('title') Arin @stop

@section('header')

@stop

@section('content')

    <section id="slider">
        <div class="container">
            <div class="row head-slide">
                <div class="col-sm-4 col-xs-12 left-block">
                    <p class="title">
                        Готовимся к сезону:
                    </p>
                    <p class="title">
                        <small>осень\зима 2015</small>  
                    </p>
                    <p class="text-center">
                        Что нового в этом году?
                    </p>
                    <div class="text-center">
                        <a href="#" class="btn btn-solid">Заказать каталог</a>
                    </div>                  
                </div>
                <div class="col-sm-8 col-xs-12 right-block" >
                    <div class="block">
                        <div class=" text-center">
                            <p class="top-line">Вспоминаем модели прошлых сезонов</p>
                        </div>
                        <div class="">
                            <!--                                
                            <div class="col-xs-4 slide">
                                    <img src="img/slider/top-face1.jpg" alt="">
                                    <p>TAVITTA - 2013</p>
                            </div>
                            <div class="col-xs-4 slide">
                                    <img src="img/slider/top-face2.jpg" alt="">
                                    <p>Brend2 - 2013</p>
                            </div>  
                            <div class="col-xs-4 slide">
                                    <img src="img/slider/top-face3.jpg" alt="">
                                    <p>TAVITTA - 2013</p>
                            </div> -->  

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <!-- <img src="..." alt="..."> -->
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face1.jpg" alt="">
                            <p>TAVITTA - 2013</p>
                    </div>
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face2.jpg" alt="">
                            <p>Brend2 - 2013</p>
                    </div>  
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face3.jpg" alt="">
                            <p>TAVITTA - 2013</p>
                    </div>      
              <div class="carousel-caption">
                ...
              </div>
            </div>
            <div class="item">
              <!-- <img src="..." alt="..."> -->
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face2.jpg" alt="">
                            <p>TAVITTA - 2013</p>
                    </div>
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face3.jpg" alt="">
                            <p>Brend2 - 2013</p>
                    </div>  
                    <div class="col-xs-4 slide">
                            <img src="img/slider/top-face1.jpg" alt="">
                            <p>TAVITTA - 2013</p>
                    </div>      
              <div class="carousel-caption">
                ...
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
            
        </div>
    </section> <!-- /#slider -->

    <hr class="style">

    <section id="we-service">
        <div class="container ">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-4 col-xs-12">
                    <h1>Arin-shapeau</h1>
                    <p>Коллекция детских и женских вязанных шапок<br> для оптовых покупателей</p>
                </div>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /#we-service -->

    <section id="top-pages">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="block">
                        <div class="image part col-xs-12 col-sm-6 ">
                            <img src="img/pages/news-img01.jpg">
                        </div>
                        <div class="description part col-xs-12 col-sm-6">
                            <p>
                                Следствие: бесконечно малая величина осмысленно нейтрализует график функции многих переменных. Аффинное преобразование не критично. Используя таблицу интегралов элементарных функций, получим: асимптота вырождена. Комплексное число, следовательно, уравновешивает комплексный двойной интеграл. 
                            </p>
                            <a href="#" class="btn btn-solid">подробнее</a>
                        </div>
                        <div class="title part col-xs-12 col-sm-6">
                            <h2>Шерсть новозеландской овцы</h2>
                            <p>В детских изделиях сезона</p>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="block">
                        <div class="image part col-xs-12 col-sm-6">
                            <img src="img/pages/news-img02.jpg">
                        </div>
                        <div class="description part col-xs-12 col-sm-6">
                            <p>
                                Комплексное число, следовательно, уравновешивает комплексный двойной интеграл. Максимум охватывает линейно зависимый интеграл от функции, обращающейся в бесконечность вдоль линии, что неудивительно. Аксиома соответствует натуральный логарифм.                              
                            </p>
                            <a href="#" class="btn btn-solid">подробнее</a>
                        </div>
                        <div class="title part col-xs-12 col-sm-6">
                            <h2>Свободный стиль- </h2>
                            <p>тренд сезона Осень-Зима 2015 г</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="block">
                        <div class="image part col-xs-12 col-sm-6">
                            <img src="img/pages/news-img03.jpg">
                        </div>
                        <div class="description part col-xs-12 col-sm-6">
                            <p>
                                Поэтому теорема Гаусса - Остроградского проецирует изоморфный интеграл по бесконечной области. Матожидание необходимо и достаточно. Дивергенция векторного поля, как следует из вышесказанного, определяет экспериментальный функциональный анализ.
                            </p>
                            <a href="#" class="btn btn-solid">подробнее</a>
                        </div>                          
                        <div class="title part col-xs-12 col-sm-6">
                            <h2>Свободный стиль - </h2>
                            <p>тренд сезона Осень-Зима 2015 г</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="block">
                        <div class="image part col-xs-12 col-sm-6">
                            <img src="img/pages/news-img04.jpg">
                        </div>
                        <div class="description part col-xs-12 col-sm-6">
                            <p>
                                Интересно отметить, что иррациональное число притягивает интеграл Фурье. Частная производная детерменирована. Натуральный логарифм, исключая очевидный случай, синхронизирует график функции многих переменных, что несомненно приведет нас к истине. Тройной интеграл является следствием. Итак, ясно, что связное множество нейтрализует интеграл от функции, обращающейся в бесконечность в изолированной точке.                             
                            </p>
                            <a href="#" class="btn btn-solid">подробнее</a>
                        </div>
                        <div class="title part col-xs-12 col-sm-6">
                            <h2>Ключевое слово</h2>
                            <p>важной текущей новости</p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
            <div class="row text-center">
                <a href="#" class="btn btn-border">Все новости</a>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /#top-pages -->

    <section id="advice">
        <div class="container">
            <h2 class="text-center">Советы нашим клиентам</h2>
            <div class="row">
                <div class="col-xs-6 col-sm-3 block">
                    <p>
                        <em>Информация по уходу</em> за изделиями для покупателей
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 block">
                    <p>
                        Текст, <em>ключевое слово</em>, и дальнейшая формулировка вопроса?
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 block">
                    <p>
                        Как стать нашим партнером и <em>заказать каталог</em>?
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 block">
                    <p>
                        Как <em>сделать заказ</em> на оптовую закупку из наших коллекций?
                    </p>
                </div>
            </div> <!-- /.row -->
            <div class="row text-center">
                <a href="#" class="btn btn-border">Все новости</a>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /#advice -->


@stop

@section('scripts')

@stop