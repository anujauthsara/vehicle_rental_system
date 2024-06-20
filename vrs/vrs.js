function Datefn() {
    datePick.min = new Date().toLocaleDateString('fr-ca');
  }
  
  function vsearch() {
    var val = document.getElementById("cate").value;
  
    if (val == 'suv') {
      document.getElementById("search-results").innerHTML = "<h2>SUV</h2><div class='box'><h3>CH-R</h3><img src=\"chr.jpg\" width=\"200px\" height=\"200px\"><p>180perK/M</p><button class='btn' onclick=\"amountClicked(180)\">Book Tour</button></div><div class='box'><h3>CR-V</h3><img src=\"crv.jpg\" width=\"200px\" height=\"200px\"><p>200perK/M</p><button class='btn' onclick=\"amountClicked(200)\">Book Tour</button></div><div class='box'><h3>Sorento</h3><img src=\"sorento.jpg\" width=\"200px\" height=\"200px\"><p>160perK/M</p><button class='btn' onclick=\"amountClicked(160)\">Book Tour</button></div>";
    }
  
    if (val == 'van') {
      document.getElementById("search-results").innerHTML = "<h2>Van</h2><div class='box'><h3>Caravan</h3><img src=\"caravan.jpg\" width=\"200px\" height=\"200px\"><p>200perK/M</p><button class='btn' onclick=\"amountClicked(200)\">Book Tour</button></div><div class='box'><h3>KDH</h3><img src=\"KDH.jpg\" width=\"200px\" height=\"200px\"><p>250perK/M</p><button class='btn' onclick=\"amountClicked(250)\">Book Tour</button></div>";
    }
  
    if (val == 'wagon') {
      document.getElementById("search-results").innerHTML = "<h2>Wagon</h2><div class='box'><h3>Fit Shuttle</h3><img src=\"fitsh.jpg\" width=\"200px\" height=\"200px\"><p>150perK/M</p><button class='btn' onclick=\"amountClicked(150)\">Book Tour</button></div><div class='box'><h3>Prius CX</h3><img src=\"prius.jpg\" width=\"200px\" height=\"200px\"><p>190perK/M</p><button class='btn' onclick=\"amountClicked(190)\">Book Tour</button></div><div class='box'><h3>Lancer Wagon</h3><img src=\"lancer.jpg\" width=\"200px\" height=\"200px\"><p>180perK/M</p><button class='btn' onclick=\"amountClicked(180)\">Book Tour</button></div><div class='box'><h3>Benz Wagon</h3><img src=\"benz.jpg\" width=\"200px\" height=\"200px\"><p>240perK/M</p><button class='btn' onclick=\"amountClicked(240)\">Book Tour</button></div>";
    }
  
    if (val == 'salon') {
      document.getElementById("search-results").innerHTML = "<h2>Salon</h2><div class='box'><h3>BMW 320d</h3><img src=\"bmw.jpg\" width=\"200px\" height=\"200px\"><p>250perK/M</p><button class='btn' onclick=\"amountClicked(250)\">Book Tour</button></div><div class='box'><h3>Allion</h3><img src=\"allion.jpg\" width=\"200px\" height=\"200px\"><p>200perK/M</p><button class='btn' onclick=\"amountClicked(200)\">Book Tour</button></div><div class='box'><h3>Axio</h3><img src=\"axio.jpg\" width=\"200px\" height=\"200px\"><p>210perK/M</p><button class='btn' onclick=\"amountClicked(210)\">Book Tour</button></div><div class='box'><h3>Premio</h3><img src=\"premio.jpg\" width=\"200px\" height=\"200px\"><p>260perK/M</p><button class='btn' onclick=\"amountClicked(260)\">Book Tour</button></div>";
    }
  }
  
  function amountClicked(amount) {
    // Store the amount value in session storage
    sessionStorage.setItem('selectedAmount', amount);
  
    // Redirect to the payment.html page
    window.location.href = "Payment.html";
  }
  