<form action="{{ url('products') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="price" placeholder="Price" required>
    <input type="" name="amount" placeholder="Amount" required>
    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    <button type="submit">Create Product</button>
</form>