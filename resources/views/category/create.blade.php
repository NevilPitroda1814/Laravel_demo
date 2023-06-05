@extends('layouts.app')
@section('script')

<style>
    label.error{
        color:#dc3545;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){

    $(document).on('click','#submit',(function(e){

        e.preventDefault();

        var cat_name = $('#cat_name').val();
        var sub_cat = $('#sub_cat').val();
        var detail = $('#detail').val();
        var image = $('#image').val();

        $.ajaxSetup({headers:{"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}});
        $.ajax({
            data:{
                cat_name : cat_name,
                sub_cat : sub_cat,
                detail : detail,
                image : image
            },
            url:"{{route('create_category')}}",
            type:"post",
            dataType:"json",
            success: function(){
                alert('Category Created Successfully');
                window.location.href = "{{url('category')}}";
            },
            error: function(){
                alert('Category Not created');
                window.location.reload();
            }
        });
    }));
});

</script>
@endsection('script')
@section('content')
<div class="container-fluid m-3">
    <div class="card border-primary m-5">
        <div class="card-header bg-primary">
            <h3 class="fw-bold text-white">Form</h3>
        </div>
        <div class="card-body">
            @if($action == 'insert')
            <form class="form row m-2" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @else  
            <form class="form row m-2" action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @endif
            @csrf
                <div class="col-sm-12 mb-3">
                    <h3 class="fw-bold p-0 ">Category Form  : </h3>
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Category Name : </h5>
                    <input type="text" style="width:100%;" class="border rounded p-1" name="cat_name" id="cat_name" value="{{ (!empty($category->cat_name)?$category->cat_name:old('cat_name')) }}">
                    @error('cat_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Sub Category : </h5>
                    <input type="text" style="width:100%;" class="border rounded p-1" name="sub_cat" id="sub_cat" value="{{ (!empty($category->sub_cat)?$category->sub_cat:old('sub_cat')) }}" >
                    @error('sub_cat')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Category Details : </h4>
                    <textarea name="detail" style="width:100%;" class="border rounded p-1" id="detail" value="{{ (!empty($category->detail)?$category->detail:old('detail')) }}"></textarea>
                    @error('detail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-6 p-2">
                    <h5 class="fw-bold">Category Image : </h4>
                    @if(!empty($category->image))
                        <img src="{{ asset('storage/'.$category->image) }}" width="100" alt="img">
                    @endif
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