@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add category</div>

                    <div class="card-body">
                        <form action="{{ route('category.store') }}" style="display: grid; justify-content: start; grid-row-gap: 10px" method="Post">
                            @csrf
                            <label style="font-weight: 900" for="">Title</label>
                            <input name="title" type="text">

                            <button type="submit">Add category</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
