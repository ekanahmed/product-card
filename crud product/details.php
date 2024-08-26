<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <?php
        require_once("connection/connection.php");

        $id = $_GET["id"];
        // $id = $_GET["id"];

        // echo"<pre>";
        // print_r($_GET);
        // $mysql ="SELECT * FROM products WHERE id=$id";
        $result = mysqli_query($connection,"SELECT * FROM products WHERE id=$id");

        if(mysqli_num_rows($result) == 1){
            $row=mysqli_fetch_assoc($result );
        
        
       
    ?>
    <details>
        <summary>
            Product   
        </summary>
        <summary>
            ProductName:
            <?php
                echo $row["product_name"]
            ?>
        </summary>

        <summary>
            Category: 
            <?php
                echo $row["category"]
            ?>
        </summary>
        <summary>
            Price: 
            <?php
                echo $row["price"]
            ?>
        </summary>
        <summary>
            Quantity: 
            <?php
                echo $row["quantity"]
            ?>
        </summary>

        <summary>
            
            Date: 
            <?php
                echo $row["added_date"]
            ?>
        </summary>
    </details>
    <?php
        }else{
            echo "no data found";
        }
    ?>
</body>
</html>