<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ADD PRODUCTS</title>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center fw-bold">Add Product</h2>
        <form action="adding.php" method="POST">
            <!-- Product Name -->
            <div class="form-group">
                <label for="product_name" class="my-2 fw-bold">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" maxlength="100" placeholder="Enter product name" required>
            </div>

            <!-- Category -->
            <div class="form-group">
                <label for="category" class="my-2 fw-bold">Category</label>
                <input type="text" class="form-control" id="category" name="category" maxlength="50" placeholder="Enter category" required>
            </div>

            <!-- Price -->
            <div class="form-group">
                <label for="price" class="my-2 fw-bold">Price</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" required>
            </div>

            <!-- Quantity -->
            <div class="form-group">
                <label for="quantity" class="my-2 fw-bold">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
            </div>

            <!-- Added Date -->
            <div class="form-group">
                <label for="added_date" class="my-2 fw-bold">Added Date</label>
                <input type="date" class="form-control " id="added_date" name="added_date" required>
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary my-4 fw-bold">Add Product</button>
        </form>
    </div>
</body>

</html>