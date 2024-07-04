<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $type_product = $_POST["type_product"];
        $product = $_POST["product"];
        $cost_product_code = $_POST["cost_product_code"];
        $qty = $_POST["qty"];
        $price = $_POST["price"];

        echo "<table border='1'>";
        echo "<tr><th colspan='2'>Submitted Product Information</th></tr>";
        echo "<tr><td>Type product:</td><td>$type_product</td></tr>";
        echo "<tr><td>Product Name:</td><td>$product</td></tr>";
        echo "<tr><td>Cost Product Code:</td><td>$cost_product_code</td></tr>";
        echo "<tr><td>Quantity:</td><td>$qty</td></tr>";
        echo "<tr><td>Price:</td><td>$price</td></tr>";
        echo "</table>";
    }
    ?>
    </center>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="type_product">Type product:</label><br>
        <input type="text" id="type_product" name="type_product" required><br>

        <label for="product">Product Name:</label><br>
        <input type="text" id="product" name="product" required><br>
        
        <label for="cost_product_code">Cost Product Code:</label><br>
        <input type="text" id="cost_product_code" name="cost_product_code" required><br>

        <label for="qty">Quantity:</label><br>
        <input type="number" id="qty" name="qty" required><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br>
        
        <input type="submit" value="Add Product">
        <input type="reset" value="Clear">
    </form>
</body>
</html>
