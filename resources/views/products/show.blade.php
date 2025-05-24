<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $product['name'] }}</h1>
    <p><strong>Harga:</strong> Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
    <a href="{{ url('/products') }}">← Kembali ke daftar produk</a>
</body>
</html>
