<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>QuicKars</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/mainlogo.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
       <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>
<body>
<div class="loader"></div>
<!-- Start Switcher -->
<!-- /Switcher -->  
        
<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header --> 

<!-- Banners -->
<style type="text/css">
  .title h2{
    color: #ffffff;
    text-align: center;
  }
  .title p{
     color:#f2f2f2;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
  }
  .button{
    margin-top: 25px;
    text-align: center;
  }
  .button .btn{
    border-radius: 5px;
     background: #04dbc0;
  }
  .button .btn:hover{
    background:#9b51e0;
  border: 1px solid #9b51e0;

  }
  .button .btn .angle_arrow i{
    color:#04dbc0;
  }
  .component{
    margin-top:50px;
    padding: 20px 0px;
  }
  .component .choose_us{
    color: #ffffff;
    font-weight: 600;
    font-size:34px;
    text-align: center;
    font-weight: ;
  }
  .images h3{
    color: #ffffff;
    font-size: 18px;
    font-weight: 900;
  }
  .service h3{
    text-align: center;
  }
  .tag{
    text-align: center;
  }
  .description p{
    text-align: center;
  }
  .car_image{
    margin-left:80px;
    margin-bottom: 20px;
  }
  .smile_image{
    margin-left:90px;
    margin-bottom: 20px;
  }
  .love_image{
    margin-left:110px;
    margin-bottom: 20px;
  }
  .car_text{
    margin-left: 15px;
    color: #ffffff;
    font-weight: 800;
  }
  .support_service{
    margin-left:80px;
    margin-top:-30px;
  }
  .support{
    margin-top: -30px;
    background-color: #5856D6;
    min-height:65vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: stretch;

  }
  .home {
  height: 100vh;
  position: relative;
}
video {
  object-fit: cover;
  position: absolute;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 1;
}
.over{
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
  background: rgba(0,0,0,0.6);
}
.home-content {

  width: 600px;
  margin: 0 auto;
  position: relative;
  top: 200px;
  color: #fff;
  z-index: 3;
}
.home-content h1 {
  color: #ffffff;
  font-weight:1000;
  text-align: center;
  text-transform: uppercase;
  font-size: 35px;
  line-height: 1.1;
}
.home-content p{
  color: #e6e6e6;
  width: 800px;
  margin-left: -80px;
  margin-top: 20px;
  margin-bottom: 25px;
}
.home-content h3{
  color: #ffffff;
  text-align: center;
  font-weight: 400;
  margin-top: 25px;
}
.home-content button {
  display: block;
  font-size: 20px;
  border: 1px solid #f1f1f1;
  border-radius: 5px;
  background: #04dbc0;
  color: #fff;
  margin: 50px auto 0;
  padding: 16px 30px;
  cursor: pointer;
}
.home-content button:hover{
  background:#9b51e0;
  border: 1px solid #9b51e0;
}
  .home-content button a{
    text-decoration: none;
    color: #ffffff;
  }
</style>
<section id="banner" class="banner-section">
  <div class="container">
        <div class="title">
      <h2>THE EASY WAY TO TAKEOVER A LEASE</h2>
      <p>From as low as <i class="fa fa-inr" aria-hidden="true"></i>  999 per day with limited time offer discounts</p>  
    </div>
      <div class="button">
       <a href="#cars" class="btn">Explore More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
      </div>
 
</section>
<!-- /Banners --> 
<div class="container" style="margin-top:50px;" id="cars" data-aos="fade-left" data-aos-duration="3000">
  <div class="service"><h3>First Class Car Rental & Limousine Services</h3></div>
  <div class="description"><p>We offer professional car rental & limousine services in our range of high-end vehicles</p></div>
</div>
<section>
  <div class="container" style="margin-top:-100px" data-aos="fade-up" data-aos-duration="3000">
  <div class="section-padding">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"><a href="vehicle-info.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul class="images">
<li><h3><?php echo htmlentities($result->BrandName);?></h3></li>
</ul>
</div>
</div>
</div>
<?php }}?>
       
      </div>
    </div>
  </div>
</div>
</div>
</section>
<section style="margin-top:-10px" data-aos="fade-up" data-aos-duration="3000">
  <div class="home">
        <video autoplay muted loop>
          <source src="assets/images/video.mp4" type="video/mp4" />
        </video>
        <div class="over"></div>
        <div class="home-content">
          <h1>Our Fleet, Your Fleet</h1>
          <p>We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality and good taste, to offer you an unique experience</p>
          <h3>Call Now +91 7013189730</h3>
          <button><a href="car-listing.php">DISCOVER</a></button>
        </div>
      </div>
</section>

  <section class="support" data-aos="fade-up" data-aos-duration="3000">
  <div class="component">
    <h2 class="choose_us">Why choose us</h2>
    <p class="tag">Explore our first class limousine & car rental services</p>
  </div>
  <div class="support_service">
  <div class="container" style="margin-top:30px;">
    <div class="row">
      <div class="col-sm-4">
       <img src="assets/images/car1.png" width="25%" class="car_image">
       <h4 class="car_text">Variety of Brands</h4>
       <p class="car_description">We Provide various brands to customers</p>
      </div>
      <div class="col-sm-4" style="margin-top:17px">
        <img src="assets/images/smile1.png" width="18%" class="smile_image">
        <h4 class="car_text" >Best Rate Guranttee</h4>
        <p>We have best rated and gurantted cars</p>
      </div>
      <div class="col-sm-4">
       <img src="assets/images/support.png" width="20%" class="love_image">
       <h4 class="car_text">Awesome customer support</h4>
       <p class="car_description">We receive awesome customer support</p>
      </div>
      
    </div>
    
  </div>
</div>
</section>



<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell" data-aos="fade-right" data-aos-duration="3000">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>05+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell" data-aos="fade-right" data-aos-duration="3000">
            <h2><i class="fa fa-car" aria-hidden="true"></i>400+</h2>
            <p>Cars are available</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell" data-aos="fade-left" data-aos-duration="3000">
            <h2><i class="fa fa-car" aria-hidden="true"></i>200+</h2>
            <p>Used Cars For rent</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell" data-aos="fade-left" data-aos-duration="3000">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>500+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
  
 
<!-- /Testimonial--> 
<div class="container" style="margin-top:40px;margin-bottom: -10px;" id="cars">
  <div class="service"><h3>Testimonials</h3></div>
</div>

<?php include('includes/testimonial.php');?>
<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Back to top-->
<div id="back-top" class="back-top" > <a href="#top" style="background-color: #04dbc0;"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>