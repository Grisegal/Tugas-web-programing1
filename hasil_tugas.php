<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="hasil_tes.php" method="post">
        <label for="type_ptoduct">Type product:</label><br>
        <input type="text" id="type_product" name="type_product" required><br>

        <label for="product">Product Name:</label><br>
        <input type="text" id="product" name="product" required><br>
        
        <label for="cost_product_code">Cost Product Code:</label><br>
        <input type="text" id="cost_product_code" name="cost_product_code" required><br>

        <label for="qty">Quantity:</label><br>
        <input type="number" id="qty" name="qty" required><br>

        <label for="unit">Unit:</label><br>
        <input type="number" id="unit" name="unit" required><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br>
        
        <input type="submit" value="Add Product">
        <input type="reset" value="Clear">
    </form>
</body>
</html>
