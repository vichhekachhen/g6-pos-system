function filterTable() {
    var selectElement = document.getElementById("categoryId");
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var selectedCategory = selectedOption.text;

    var tableRows = document.querySelectorAll(".itemTable tbody tr");

    // Show or hide table rows based on the selected category
    for (var i = 0; i < tableRows.length; i++) {
        var category = tableRows[i].getAttribute("data-category");

        if (selectedCategory === "All Categories" || category === selectedCategory) {
            tableRows[i].style.display = "";
        } else {
            tableRows[i].style.display = "none";
        }
    }
}