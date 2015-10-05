@extends('home.layout')

@section('title')
    {{ !empty($row->title)? $row->title:(!empty($type->title)? $type->title:'') }}
@stop

@section('content')

    <div id="content" class="container">

    <div class="row breadcrumbs">
        
        <span class="loc page" data-link="/">Главная </span>
        @if(!empty($type->name))
            <span class="loc page" data-link="/{{$type->type}}"> > {{ $type->name }} </span>
        @endif
        @if(!empty($row->parent_title))
            <span class="loc page" data-link="/{{$row->parent_slug}}"> > {{ $row->parent_title }} </span>
        @endif
        @if(!empty($row->name))
            <span class="loc page" data-link="/{{$row->slug}}"> > {{ $row->name }} </span>
        @endif

    </div>

    <div class="row row-content">

        <div class="col-xs-12 col-sm-6 col-sm-offset-3">



            @if(!empty($type->text) && empty($row))
                {{ $type->text }}
            @endif

            @if(isset($posts)&&count($posts)>0)
               
                @foreach($posts as $post)

                    <div id="parts-{{$post->id}}" class="hidden-parts">{{ $post->text }}</div>
    <!--                         <div class="col-xs-2 ">
                                <p class="open-icon"><a href="#" class="img-circle circle" onclick="diplay_hide('#parts-{{$post->id}}', this);return false;"><i class="glyphicon glyphicon-menu-down"></i></a></p>
                            </div> -->
                    <hr>

                @endforeach               

            @endif
        </div>

    </div>


    </div>

@stop


@section('scripts')

@stop
