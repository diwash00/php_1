<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pizza Order Form</title>
    <meta name="description" content="This is a basic pizza order form with variables used ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
<!--    latest compiled and minified Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<header>
<!--    logo-->
    <div>
        <a href="index.html" target="_self">
            <img src="./logo_pizza.jpg" alt="logo of pizza">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="index.html" target="_self"> Home</a></li>
            <li><a href="index.html" target="_self"> About Us</a></li>
            <li><a href="index.html" target="_self">Contacts</a></li>
        </ul>
    </nav>
</header>
    <div class="container">
        <h1>Pizza Order Form</h1>
        <form method="post" action="save_order.php">
            <div class="form-group">
                <label for="name">Customer Name:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="tel" name="contact" id="contact" required>
            </div>
            <div class="form-group">
                <label for="pizza">Pizza Name:</label>
                <input type="text" name="pizza" id="pizza" required>
            </div>
            <div class="form-group">
                <label for="size">Pizza Size:</label>
                <select name="size" id="size" required size="4">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>

            </div>
            <div class="form-group">
                <label for="toppings">Toppings:</label>
                <input type="text" name="toppings" id="toppings" required>
            </div>
            <input type="submit" value="Place Order">
        </form>
    </div>
</body>
</html>
