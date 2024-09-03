<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('product.products-update', ['product' => $product]) }}">
        @csrf
        @method('put')
        <div>
            <label for="product_name">Product</label>
            <input type="text" name="product_name" value="{{ $product->product_name }}" placeholder="Enter a product name">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" value="{{ $product->price }}" placeholder="Enter a price">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ $product->description }}" placeholder="Enter a description">
        </div>
        <div>
            <label for="petshop_id">Petshop</label>
            <select name="petshop_id" id="petshop_id" required>
                @foreach ($petshops as $petshop)
                    <option value="{{ $petshop->id }}" {{ $petshop->id == $product->petshop_id ? 'selected' : '' }}>
                        {{ $petshop->city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Update Product">
        </div>
    </form>
</body>
</html>
