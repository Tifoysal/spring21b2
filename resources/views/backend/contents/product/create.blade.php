@extends('backend.master')
@section('content')


    <form action="{{route('product.create')}}" method="post">
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
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <button class="btn btn-success" type="submit">Submit</button>

    </form>


@endsection
