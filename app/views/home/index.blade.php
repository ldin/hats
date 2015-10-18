@extends('home.layout')

@section('title') {{ !empty($settings['title'])?$settings['title']:'Arin-shapeau' }} @stop

@section('header')

@stop

@section('content')

    <section id="slider">

        <div id="snowflake" class="text-center">
            <img src="/img/bg/snow-1.png" class="parallax-layer" >
            <img src="/img/bg/snow-2.png" class="parallax-layer">        
        </div>

        <div class="container text-slide-block">
            <div class="row head-slide">
                <div class="col-md-4 col-xs-12 left-block">
                    <p class="title">
                        <span>Осень\Зима 2015</span>
                    </p>
                    <p class="title">
                        ТЕПЛО, УЮТ И ЭСТЕТИЧЕСКОЕ СОВЕРШЕНСТВО  
                    </p>
                    <p>
                        трикотажных головных уборов для женщин и детей
                    </p>
                    <div>
                        <a href="#formRequest" class="btn btn-border">ЗАКАЗАТЬ КАТАЛОГ</a>
                    </div>                  
                </div>
                <div class="col-md-8 col-xs-12 right-block" >
                    <div class="block">
                        <div class=" text-center col-xs-12">
                            <p class="top-line">Вспоминаем модели прошлых сезонов</p>
                        </div>
                        <div class="col-xs-12">
                            <div id="carusel" class="scroll-img">
                                @if(!empty($slides))
                                    <ul>
                                        @foreach($slides as $slide)
                                            <li>
                                                    {{HTML::image($slide->image, $slide->name)}}
                                                    <p class="title">{{$slide->name}}</p>
                                            </li>                                            
                                        @endforeach
                                    </ul>
                                @endif
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
                @if(!empty($news))
                    @foreach($news as $post)
                        <div class="col-xs-12 col-md-6">
                            <div class="block">
                                <div class="image part col-xs-12 col-sm-6 ">
                                    {{ HTML::image($post->image, $post->name) }}
                                </div>
                                <div class="description part col-xs-12 col-sm-6">
                                    <p>
                                        {{$post->preview_text}}
                                    </p>
                                    <a href="/news/{{$post->slug}}" class="btn btn-solid">подробнее</a>
                                </div>
                                <div class="title part col-xs-12 col-sm-6">
                                    <h2>{{$post->name}}</h2>
                                    <!-- <p></p> -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="row text-center block-btn">
                <a href="/news" class="btn btn-border">Все новости</a>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /#top-pages -->

    <section id="advice">
        <div class="container">
            <h2 class="text-center">Уход за изделиями</h2>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-sm-6 block">
                    <div class="block-hover">
                        <div class="title">
                            <img src="/img/other/info-bar1.png" alt="изделия TAVITTA">
                            <p>
                                Рекомендации по уходу за изделиями  TAVITTA 
                            </p>
                        </div>
                        <div class="description">
                            <p>При производстве изделий используется дорогая качественная фурнитура и натуральные материалы. 
                                Им необходим особо бережный уход или химчистка в специальных пунктах для чистки изделий из шерсти и меха.
                            </p>
                            <!-- <a href="#" class="btn btn-solid">подробнее</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 block">
                    <div class="block-hover">
                        <div class="title">
                            <img src="/img/other/info-bar2.png" alt="Cтирка и полоскание">
                            <p>
                                <em>Cтирка и полоскание</em> шерстяных изделий
                            </p>
                        </div>
                        <div class="description">
                            <p>
                                Рекомендуйте вашим покупателям стирать вязаные шерстяные изделия отдельно от другой одежды, без замачивания, при невысокой температуре с использованием специальных моющих средств для стирки шерстяных изделий.
                            </p>
                            <!-- <a href="#" class="btn btn-solid">подробнее</a> -->
                        </div>
                    </div>    
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 block">
                    <div class="block-hover">
                        <div class="title">
                            <img src="/img/other/info-bar3.png" alt="Сушка и глаженье">
                            <p>
                                <em>Сушка и глаженье</em> шерстяных изделий
                            </p>
                        </div>
                        <div class="description">
                            <p>Следует завернуть изделие в полотенце и слегка отжать до полусухого состояния; сушить при комнатной t ̊ на ровной поверхности.
                                Высушенные изделия можно обработать паром, если на них нет декоративных и  рельефных элементов.</p>
                            <!-- <a href="#" class="btn btn-solid">подробнее</a> -->
                        </div> 
                    </div>       
                </div>
                <div class="col-xs-12 col-md-3 col-sm-6 block">
                    <div class="block-hover">
                        <div class="title">
                            <img src="/img/other/info-bar4.png" alt="Не рекомендуемые действия">
                            <p>
                                <em>Не рекомендуемые</em><br> действия
                            </p>
                        </div>
                        <div class="description">
                            <p>
                                <em>Нельзя</em> резко менять температуру воды при стирке и полоскании, надолго замачивать вязаное изделие и сыпать на него стиральный порошок; тереть, растягивать, выжимать;
                                вешать только что выстиранный трикотаж, сушить около радиатора, под солнечными лучами, в сушильной машине.
                            </p>
                            <!-- <a href="#" class="btn btn-solid">подробнее</a> -->
                        </div> 
                    </div>        
                </div>
            </div> <!-- /.row -->
            <div class="row text-center block-btn">
                <a href="/advice_consumers" class="btn btn-border">Все рекомендации</a>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /#advice -->


@stop

@section('scripts')
    <script src="/js/jquery.parallax.js"></script>
    <script src="/js/jquery.scrollbox.min.js"></script>
    <script type="text/javascript">
    
        jQuery(document).ready(function(){
            //parallax
            // Declare parallax on layers
            jQuery('.parallax-layer').parallax(
                { mouseport: jQuery("#slider") },            // Options
                { xparallax: '20px',    yparallax: '20px', xorigin:0.5, yorigin:0, frameDuration:1 },      // Layer 1
                { xparallax: '100px',   yparallax: '100px', xorigin:0.5, yorigin:0, frameDuration:1}     // Layer 2
            );

            //scrollbox
            $('#carusel').scrollbox({
              direction: 'h',
              distance: 220,
              delay:4,
              speed: 20,
              linear:true
            });
            // $('#carusel-backward').click(function () {
            //   $('#demo5').trigger('backward');
            // });
            // $('#carusel-forward').click(function () {
            //   $('#demo5').trigger('forward');
            // });


        });

    </script>
    

@stop
