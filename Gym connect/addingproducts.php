<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="addingproducts.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adding_products</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Gym Connect</a>
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index_admin.php">HOME</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <div class="form">
        <form action="addingproductsphp.php" method="post">
            <h2>Gym Connect</h2>
            <h3>Enter the details to add a new product:</h3>
            <div class="mb-3">
                <label for="itemname" class="form-label">ITEMNAME</label>
                <input type="text" class="form-control" placeholder="Itemname" name="myitemname">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <input type="text" class="form-control" placeholder="Description" name="mydescription">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">PRICE</label>
                <input type="text" class="form-control" placeholder="Price" name="myprice">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Add ">
            </div>

        </form>

    </div>
</body>

</html>