<h1>Edit Product</h1>

<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input name="name" value="{{ $product->name }}" required>
    <input name="price" type="number" value="{{ $product->price }}" required>
    <textarea name="description">{{ $product->description }}</textarea>
    <input name="image" type="file">
    <img src="{{ asset('storage/' . $product->image) }}" alt="" width="100">
    <button type="submit">Update</button>
</form>