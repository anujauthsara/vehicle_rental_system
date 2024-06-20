function Datefn() {
    datePick.min = new Date().toLocaleDateString('fr-ca');
  }


window.onload = function() {
    // Retrieve the selected amount from session storage
    var selectedAmount = sessionStorage.getItem('selectedAmount');
    
    // Display the selected amount on the page
    document.getElementById('selected-amount').innerText ="Rs " + selectedAmount + ".00" ;
    
}

document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Retrieve the value from the "Distance" input field
    var distance = document.getElementById('distanceInput').value;
    
    // Retrieve the selected amount from session storage
    var selectedAmount = sessionStorage.getItem('selectedAmount');
    
    // Perform the multiplication
    var totalAmount = parseFloat(selectedAmount) * parseFloat(distance);
    
    // Display the total amount
    
    // Clear the form field
  });