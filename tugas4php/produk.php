<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Company Profile Product Cards</title>
<style>
  
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

  
    .product-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

  
    .product-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s;
    }

   
    .product-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

   
    .product-card img {
        width: 100%;
        height: auto;
        display: block;
    }

  
    .product-card-content {
        padding: 20px;
    }

  
    .product-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

   
    .product-description {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

   
    .product-price {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }
</style>
</head>
<body>

<div class="product-cards">
    <div class="product-card">
        <img src="https://urbanblisslife.com/wp-content/uploads/2022/06/Crispy-Air-Fryer-Chicken-Wings-Recipe.jpg" alt="Product Image">
        <div class="product-card-content">
            <div class="product-title">Fried Chicken Wings</div>
            <div class="product-description">Ayan goreng bagian sayap</div>
            <div class="product-price">Rp. 15.000</div>
        </div>
    </div>

   
    <div class="product-card">
        <img src="https://carveyourcraving.com/wp-content/uploads/2021/06/chocolate-icecream-in-an-icecream-maker.jpg" alt="Product Image">
        <div class="product-card-content">
            <div class="product-title">Es Krim</div>
            <div class="product-description">Es krim kea biasanyaaa.</div>
            <div class="product-price">Rp. 10.000</div>
        </div>
    </div>

    <div class="product-card">
        <img src="https://www.shutterstock.com/image-photo/classic-hamburger-stock-photo-isolated-600nw-2282033179.jpg" alt="Product Image">
        <div class="product-card-content">
            <div class="product-title">Burger</div>
            <div class="product-description">Burger Seperti Biasanya. Bukan Krabby Patty buatan spongebob</div>
            <div class="product-price">Rp. 30.000</div>
        </div>
    </div>
</div>

</body>
</html>
