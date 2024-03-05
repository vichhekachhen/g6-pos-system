<script>
    function showProductDetails(name, price) {
        // Get the table body
        let tableBody = document.getElementById("productDetailsBody");
        // Create a new row
        let row = tableBody.insertRow();
        // Insert cells for the row
        let productNameCell = row.insertCell(0);
        let quantityCell = row.insertCell(1);
        let priceCell = row.insertCell(2);
        let actionCell = row.insertCell(3);
        // Set the cell values
        productNameCell.innerHTML = name;
        quantityCell.innerHTML = "<input type='number' min='1' value='1'>";
        priceCell.innerHTML = "$" + price;
        // Create the remove button
        let removeButton = document.createElement("button");
        removeButton.innerHTML = "Remove";
        removeButton.className = "btn btn-danger";
        // Add event listener to the remove button
        removeButton.addEventListener("click", function() {
            // Remove the corresponding row
            tableBody.removeChild(row);
        });
        // Append the remove button to the action cell
        actionCell.appendChild(removeButton);
        // Show the product details table
        document.getElementById("productDetails").style.display = "block";
    }
</script>
