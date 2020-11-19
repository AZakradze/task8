@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="display: grid; grid-template-columns: auto auto; justify-content: space-between">
                        <a href="{{ route('news.create') }}"> Create news </a>
                        <a href="{{ route('category.create') }}"> Create new category </a>
                    </div>
                        <div style="display: grid; grid-template-columns: auto auto; justify-content: space-between">
                            <div>
                                @foreach($newses as $news)
                                    <h4>{{ $news->title }}</h4>
                                    <div>
                                        <label for="">Tags</label>
                                        <ul>
                                            @foreach($news->tags as $tag)
                                                <li>{{ $tag->title }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <label for="">Add tags</label>
                                    <form action="{{ route('tag.store', ['news' => $news]) }}" method="Post">
                                        @csrf
                                        <input type="text" name="title">
                                        <button type="submit">Add</button>
                                    </form>
                                @endforeach
                            </div>
                            <div>
                                @foreach($categories as $category)
                                    <h4>{{ $category->title }}</h4>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
