<!-- <?php  
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "schoolsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> -->
<?php
session_start();
include 'Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>PLY Computer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link type="text/css" rel="stylesheet" href="css/lightGallery.css" />
  <script src="js/lightGallery.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="js/javascript1.js"></script>
  <style type="text/css">
    
</style>
</head>
<body>
  <div class="container-flude"  style="margin-bottom: 100px; ">
    <div id="Logo" onmouseover="textStyle()" onmouseout="erase()" style="width: 100%; text-align: center;">
      <h3>PLY Computer</h3>
    </div>
      
    <!-- <div class="topnav">
      <a class="active" href="index.php"><img src="Image/home.png" width="20px;"></a>
      <a href="Production.php">Production</a>
      <a href="Contact.php">Contact</a>
      <a href="about.php">About</a>
      <a href="Serviccs.php">Serviccs</a>
      <a href="Solutions.php">Solutions</a>
      <a href="News.php">News</a>
      <a href="Careers.php">Careers</a>
     </div> -->
<!-- for nevbar and dropdown -->
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="Image/home.png" width="30px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="overflow: yellow;">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="overflow: yellow;">
             Production
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Acer</a>
              <a class="dropdown-item" href="#">Asus</a>
              <a class="dropdown-item" href="#">Apple</a>
              <a class="dropdown-item" href="#">MSI</a>
              <a class="dropdown-item" href="#">HP</a>
              <a class="dropdown-item" href="#">Lenovo</a>
              <a class="dropdown-item" href="#">Dell</a>
              <a class="dropdown-item" href="#">Sangsung</a>
              <a class="dropdown-item" href="#">Huwie</a>
              <a class="dropdown-item" href="#">Sony</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link disabled" href="#"style="overflow: yellow;">Services</a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="#" style="overflow: yellow;">Service<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown" style="">
          <a href="Desktop.php" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Desktop</a>
              <div class="dropdown-menu">
                <div class="dropdown-inner">
                <ul class="list-unstyled">
                <li><a  class ="dropdown-item" href="Desktop.php" >PC Build</a></li>
                <li><a  class ="dropdown-item" href="All In One.php">All In One</a></li>
                </ul>
                </div>
            <a class ="dropdown-item" href="All Desktops.php">See All Desktop</a> </div>
          </li>
          <li class="nav-item dropdown" style="">
            <a href="ACCESSORIES.php" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories</a>
            <div class="dropdown-menu">
            <div class="dropdown-inner">
              <ul class="list-unstyled">
                  <li><a  class ="dropdown-item" href="">Mouse</a></li>
                  <li><a  class ="dropdown-item" href="" >Mouse Pad</a></li>
                  <li><a  class ="dropdown-item" href="" >Keyboard</a></li>
                  <li><a  class ="dropdown-item" href="" >Headset</a></li>
                  <li><a  class ="dropdown-item" href="" >USB Flash Drive</a></li>
                  <li><a  class ="dropdown-item" href="" >External HDD</a></li>
                  <li><a  class ="dropdown-item" href="" >Bagpack</a></li>
                  <li><a  class ="dropdown-item" href="" >PROJECTOR</a></li>
              </ul>
            </div>
            <a  class ="dropdown-item" href="" class="see-all" >See All Accessories</a> </div>
          </li>
          <li class="nav-item dropdown">
          <a href="Components.php" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PC Components</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: black;">
            <div class="dropdown-inner" aria-labelledby="navbarDropdown" style="color: black;">
            <ul class="list-unstyled" aria-labelledby="navbarDropdown" style="color: black;">
                <li><a class ="dropdown-item" href="">NVIDIA Graphics Cards</a></li>
                <li><a class ="dropdown-item" href="" >AMD Graphics Cards</a></li>
                <li><a class ="dropdown-item" href="" >Motherboard</a></li>
                <li><a class ="dropdown-item" href="" >RAM</a></li>
                <li><a class ="dropdown-item" href="" >Storage</a></li>
                <li><a class ="dropdown-item" href="" >CPU</a></li>
                <li><a class ="dropdown-item"href="" >CPU Cooler</a></li>
                <li><a class ="dropdown-item" href="" >CASE</a></li>
                <li><a class ="dropdown-item" href="" >Power Supply</a></li>
              </ul>
              </div>
            <a  class ="dropdown-item" href="" class="see-all" >See All PC Components</a> </div>
        </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#"style="overflow: yellow;">Contact Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 frm">
          <input class="form-control mr-sm-2 btn-search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="overflow: yellow;background-color: red; color: white;">Search</button>
        </form>
      </div>
  </nav>
  </div>
  </div>
   <!-- body -->
