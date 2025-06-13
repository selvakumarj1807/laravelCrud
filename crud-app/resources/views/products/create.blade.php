<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input name="name" placeholder="Product Name" required>
    <input name="price" type="number" placeholder="Product Price" required>
    <textarea name="description" placeholder="Product Description"></textarea>
    <input name="image" type="file" required>
    <button type="submit">Save</button>
</form>