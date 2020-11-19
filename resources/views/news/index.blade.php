@extends('main')
@section('content')
    <h1>Here are all newses for today</h1>
    @foreach($newses as $news)
        <div style="margin: 20px 400px 10px 50px">
            <h1>{{ $news->title }}</h1>
            <img style="width: 400px" src="{{ url('storage/'.$news->image) }}" alt="image">
            <p>{{ $news->sub_desc}}</p>
            <p>{{ $news->desc}}</p>
            <span>Added date: {{ $news->added_date }}</span>
            <br>
            <span>Tags:
                     <ul>
                         @foreach($news->tags as $tag)
                            <li>{{ $tag->title }}</li>
                         @endforeach
                     </ul>
            </span>
            <br>
            <span>Category: {{ $news->category->title }}</span>
            <br>
            <span>Created by: {{ $news->user->name }}</span>
        </div>
    @endforeach
@endsection
