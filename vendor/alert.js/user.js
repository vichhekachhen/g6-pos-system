document.querySelector('form').addEventListener('submit', function (event) {
    const inputs = document.querySelectorAll('input[required], select[required]');
    let hasError = false;

    inputs.forEach(function (input) {
        if (!input.value) {
            input.classList.add('is-invalid');
            hasError = true;
        } else {
            input.classList.remove('is-invalid');
        }
    });

    if (hasError) {
        event.preventDefault();
    }
});



