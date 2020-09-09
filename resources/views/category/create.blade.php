@extends('master')
@section('title','Category Create')
@section('content')
    <div class="container">
        <div class="row ">
            <form action="{{route('category.store')}}" method="post" class="col-sm-8  ">
                @csrf
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input name="name" required type="text" class="form-control" placeholder="Category name">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" rows="4" class="form-control" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                </div>

            </form>
        </div>
    </div>

@endsection
