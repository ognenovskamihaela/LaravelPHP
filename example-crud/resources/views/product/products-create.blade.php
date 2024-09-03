<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Enter a New Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.store') }}">
        @csrf
        <div>
            <label for="product_name">Product</label>
            <input type="text" name="product_name" placeholder="Enter a product name">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" placeholder="Enter a price">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Enter a description">
        </div>
        <div>
            <label for="petshop_id">Petshop</label>
            <select name="petshop_id" id="petshop_id" required>
                @foreach ($petshops as $petshop)
                    <option value="{{ $petshop->id }}">
                        {{ $petshop->city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Save Product">
        </div>
    </form>
</body>
</html>
