<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <div>
        @foreach ($cartItems as $item)
            <div>
                <h2>{{ $item->mentor->name }}</h2>
                <p>Price: ${{ $item->mentor->price }}</p>
                <p>Quantity: {{ $item->quantity }}</p>
                <p>Subtotal: ${{ $item->mentor->price * $item->quantity }}</p>
            </div>
        @endforeach
    </div>
    <h2>Total: ${{ $total }}</h2>
    <form action="{{ route('payment.store') }}" method="POST">
        @csrf
        <label for="name_on_card">Name on Card:</label>
        <input type="text" name="name_on_card" id="name_on_card" required>
        <br>
        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" id="card_number" required maxlength="16">
        <br>
        <input type="hidden" name="total" value="{{ $total }}">
        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
