@extends('layouts.app')
@section('css')
@section('content')

        <div class="container-fluid mt-5 main_containe col-sm-10 m-4">
            <div class="card border-primary m-5">
                <div class="card-header bg-primary">
                    <h3 class="fw-bold text-white">Form</h3>
                </div>
                <div class="card-body">
                    <form class="form row m-2" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-sm-12 mb-3">
                            <h3 class="fw-bold p-0 ">Product Form  : </h3>
                        </div>
                        <div class="col-sm-12 p-1">
                            <h5 class="fw-bold">Product Name : </h5>
                            <input type="text" style="width:100%;" class="border rounded p-1" name="pro_name" id="pro_name" value="{{$product->pro_name}}">
                            @error('pro_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 p-1">
                            <h5 class="fw-bold">Product Details : </h4>
                            <textarea name="detail" style="width:100%;" class="border rounded p-1" id="detail">{{$product->detail}}</textarea>
                            @error('detail')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <h5 class="fw-bold">Product Image : </h4>
                            <img src="{{ asset('storage/'.$product->image) }}" width="100" alt="img">
                            <input class="border p-1 rounded" style="width:100%;" type="file" name="image" id="image" >
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 p-2">
                            <h5 class="fw-bold">Status : </h4>
                            <input class="m-1" type="radio" name="status" id="status" value="active"  
                            @if($product->status == 'active')
                            checked
                            @endif >
                            <label class="fw-bold m-1"> Active </label>
                            <input class="radio m-1" type="radio" name="status" id="status" value="deactive"
                            @if($product->status == 'deactive')
                            checked
                            @endif >
                            <label class="fw-bold m-1"> Deactive </label>
                            @error('status')
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