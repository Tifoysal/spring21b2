@extends('backend.master')
@section('content')

    <a class="btn btn-secondary" href="{{route('product.create.form')}}">Create new product</a>

    @if(session()->has('jahid-message'))
        <div class="alert alert-success">
            {{ session()->get('jahid-message') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Price</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>

        @foreach($products as $key=>$product)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>
                <img style="width: 100px;" src="{{url('/files/product/'.$product->image)}}" alt="">
            </td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}} .TK</td>
            <td>{{$product->productCategory->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
