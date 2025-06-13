<h1>Edit Product</h1>

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input name="name" value="{{ $product->name }}" required>
    <input name="price" type="number" value="{{ $product->price }}" required>
    <textarea name="description">{{ $product->description }}</textarea>

    <button type="submit">Update</button>
</form>