<div class="container" style="margin-bottom: 150px;">
  <div class="row">
    <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4">
      <img src="Image/apple.jpg" class="">
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <button type="button" class="btn btn-success form-control" style="height: 50px;"><h3>Description</h3></button>
      </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="text-primary">RAM:</p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          16GB,
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="text-primary">CPU:</p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          CoreI5
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="text-primary">Hard Disk:</p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          1T,
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="text-primary">Display:</p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
           14" FHD (1920x1080)
        </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <p class="text-primary">Price:</p>
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
           <h4 class="text-danger">$1,000</h4>
        </div>
      </div>
    <button type="button" class="btn btn-info" style="width: 100px;">Buy</button>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 apple">
        <h3>Apple</h3>
    </div>
  </div>
     <div class="row con-row">
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
          <img src="Image/apple.jpg" class="img-fluid" alt="Image">
          <h3>macbook</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="form-group">
           <a href="description.php" class="form-control btn btn-success"> Description </a>
          </div>
        </div>
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
          <img src="Image/apple.jpg" class="img-fluid" alt="Image">
          <h3>macbook</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="form-group">
           <a href="index.php" class="form-control btn btn-success"> Description </a>
          </div>
        </div>
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
        <img src="Image/apple.jpg" class="img-fluid" alt="Image">
        <h3>macbook</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="form-group">
         <a href="index.php" class="form-control btn btn-success"> Description </a>
        </div>
      </div>
      <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
        <img src="Image/apple.jpg" class="img-fluid" alt="Image">
        <h3>macbook</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="form-group">
         <a href="index.php" class="form-control btn btn-success"> Description </a>
        </div>
      </div>  
    </div>
    <div class="row con-row">
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
          <img src="Image/apple.jpg" class="img-fluid" alt="Image">
          <h3>macbook</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="form-group">
           <a href="index.php" class="form-control btn btn-success"> Description </a>
          </div>
        </div>
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
          <img src="Image/apple.jpg" class="img-fluid" alt="Image">
          <h3>macbook</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.</p>
          <div class="form-group">
           <a href="index.php" class="form-control btn btn-success"> Description </a>
          </div>
        </div>
       <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
        <img src="Image/apple.jpg" class="img-fluid" alt="Image">
        <h3>macbook</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="form-group">
         <a href="index.php" class="form-control btn btn-success"> Description </a>
        </div>
      </div>
      <div  class="col-xs-2 col-sm-2 col-md-3 col-lg-3 row-inside">
        <img src="Image/apple.jpg" class="img-fluid" alt="Image">
        <h3>macbook</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="form-group">
         <a href="index.php" class="form-control btn btn-success"> Description </a>
        </div>
      </div>  
    </div>
  </div>
  <div class="container con">
   <div class="row">
     <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">&raquo;</a>
      </div>
    </div> 
</div
   <!-- End body -->
  
  <footer style="background-color: rgb(48, 48,48); color: white; margin-top: 10px;">
  <div class="container">
    <div class="row">
            <div class="col-sm-3">
        <h5>Information</h5>
        <ul class="list-unstyled">
        </ul>
      </div>
            <div class="col-sm-3">
        <h5>Customer Service</h5>
        <ul class="list-unstyled">
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5>Extras</h5>
        <ul class="list-unstyled">
          <li><a href="#">Brands</a></li>
          <li><a href="#">Gift Vouchers</a></li>
          <li><a href="#">Affiliates</a></li>
          <li><a href="#">Specials</a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5>My Account</h5>
        <ul class="list-unstyled">
          <li><a href="#">My Account</a></li>
          <li><a href="#">Order History</a></li>
          <li><a href="#">Wish List</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>
      </div>
    </div>
    <hr>
     <p>Powered By <a href="#">Gold Web Solution</a><br> PLY COMPUTER © 2020</p>
  </div>
</footer>
 <script type="text/javascript" src="script.js"></script>
      <!-- modal delete -->
      <div class="modal fade" id="confirm-delete">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Warning!</h4>
              <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              Are you sure you want to delete this.
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <a class="btn btn-success btn-ok">Yes</a>
              <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
            </div>
            
          </div>
        </div>
      </div>


<script type="text/javascript">
  $("#vsFadeOff").fadeTo(2000, 500).slideUp(500, function(){
      $("#vsFadeOff").slideUp(500);
      window.location.replace("Userlist.php");
  });
  $("#vsFadeOffUpdate").fadeTo(2000, 500).slideUp(500, function(){
      $("#vsFadeOffUpdate").slideUp(500);      
  });
  
  $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
  });
  $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });


   function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#showImage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgTmp").change(function() {
  readURL(this);

  // ekko-lightbox
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
});
</script>
</body>
</html>