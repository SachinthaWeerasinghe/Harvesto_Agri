<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Harvesto</title>
    
    <style>
        
        body, p {
            margin: 0;
            padding: 0;
        }

        

        
        .container {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        
        .thumbnail {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            
            width: 20%; 
            background-color: #fff;
            text-align: center;
        }

        .thumbnail img {
            max-width: 100%;
            max-height: 150px; 
            margin-bottom: 10px;
        }

        /* Thumbnail caption styles */
        .caption {
            text-align: center;
        }

        /* Product name styles */
        .product-name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Product price styles */
        .product-price {
            font-size: 16px;
            margin-top: 5px;
        }

        /* Button styles */
        .btn-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Buy button styles */
        .btn-buy {
            background-color: #337ab7;
            color: #fff;
            width: 100%;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-buy:hover {
            background-color: #23527c;
        }

        /* Added to cart button styles */
        .btn-added {
            background-color: #5bc0de;
            color: #fff;
            width: 100%;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border: none;
            cursor: default;
            margin-top: 10px;
        }

        
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <?php
            require 'header.php';
           ?>
    </div>
	
    <div class="container">
        <!-- Product 1: Carrot -->
        <div class="thumbnail">
            <img src="img/carrot.jpg" alt="carrot">
            <div class="caption">
                <div class="product-name">Carrot</div>
                <div class="product-price">500g Price: LKR. 250.00</div>
                <div class="btn-container">
                        <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=1" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- Product 2: Beetroot -->
        <div class="thumbnail">
            <img src="img/beetroot1.jpg" alt="Beetroot">
            <div class="caption">
                <div class="product-name">Beetroot</div>
                <div class="product-price">500g Price: LKR. 300.00</div>
                <div class="btn-container">
                   
                        <?php if(check_if_added_to_cart(2)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=2" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- Pumpkin -->
        <div class="thumbnail">
            <img src="img/pumpkin.jpg" alt="pumpkin">
            <div class="caption">
                <div class="product-name">Pumpkin</div>
                <div class="product-price">500g Price: LKR. 200.00</div>
                <div class="btn-container">
                        <?php if(check_if_added_to_cart(3)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=3" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- Leaks -->
        <div class="thumbnail">
            <img src="img/leaks.jpg" alt="Leaks">
            <div class="caption">
                <div class="product-name">Leaks</div>
                <div class="product-price">250g Price: LKR. 150.00</div>
                <div class="btn-container">
                        <?php if(check_if_added_to_cart(4)) { ?>
                            <button class="btn btn-added" disabled>Added to cart</button>
                        <?php } else { ?>
                            <a href="cart_add.php?id=4" class="btn btn-buy">Add to cart</a>
                        <?php } ?>
                </div>
            </div>
        </div>
        
                   
    <br><br><br><br><br><br><br><br>
    <div class="footer">
        &copy; Harvesto. All Rights Reserved. | Contact Us: +94 754005444
    </div>
</body>
</html>
