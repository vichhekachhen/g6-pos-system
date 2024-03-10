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
        // Create input element for quantity
        let quantityInput = document.createElement("input");
        quantityInput.type = "number";
        quantityInput.min = "1";
        quantityInput.value = "1";
        // Add event listener to update total price when quantity changes
        quantityInput.addEventListener("input", function() {
            updateTotalPrice();
        });
        quantityCell.appendChild(quantityInput);
        priceCell.innerHTML = "$" + price;
        // Create the remove button
        let removeButton = document.createElement("button");
        removeButton.innerHTML = "Remove";
        removeButton.className = "btn btn-danger";
        // Add event listener to the remove button
        removeButton.addEventListener("click", function() {
            // Remove the corresponding row
            tableBody.removeChild(row);
            updateTotalPrice(); // Update total price after removing item
        });
        // Append the remove button to the action cell
        actionCell.appendChild(removeButton);
        // Show the product details table
        document.getElementById("productDetails").style.display = "block";
        // Update total price initially
        updateTotalPrice();
    }

    function updateTotalPrice() {
        let total = 0;
        // Get all rows in the table
        let rows = document.getElementById("productDetailsBody").getElementsByTagName("tr");
        // Loop through each row and calculate the total price
        for (let i = 0; i < rows.length; i++) {
            let quantity = parseInt(rows[i].getElementsByTagName("input")[0].value);
            let price = parseFloat(rows[i].getElementsByTagName("td")[2].innerHTML.slice(1));
            total += quantity * price;
        }
        // Display the total price
        document.getElementById("totalPrice").innerHTML = "Total Price: $" + total.toFixed(2);
    }
</script>
