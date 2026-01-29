<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/products_page_style.css')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Products</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="{{asset('images/logo_2_img.png')}}" alt="logo">
        </div>
        <div class="menu">
            <a class="menu-link" href="http://">Home</a>
            <a class="menu-link" href="http://">Products</a>
            <a class="menu-link" href="http://">About</a>
            <a class="menu-link" href="http://">Contact</a>
        </div>
        <div class="search-bar">
            <form action="">
                <input type="text" placeholder="Search" name=""search>
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

    

    <div class="page-title">
        <h1>All Products</h1>
        <p>Explore our collection</p>
    </div>

    <div class="products">
        <div class="products-list">

            
            <div class="product-card">
           
                <img src="{{asset('images/shoes_2.png')}}" alt="Product 1">
                <h3>Night Runner</h3>
                <p>$65</p>
                <button>Add to Cart</button>
            </div>
        <div class="product-card">
            <img src="{{asset('images/shoes_2.png')}}" alt="Product 2">
            <h3>Night Runner</h3>
            <p>$65</p>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <img src="{{asset('images/shoes_1.png')}}" alt="Product 3">
            <h3>Sport Shoes</h3>
            <p>$70</p>
            <button>Add to Cart</button>
        </div>


        <div class="product-card">
            <img src="{{asset('images/shoes_3.png')}}" alt="Product 4">
            <h3>Night Runner Plus</h3>
            <p>$70</p>
            <button>Add to Cart</button>
        </div>


        <div class="product-card">
            <img src="{{asset('images/shoes_4.png')}}" alt="Product 5">
            <h3>Aquamatic</h3>
            <p>$120</p>
            <button>Add to Cart</button>
        </div>        
    </div>
    
    












    
</body>
</html>