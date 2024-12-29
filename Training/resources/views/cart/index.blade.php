<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>
<body>
    <h1>My Cart</h1>
    <div>
        @foreach ($cartItems as $item)
            <div class="cart-item">
                <h2>{{ $item->mentor->name }}</h2>
                <p>{{ $item->mentor->subject }}</p>
                <p>Price: ${{ $item->mentor->price }}</p>
                <p>Quantity: {{ $item->quantity }}</p>
                <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach
    </div>
    <a href="{{ route('payment.checkout') }}">Proceed to Checkout</a>
</body>
</html>