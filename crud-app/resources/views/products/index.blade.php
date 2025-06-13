<h1>Product List</h1>
<a href="{{ route('products.create') }}">Add Product</a>

<ul>
    @foreach ($products as $product)
    <li>{{ $product->name }} - {{ $product->price }}
        <a href="{{ route('products.show',$product->id) }}">View</a>
        <a href="{{ route('products.edit',$product->id) }}">Edit</a>
        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>