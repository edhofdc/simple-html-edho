<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            width: 100%;
            background: white;
            padding: 15px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
        }
        .navbar h2 {
            margin: 0;
            color: #333;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px;
            transition: 0.3s;
        }
        .menu a:hover {
            color: #6e8efb;
        }
        .container {
            text-align: center;
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin-top: 20px;
            animation: fadeIn 1.5s ease-in-out;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            padding: 20px;
        }
        .product {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 200px;
        }
        .product img {
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            font-size: 18px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h2>Toko Online</h2>
        <div class="menu">
            <a href="#">Home</a>
            <a href="#">Visi Misi</a>
            <a href="#">Produk</a>
            <a href="#">Testimoni</a>
            <a href="#">Contact</a>
        </div>
    </div>
    <div class="container">
        <h1>Selamat Datang di Toko Online Kami</h1>
        <p>Temukan berbagai produk terbaik dengan harga menarik.</p>
    </div>
    <div class="product-list">
        <div class="product">
            <img src="https://em-content.zobj.net/source/microsoft/379/t-shirt_1f455.png" alt="Kaos">
            <h3>Kaos Polos</h3>
            <p>Kaos polos berkualitas tinggi, nyaman dipakai.</p>
        </div>
        <div class="product">
            <img src="https://em-content.zobj.net/source/microsoft/379/jeans_1f456.png" alt="Celana Jeans">
            <h3>Celana Jeans</h3>
            <p>Celana jeans keren dan tahan lama untuk segala acara.</p>
        </div>
        <div class="product">
            <img src="https://em-content.zobj.net/source/microsoft/379/dress_1f457.png" alt="Dress">
            <h3>Dress Wanita</h3>
            <p>Dress elegan dengan bahan nyaman dan stylish.</p>
        </div>
        <div class="product">
            <img src="https://em-content.zobj.net/source/microsoft/379/shopping-bags_1f6cd-fe0f.png" alt="Tas">
            <h3>Tas Trendy</h3>
            <p>Tas stylish untuk melengkapi gaya fashion Anda.</p>
        </div>
    </div>
</body>
</html>
