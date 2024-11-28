<form action="{{ url('products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method ('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $product->name }}" required>
    <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" required>
    <input type="number" name="amount" placeholder="Amount" value="{{ $product->amount }}" required>
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <button type="submit">Create Product</button>
</form>