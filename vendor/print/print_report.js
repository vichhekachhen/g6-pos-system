function printData() {
    var divToPrint = document.getElementById("dataTable").outerHTML;
    var newWin = window.open("");
    newWin.document.write('<html><head><title>Print Table</title>');
    newWin.document.write('<style>');
    newWin.document.write('table {border-collapse: collapse; width: 100%;}');
    newWin.document.write('th, td {border: 1px solid black; padding: 8px;}');
    newWin.document.write('.bg-primary {background-color: #007bff; color: white;}');
    newWin.document.write('</style>');
    newWin.document.write('</head><body>');
    newWin.document.write(divToPrint);
    newWin.document.write('</body></html>');
    newWin.document.close();
    newWin.print();
    newWin.close();
  }