<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>

<a href="{{ route('products.index') }}">Back to List</a>
<a href="{{ route('products.edit', $product->id) }}">Edit Product</a>