<!-- Begin Page Content -->
<div class="container-fluid mt-5">

    <!-- DataTales Example -->
    <div class="card shadow p-4">

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
            <title>Checkout</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

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
                                        <form action="../../controllers/customers/add_more_quantity.controller.php" method="post">
                                            <td>
                                                <input type="hidden" name="id" value="<?= $card["id"] ?>">
                                                <input type="number" name="quantity" class="quantity" style="width: 70px; height: 30px;" value="<?= $card["quantity"] ?>" data-price="<?= $card["price"] ?>">
                                            </td>
                                        </form>
                                        <td class="total"><?= $card["price"] * $card["quantity"] ?></td>
                                        <td class="total pt-4">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $card["id"] ?>">
                                                Cancel
                                            </button>
                                        </td>

                                    </tr>
                                     <!-- Modal -->
                                     <div class="modal fade" id="exampleModal<?= $card["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Product Order <b><?= $card["name"] ?></b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this product <b class="text-danger"><?= $card["name"] ?></b> ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a type="button" class="btn btn-danger" href="controllers/customers/remove_order.controller.php?id=<?= $card["id"] ?>">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-success btn-checkout">Checkout</button>
                                </div>
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
            <h1>hello world!</h1>
        </body>

        </html>

        </html>