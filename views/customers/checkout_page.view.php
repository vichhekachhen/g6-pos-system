<?php

// session_start();
require_once "database/database.php";
require_once "models/customer.model.php";

$addToCards = getProductAddToCard();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom background color for the body */
        body {
            background-color: #f2f2f2;
            /* Light gray */
        }

        /* Custom background color for the table header */
        .table-dark th {
            background-color: #343a40;
            /* Dark gray */
            color: #ffffff;
            /* White text */
        }

        /* Custom background color for the card header */
        .card-header.bg-danger {
            background-color: #dc3545;
            /* Red */
        }

        /* Custom font for card header */
        .card-header.fon {
            font-family: Arial, sans-serif;
        }

        /* Custom styling for checkout button */
        .btn-checkout {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body class="container">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($addToCards as $card) { ?>
                            <tr>
                                <th><img class="rounded-quare shadow-4-strong" width="60px" height="60px" src="../../assets/items_img/<?= $card["image"] ?>" alt=""></th>
                                <td class="price"><?= $card["price"] ?></td>
                                <td>
                                    <input type="number" class="quantity" style="width: 70px; height: 30px;" value="<?= $card["quantity"] ?>" data-price="<?= $card["price"] ?>">
                                </td>
                                <td class="total"><?= $card["price"] * $card["quantity"] ?></td>
                                <td><button class="btn btn-danger">Remove</button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header bg-danger text-white fon">Card Total</div>
                    <div class="card-body text-primary">
                        <div class="form-group">
                            <label for="total">Total ($)</label>
                            <input type="number" class="form-control" id="total" value="35" readonly>
                        </div>
                        <form action="../../controllers/orders/order.process.controller.php" method="post">
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-success btn-checkout" name="checkout">Checkout</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInputs = document.querySelectorAll('.quantity');
            const totalInput = document.getElementById('total');

            function updateTotal() {
                let totalPrice = 0;
                quantityInputs.forEach(function(input) {
                    const price = parseFloat(input.dataset.price);
                    const quantity = parseInt(input.value);
                    const total = price * quantity;

                    // multiply total quantity in table by price and quantity
                    const parentTr = input.closest('tr');
                    parentTr.querySelector('.total').textContent = '$' + total.toFixed(2);
                    totalPrice += total;
                });

                // sum all total prices to card total
                totalInput.value = totalPrice.toFixed(2);
            }

            quantityInputs.forEach(function(input) {
                input.addEventListener('input', updateTotal);
            });

            // Update total on page load
            updateTotal();
        });
    </script>
</body>

</html>

</html>