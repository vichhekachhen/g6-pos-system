<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-5 " style="width: 150px; height: 50px;">Submit</button>
        </div>
        <table class="table table-striped mt-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><img class="rounded-circle shadow-4-strong" width="60px" height="60px" src="../../assets/items_img/<?= $image ?>" alt=""></th>
                    <th><?= $itemName ?></th>
                    <td><?= $price ?></td>
                    <td><input type="number" class="" style="width: 70px; height: 30px;"></td>
                    <td><button class="btn btn-outline-danger btn-sm">Cancel</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>