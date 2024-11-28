@foreach($products as $entity)
    <div>
        <img src="{{ asset($product->imagem) }}" alt="{{ $product->name }}">
        <h3>{{ $entity->name }}</h3>
        <p>{{ $entity->price }}</p>
        <p>{{ $entity->amount }}</p>
        <a href="{{ url('products/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('products/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach