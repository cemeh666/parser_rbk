@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <h1>Список новостей</h1>
    <ul class="media-list">
        @foreach($news_list as $news)
            <li class="media">
                <div class="media-body">
                    <h4 class="media-heading">
                        <a @if($news->partners_news) href="{{$news->original_link}}" target="_blank" @else href="/news/{{$news->id}}" @endif>
                            {{$news->title}}
                            @if($news->partners_news) <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> @endif
                        </a>
                    </h4>

                    @if($news->text)
                        {{$news->text}}...
                    @endif

                    <p>
                        <small>
                            {{$news->news_time}}
                        </small>
                    </p>
                </div>
            </li>
        @endforeach
    </ul>

</div>

@endsection