@extends('backend.master')
@section('content')
<h1>Create New product</h1>

    <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Enter Product Name:</label>
            <input name="product_name" class="form-control" type="text" placeholder="Enter product name" required>
        </div>

        <div class="form-group">
            <label for="">Enter Product Price:</label>
            <input name="product_price" class="form-control" type="number" placeholder="Enter product price" required>
        </div>

        <div class="form-group">
            <label for="">Select Category:</label>
            <select class="form-control" name="category_id" id="">
                @foreach($categories as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Upload Image</label>
            <input name="product_image" type="file" class="form-control">
       </div>

        <button class="btn btn-success" type="submit">Submit</button>

    </form>


@endsection
