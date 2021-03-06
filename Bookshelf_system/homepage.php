<!DOCTYPE html>
<html>
<title>BOOKSHELF SYSTEM</title>javascript:void(0);
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="bookshelf content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>BOOKshelf</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Books <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
     
      <a href="#" class="w3-bar-item w3-button">Romance</a>
      <a href="#" class="w3-bar-item w3-button">Educational</a>
      <a href="#" class="w3-bar-item w3-button">Horror/Thriller</a>
      <a href="#" class="w3-bar-item w3-button">Fantasy</a>
      <a href="#" class="w3-bar-item w3-button">Fiction</a>
      <a href="#" class="w3-bar-item w3-button">Non-Fiction</a>
    </div>
      
      E-Books <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
     
      <a href="#" class="w3-bar-item w3-button">Romance</a>
      <a href="#" class="w3-bar-item w3-button">Educational</a>
      <a href="#" class="w3-bar-item w3-button">Horror/Thriller</a>
      <a href="#" class="w3-bar-item w3-button">Fantasy</a>
      <a href="#" class="w3-bar-item w3-button">Fiction</a>
      <a href="#" class="w3-bar-item w3-button">Non-Fiction</a>
    </div>
   <a href="#footer" class="w3-bar-item w3-button w3-padding">Contact</a>
  <a href="#footer"  class="w3-bar-item w3-button w3-padding">Subscribe</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">BOOKshelf</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
 
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Books</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="https://www.qualtrics.com/m/assets/blog/wp-content/uploads/2018/08/shutterstock_1068141515.jpg" alt="Books" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2019</h1>
      <p><a href="#books" class="w3-button w3-black w3-padding-large w3-large">CHECK NOW</a></p>
    </div>
  </div>
    <div class="w3-container w3-text-grey" id="jeans">
   
    </div>



  <!-- Product grid -->
    <div class="w3-col l3 s6">
      <div class="w3-container">
	    <div class="w3-display-container">
          <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1549993860l/43982054.jpg" style="width:100%">
          <p>The Water Dancer<br><b class="w3-text-red">₹990</b></p>
		  <div class="w3-display-middle w3-display-hover">
		    <button class="w3-button w3-black" onclick="location='a1.php'" >Buy now<i class="fa fa-shopping-cart"></i></button>
		  </div>
		</div>
	  </div>
	  
      <div class="w3-container">
	    <div class="w3-display-container">
          <img src="https://images-na.ssl-images-amazon.com/images/I/91l%2B4n9jHhL.jpg" style="width:100%">
          <p>Life Without Limits<br><b class="w3-text-red">₹350</b></p>
		  <div class="w3-display-middle w3-display-hover">
		    <button class="w3-button w3-black" onclick="location='c.php'" >Buy now<i class="fa fa-shopping-cart"></i></button>
		  </div>
		</div>
	  </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="https://images-na.ssl-images-amazon.com/images/I/A1fs-ErenkL.jpg" style="width:100%">
          <p>A Gentleman In Moscow<br><b class="w3-text-red">₹699</b></p>
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='b.php'" >Buy now<i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        
      </div>
	  
      <div	  class="w3-container">
	    <div class="w3-display-container">
          <img src="https://productimages.worldofbooks.com/1473666945.jpg" style="width:100%">
          <p>IT<br><b class="w3-text-red">₹500</b></p>
		  <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='f.php'" >Buy now<i class="fa fa-shopping-cart"></i></button>
          </div>
		</div>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
	    <div class="w3-display-container">
          <img src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1361039443l/41865.jpg" style="width:100%">
		  <p>Twilight<br><b class="w3-text-red">₹699</b></p>
		  <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='g.php'" >Buy now<i class="fa fa-shopping-cart"></i></button>
          </div>
		</div>
      </div>
     
	  <div class="w3-container">
        <div class="w3-display-container">
          <img src="data:image/jpeg;base64,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" style="width:100%">
          <p>Ecology book<br><b class="w3-text-red">₹450</b></p>
		  <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='d.php'" >Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
	    <div class="w3-display-container">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYZh0aVhgZyjtQdKPSZ4iU0K8H2_EEYNwgKDfYJkO3SfSan_hB&s" style="width:100%">
          <p>The Christmasaurus and the winter witch<br><b class="w3-text-red">₹299</b></p>
		  <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='e.php'" >Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
		</div>
      </div>
	  
      <div class="w3-container">
	    <div class="w3-display-container">
          <img src="https://pictures.abebooks.com/isbn/9781405207423-uk.jpg" style="width:100%">
          <p>Barbie and the Swan Lake<br><b class="w3-text-red">₹450</b></p>
		  <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black" onclick="location='i.php'" >Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
		</div>
      </div>
    </div>
  </div>

  
  <div class="w3-container w3-black w3-padding-32">
    </div>
 
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contact</h4>
              </div>

      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="#">About us</a></p>
        <p><a href="#">Support</a></p>
        <p><a href="#">Shipment</a></p>
        <p><a href="#">Payment</a></p>
        <p><a href="#">Gift card</a></p>
        <p><a href="#">Return</a></p>
        <p><a href="#">Help</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i>BOOKshelf</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> bookshelf@mail.com</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">BOOKshelf</div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
