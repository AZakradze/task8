@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add news</div>

                    <div class="card-body">
                        <form action="{{ route('news.store') }}" enctype="multipart/form-data" style="display: grid; justify-content: start; grid-row-gap: 10px" method="Post">
                            @csrf
                            <label style="font-weight: 900" for="">Title</label>
                            <input name="title" type="text">
                            <label style="font-weight: 900" for="">Meta Description</label>
                            <textarea name="sub_desc" id="" cols="15" rows="5"></textarea>
                            <label style="font-weight: 900" for="">Description</label>
                            <textarea name="desc" id="" cols="30" rows="10"></textarea>
                            <label style="font-weight: 900" for="">Image</label>
                            <input type="file" name="image" id="">
                            <label style="font-weight: 900" for="">Date</label>
                            <input type="date" name="added_date" id="">
                            <label for=""style="font-weight: 900">Choose categor</label>
                            <select name="category_id" id="">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                            <button type="submit">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
