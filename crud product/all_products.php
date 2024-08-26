<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>All Products</title>
</head>

<body>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Top bar with Search and Add button -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <!-- Add button -->
                    <a href="index.php" class="btn btn-success">
                        <i class="bi bi-plus-circle"></i> Add Product
                    </a>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>
                                <th scope="col" class="text-end">Details</th>
                                <th scope="col" class="text-end">Edit</th>
                                <th scope="col" class="text-end">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once("connection/connection.php");

                            $msql = "SELECT * FROM products";

                            $result = mysqli_query($connection, $msql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["product_name"]; ?></td>
                                        <td><?php echo $row["category"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>
                                        <td><?php echo $row["quantity"]; ?></td>
                                        <td><?php echo $row["added_date"]; ?></td>
                                        <td class="text-end">
                                            <a href="details.php?id=<?php
                                            echo $row["id"]?>" class="btn btn-info btn-sm">
                                                Details
                                            </a>
                                        </td>
                                        <td class="text-end">
                                            <a href="edit.php?id=<?php echo $row["id"]?>" class="btn btn-warning btn-sm">
                                                Edit
                                            </a>
                                        </td>
                                        <td class="text-end">
                                            <a href="delete.php?id=<?php echo $row["id"]?>" class="btn btn-danger btn-sm">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>