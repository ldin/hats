@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:('Arin')) }}
@stop

@section('content')

    <div id="collect">
        
            @if(!empty($type->text) && empty($row))
                <div class="container"> 
                    <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        {{ $type->text }}
                    </div>    
                </div>        
            @endif

            @if(isset($posts)&&count($posts)>0)

                @if(!empty($row->text))
                    <div class="container">
                        {{ $row->text }}
                    </div>    
                @else

                @endif
                @foreach($posts as $post)
                    <!-- текст поста -->
                    <div class="container">
                        <div class="block-post row ">
                            <div class="col-xs-12 col-sm-3 post-logo">
                                @if(!empty($post->image))
                                    {{ HTML::image($post->image, $post->name) }}
                                @endif
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
                    @if(!empty($post->gallery[0]) )
                    <div class="galleries">
                        <div class="container">
                            <div class="row gallery">
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
                            </div>
                            <div class="row text-center gallery-contact">
                                <p>
                                    <a href="#" >Условия поставки</a>
                                    <a href="#" class="btn btn-solid">ЗАКАЗАТЬ КАТАЛОГ</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="container">
                            <div class="row text-center gallery-contact">
                                <p>
                                    <a href="#">Условия поставки</a>
                                    <a href="#" class="btn btn-solid">ЗАКАЗАТЬ КАТАЛОГ</a>
                                </p>
                            </div>
                        </div>
                    @endif    

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
