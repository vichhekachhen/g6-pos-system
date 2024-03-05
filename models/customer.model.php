<script>

    function showProductDetails(name, price) {
        // Get the table body
        var tableBody = document.getElementById("productDetailsBody");
        // Create a new row
        var row = tableBody.insertRow();
        // Insert cells for the row
        var productNameCell = row.insertCell(0);
        var quantityCell = row.insertCell(1);
        var priceCell = row.insertCell(2);
        var actionCell = row.insertCell(3);
        // Set the cell values
        productNameCell.innerHTML = name;
        quantityCell.innerHTML = "<input type='number' min='1' value='1'>";
        priceCell.innerHTML = "$" + price;
        actionCell.innerHTML = "<button class='btn btn-danger'>Remove</button>";
        // Show the product details table
        document.getElementById("productDetails").style.display = "block";
      }
      
</script>
