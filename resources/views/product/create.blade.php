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

        var pro_name = $('#pro_name').val();
        var category = $('#category').val();
        var detail = $('#detail').val();
        var image = $('#image').val();
        var status = $('.status').val();

        $.ajaxSetup({headers:{"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")}});
        $.ajax({
            data:{
                pro_name : pro_name,
                category : category,
                detail : detail,
                image : image,
                status : status
            },
            url:"{{route('create_product')}}",
            type:"post",
            dataType:"json",
            success: function(){
                alert('Product Created Successfully');
                window.location.href = "{{url('product')}}";
            },
            error: function(){
                alert('Product Not created');
                window.location.reload();
            }
        });
    }));
});

</script>
@endsection('script')
@section('content')
<div class="container-fluid mt-5">
    <div class="card border-primary m-5">
        <div class="card-header bg-primary">
            <h3 class="fw-bold text-white">Form</h3>
        </div>
        <div class="card-body">
            <!-- @if($action == 'insert')
            <form class="form row m-2" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @else
            <form class="form row m-2" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @method('PUT') -->
            <!-- @endif
            @csrf -->
            <form class="form row m-2" id="product_create">
                <div class="col-sm-12 mb-3">
                    <h3 class="fw-bold p-0 ">Product Form  : </h3>
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Product Name : </h5>
                    <input type="text" style="width:100%;" class="border rounded p-1" name="pro_name" id="pro_name" value="{{ (!empty($product->pro_name)?$product->pro_name:old('pro_name')) }}">
                    @error('pro_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <h5 class="fw-bold">category : </h5>
                    <select name="category" id="category">
                        @foreach($category as $key=>$value)
                            <option value="{{$value->id}}">{{$value->cat_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-12 p-1">
                    <h5 class="fw-bold">Product Details : </h4>
                    <textarea name="detail" style="width:100%;" class="border rounded p-1" id="detail">{{ (!empty($product->detail)?$product->detail:old('detail')) }}</textarea>
                    @error('detail')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-6 p-2">
                    <h5 class="fw-bold">Product Image : </h4>
                    @if(!empty($product->image))
                        <img src="{{ asset('storage/'.$product->image) }}" width="100" alt="img">
                    @endif
                    <input class="border p-1 rounded" style="width:100%;" type="file" name="image" id="image" >
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-6 p-2">
                    <h5 class="fw-bold">Status : </h4>
                    <input class="status m-1" type="radio" name="status"  value="active"             
                    @if(!empty($product->status))
                        {{($product->status == 'active')?  'checked': ''}}
                    @endif>
                    <label class="fw-bold m-1"> Active </label>
                    <input class="status radio m-1" type="radio" name="status" value="deactive"
                    @if(!empty($product->status))
                        {{($product->status == 'deactive')?'checked':''}}
                    @endif>
                    <label class="fw-bold m-1"> Deactive </label>
                    @error('status')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-sm-12 p-2">
                    <input class="btn btn-outline-primary fw-bold" id="submit"  type="button" value="Submit" >
                </div>
            </form>
        </div>
    </div>
</div>
@endsection