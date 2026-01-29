<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/page_one_style.css')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Step Store</title>
</head>
<body>
        <div class="header">
        <div class="logo">
            <img src="{{asset('images/logo_2_img.png')}}" alt="logo">
        </div>
        <div class="menu">
            <a class="menu-link" href="http://">Home</a>
            <a class="menu-link" href="{{ route('products') }}">Products</a>
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

    <div class="main">
        <div class="main-left">
            <h1>Step Foot</h1>
            <p> brings you the latest in footwear fashion.  
            From everyday sneakers to elegant shoes,
            we provide a selection of high-quality</p>
            <a href="{{ route('products') }}" class="btn">View Products</a>
        </div>

        <div class="main-right">
            <div class="form-toggle">
            <button id="loginToggle" class="toggle-btn active" onclick="showLogin()">Login</button>
            <button id="signupToggle" class="toggle-btn" onclick="showSignup()">Sign Up</button>
        </div>

        @if(session('success'))
            <div style="padding: 15px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 12px; margin-bottom: 20px; text-align: center;">
            {{ session('success') }}
            </div>
        @endif

        <form id="loginForm" class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="submit-btn">Login</button>
        </form>

        <form id="signupForm" class="auth-form" method="POST" action="{{ route('register') }}" style="display: none;">
            @csrf
             <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter name" required>
            </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Create password" required>
        </div>
        <button type="submit" class="submit-btn">Create Account</button>
    </form>
</div>

        

    </div>
    <div class="iteams">
        <h2>Featured Products</h2>
        <div class="iteams-list">
            <div class="iteams-card">
                <img src="{{asset('images/shoes_4.png')}}" alt="product 1">
                <h3>Aquamatic</h3>
                <p>$120</p>
                <button>Add to Cart</button>
            </div>

            <div class="iteams-card">
                 <img src="{{asset('images/shoes_2.png')}}" alt="product 2">
                 <h3>Night Runner</h3>
                 <p>$65</p>
                 <button>Add to Cart</button>
            </div>

            <div class="iteams-card">
                <img src="{{asset('images/shoes_3.png')}}" alt="product 3">
                <h3>Night Runner Plus</h3>
                <p>$70</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="information">
        <h2>Why Us</h2>
        <div class="information-iteams">
            <div>
                Quality Products
                <i class="fa-regular fa-star"></i>
            </div>
            <div>
                Fast Delivery
                <i class="fa-solid fa-truck-fast"></i>
            </div>
            <div>
                Customer Support
                <i class="fa-solid fa-headset"></i>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Step Foot</p>
    </div>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>