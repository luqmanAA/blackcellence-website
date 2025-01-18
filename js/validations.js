function validateCheckboxes() {
    const checkboxes = document.querySelectorAll('input[name="scope[]"]');
    const errorMessage = document.getElementById('error-message');
    for (let checkbox of checkboxes) {
        if (checkbox.checked) {
            errorMessage.style.display = 'none'; // Hide error message
            return true; // At least one checkbox is checked
        }
    }
    errorMessage.style.display = 'block'; // Show error message
    return false; // No checkbox is checked
}