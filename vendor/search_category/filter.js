function filterTable() {
    var categorySelect = document.getElementById("categoryId");
    var selectedCategory = categorySelect.options[categorySelect.selectedIndex].text;

    var employeeSelect = document.getElementById("userId");
    var selectedEmployee = employeeSelect.options[employeeSelect.selectedIndex].text;

    var tableRows = document.querySelectorAll("#dataTableUser tbody tr");

    // Show or hide table rows based on the selected category and employee
    for (var i = 0; i < tableRows.length; i++) {
        var category = tableRows[i].getAttribute("data-category");
        var employee = tableRows[i].querySelector("td:nth-child(6)").textContent;

        var showCategory = selectedCategory === "All Categories" || category === selectedCategory;
        var showEmployee = selectedEmployee === "All Employee" || employee === selectedEmployee;

        tableRows[i].style.display = showCategory && showEmployee ? "" : "none";
    }
}