@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:('Arin')) }}
@stop

@section('content')

    <div id="collect">
        
            @if(!empty($type->text) && empty($row))
                <div class="container">
                    {{ $type->text }}
                </div>        
            @endif

            @if(isset($posts)&&count($posts)>0)

                @if(!empty($row->text))
                    <div class="container">
                        {{ $row->text }}
                    </div>    
                @else
<!--                     <div id="brend-line">
                        <div class="container">
                            <ul>
                                <li><a href="#tavitta"><img alt="tavitta" src="/img/collect/collectt_ico_1.png" /></a></li>
                                <li><a href="#gerda"><img alt="gerda" src="/img/collect/collectt_ico_2.png" /></a></li>
                                <li><a href="#estro"><img alt="estro" src="/img/collect/collectt_ico_3.png" /></a></li>
                                <li><a href="#swarovski"><img alt="swarovski" src="/img/collect/collectt_ico_4.png" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-9 col-sm-offset-3 ">
                                <br>
                                <p>У нас можно преобрести</p>
                                <p><strong>оптом, по ценам производителей,</strong></p>
                                <p>женские головные уборы следующих брендов:</p>
                            </div>
                        </div>
                        <hr>
                    </div> -->
                @endif
                @foreach($posts as $post)
                    <!-- текст поста -->
                    <div class="container">
                        <div class="block-post row ">
                            <div class="col-xs-12 col-sm-3 post-logo">
                                {{ HTML::image($post->image, $post->name) }}
                            </div>                    

                            <div class="col-xs-12 col-sm-9 ">
                                <h2>{{$post->name}}</h2>
                                <div id="parts-{{$post->id}}" class="hidden-parts">{{ $post->text }}</div>
                            </div>
    <!--                         <div class="col-xs-2 ">
                                <p class="open-icon"><a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a></p>
                            </div> -->
                        </div>
                    </div>
                    <!-- изображения поста -->
                    <div class="galleries">
                        <div class="container">
                            <div class="row gallery">
                                @if(!empty($post->gallery[0]) )
                                    @foreach($post->gallery as $image)
                                        <div class="col-xs-6 col-sm-3 gallery-cell">
                                            <div class="gallery-image">
                                                <div class="image">
                                                    {{ HTML::image($image->small_image, $image->alt) }}
                                                </div>
                                                <div class="description">
                                                    {{ $image->text }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="row text-center gallery-contact">
                                <!-- <p> Еще</p> -->
                                <p>
                                    <a href="#" class="btn btn-border">Условия поставки</a>
                                    <a href="#" class="btn btn-solid">ЗАКАЗАТЬ КАТАЛОГ</a>
                                </p>
                            </div>
                        </div>
                    </div>    

                @endforeach

            @else
                @if(!empty($row->text))
                    {{ $row->text }}
                @endif
            @endif

    </div>

@stop


@section('scripts')

@stop
