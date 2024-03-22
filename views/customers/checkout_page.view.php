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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        </head>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Shopping Cart</title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

            <!-- // including style css abit -->
            <style>
                /* Custom background color for the body */
                body {
                    background-color: #f2f2f2;
                }

                /* Custom background color for the table header */
                .table-dark th {
                    background-color: #343a40;
                    color: #ffffff;
                }

                /* Custom background color for the card header */
                .card-header.bg-danger {
                    background-color: #dc3545;
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

        <h5 class="text-success d-flex justify-content-center fs-1">Your Card</h5>
        <body class="container">
        <div class="form-group mt-4 p-3">
                <a href="/">
                    <button class="btn btn-secondary">Back</button>
                </a>
                
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead >
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <?php foreach ($addToCards as $card) { ?>
                                    <tr>
                                        <th><img class="rounded-quare shadow-4-strong" width="60px" height="60px" src="../../assets/items_img/<?= $card["preOrder_image"] ?>" alt=""></th>
                                        <td class="price pt-4"><?= $card["preOrder_name"] ?></td>
                                        <td class="price pt-4"><?= $card["preOrder_price"] ?></td>
                                        <form action="../../controllers/customers/add_more_quantity.controller.php" method="post">
                                            <td class="pt-4">
                                                <input type="hidden" name="id" value="<?= $card["preOrder_id"] ?>">
                                                <input type="number" name="quantity" class="quantity" style="width: 70px; height: 30px;" value="<?= $card["preOrder_quantity"] ?>" data-price="<?= $card["preOrder_price"] ?>">
                                            </td>
                                        </form>
                                        <td class="total pt-4"><?= $card["preOrder_price"] * $card["preOrder_quantity"] ?></td>
                                        <td class="total pt-4">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $card["preOrder_id"] ?>">
                                                Cancel
                                            </button>
                                        </td>

                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?= $card["preOrder_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Product Order <b><?= $card["preOrder_name"] ?></b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this product <b class="text-danger"><?= $card["preOrder_name"] ?></b> ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a type="button" class="btn btn-danger" href="controllers/customers/remove_order.controller.php?id=<?= $card["preOrder_id"] ?>">Delete</a>
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
                            <div class="card-header bg-muted text-dark ">Card Total</div>
                            <div class="card-body bg-muted text-success pt-4">
                                <div class="form-group pb-3">
                                    <label for="total">Total ($)</label>
                                    <input type="number" class="form-control" id="total" value="35" readonly>
                                </div>
                                <form action="../../controllers/customers/check_out.controller.php">
                                    <div class="form-group mt-4">
                                        <button type="button" class="btn btn-success btn-checkout" data-bs-toggle="modal" data-bs-target="#checkoutModal" name="checkout">Checkout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

            <!-- Checkout Modal -->
            <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="checkoutModalLabel"><b>Confirm Checkout</b></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <b style="font-size: 20px;" class="text-success">Please Waiting !</b>
                        </div>
                        <div class="modal-footer">
                            <a href="/"><button class="btn btn-danger" id="confirmCheckout">OK</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap and JavaScript dependencies -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
            <script>

            //    // Cancel or delete all product from tbody
            //     let cancelBtn = document.getElementById('cancelBtn');
            //     let tbody = document.getElementById('tbody');

            //     cancelBtn.addEventListener('click', function(){
            //         if (tbody) {
            //             tbody.remove();
            //         }else {
            //             console.log("Thead is not visible.")
            //         }

            //     })

                // Total 
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
