@extends('layouts.app')
@section('content')
<div class="container-fluid  main_containe col-sm-10">
    <div class="card border-primary m-3">
        <div class="card-header bg-primary">
            <h3 class="fw-bold text-white">Form</h3>
        </div>
        <div class="card-body">
            <form class="form row m-2" action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-sm-12 mb-3">
                    <h3 class="fw-bold p-0 ">Category Form  : </h3>
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Category Name : </h5>
                    <input type="text" style="width:100%;" class="border rounded p-1" name="cat_name" id="cat_name" value="{{$category->cat_name}}">
                    @error('cat_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Sub Category : </h5>
                    <input type="text" style="width:100%;" class="border rounded p-1" name="sub_cat" id="sub_cat" value="{{$category->sub_cat}}">
                    @error('sub_cat')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Category Details : </h4>
                    <textarea name="detail" style="width:100%;" class="border rounded p-1" id="detail">{{$category->detail}}</textarea>
                    @error('detail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-6 p-2">
                    <h5 class="fw-bold">Category Image : </h4>
                    <img src="{{asset('storage/'.$category->image)}}" width="50" alt="">
                    <input class="border p-1 rounded" style="width:100%;" type="file" name="image" id="image">
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-2">
                    <input class="btn btn-outline-primary fw-bold" type="submit" value="Submit" >
                </div>
            </form>
        </div>
    </div>
</div>
@endsection