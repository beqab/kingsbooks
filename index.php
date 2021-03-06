<!DOCTYPE html>
<html>
<head>
  <title>books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
<!-- owl -->
  <!-- <link rel="stylesheet" href="css/docs.theme.min.css"> -->

   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- ******** -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

   <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="js/jssor.slider.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">


<?php
  session_start();
  if(isset($_SESSION["kalata"])==0)$_SESSION["kalata"]=[];

?>

.carousel-fade .carousel-item {
  display: block;
  position: absolute;
  opacity: 0;
  transition: opacity .75s ease-in-out;
}
.carousel-fade .carousel-item.active {
  opacity: 1;
  z-index: 3;
}

html,
body,
.carousel,
.carousel-inner,
.carousel-item {
  width: 100%;
  height: 100%;
}

.carousel {
  position: relative;
  top: 0;
  left: 0;
}


</style>
</head>
<body>
    <header>
        <div class="top_heder_bg">
             <div class="top_header d-flex align-items-center justify-content-between container" >
             <div class="left_side">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                       <a class="active" href="index.php">წიგნები</a>
                    </li>
                    <li class="list-inline-item">
                       <a href="aqsesuarebi.html">აქსესუარები</a>
                    </li>
                </ul>
             </div>
             <div class="right_side  d-flex align-items-center">
              <!-- tu regtrirebuli   -->
              <div style="height: 24px; line-height: 24px;" class="">
                       <a style="height: 24px; line-height: 24px;" class="mr-md-4 mr-2 " href="#">ბალანსი: <span> 20.00</span> ₾</a>
                       </div>
                       <!-- *** -->
                      <div class="kalata mr-md-4 mr-2">
                        <a href="kalata.html">
                        <img src="images/shop.png"><span>კალათა: </span> <span class="packet_item" >2</span>
                        </a>
                      </div>
                      <div class="profile">
                       <!--  <a href="profili.html">
                       <img src="images/fingerprint.png">
                         <span>პროფილი</span> 
                         </a> -->
                        <!-- tu regtrirebuli   -->
                        <a href="#">გამარჯობა, <span>გივი</span></a>
                        <!--  -->
                      </div>
                  
             </div>
        </div>
        </div>
      <div class="container">
       
         <nav class="navbar navbar-expand-lg " style="margin:8px 0;">
  <a class="navbar-brand" href="javascript:void(0)"><img src="images/ki.png"></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="aqciebi.html">აქციები</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chvenshesaxeb.html">ჩვენს შესახებ</a>
      </li>
        <li class="nav-item">
        <a class="active" class="nav-link" href="instruqcia.html">ინსტრუქცია</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="ძებნა" required>
      <button class="btn  my-2 my-sm-0" type="button">
         <img src="images/search.png" >
      </button>
    </form>
  </div>
</nav>

      </div>
    </header>
<!--     <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner container">
    <div class="carousel-item active">
      
      <div class="carousel-caption">
        <h3>შეიძინე ფინალისტების წიგნი და ბროშურა, </h3>
        <div>დაზოგე 2ლარი </div>
        <div>17 ლარი</div>
        <div>15 ლარი</div>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="ny.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 -->
 <div class="slider_bg">
 <div style="height: 350px" class="container">
 <div data-ride="carousel" class="carousel carousel-fade" id="carousel-example-captions">
 <!--    <ol class="carousel-indicators">
      <li class="active" data-slide-to="0" data-target="#carousel-example-captions"></li>
      <li data-slide-to="1" data-target="#carousel-example-captions" class=""></li>
      <li data-slide-to="2" data-target="#carousel-example-captions" class=""></li>
    </ol> -->
    <div role="listbox" class="carousel-inner">
      <div class="carousel-item active">

        <img class="slider_img" src="images/books.png">
        <div class="carousel-caption">
          <a class="sldier_link_over"  href=""></a>
          <div class="slider_caption">
         <h3 class="slider_title">შეიძინე ფინალისტების წიგნი და ბროშურა, </h3>
        <div class="slider_title_continue">დაზოგე 2ლარი </div>
        <div class="old_price">17 ლარი</div>
      </div>
        <div class="new_price">15 ლარი</div>
        </div>
      </div>
      <div class="carousel-item">
         <img class="slider_img" src="images/books3.png">
        <div class="carousel-caption">
           <a class="sldier_link_over"  href=""></a>
          <div class="slider_caption">
         <h3 class="slider_title">შეიძინე ფინალისტების წიგნი და ბროშურა, </h3>
        <div class="slider_title_continue">დაზოგე 8ლარი </div>
        <div class="old_price">40 ლარი</div>
      </div>
        <div class="new_price">32 ლარი</div>
        </div>
      </div>
      <div class="carousel-item">
         <img class="slider_img" src="images/books3.png">
        <div class="carousel-caption">
           <a class="sldier_link_over"  href=""></a>
       <div class="slider_caption">
         <h3 class="slider_title">შეიძინე მასიური წიგნების კრებული და ფინალისტების
 </h3>
        <div class="slider_title_continue"> წიგნი 32 ლარის ნაცვლად 27 ლარად </div>
        <div class="old_price">17 ლარი</div>
      </div>
        <div class="new_price">15 ლარი</div>
        </div>
      </div>
    </div>
    <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control">
      <span aria-hidden="true" class="fas fa-angle-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control">
      <span aria-hidden="true" class="fas fa-angle-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<section class="mane_page_section">
  <h3 class="container"> <div class="row"> <div class="col-12 text-md-left text-center"> ქართული ენა</div></div></h3>
    <article >
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=geo';">
                       <img src="book_images/geo/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                        <br><br>
                            <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=geoFin';">
                       <img src="book_images/geoFin/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
             <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=geoMass';">
                       <img src="book_images/geoMass/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
     <h3 class="container"> <div class="row"> <div class="col-12 text-md-left text-center"> მათემატიკა</div></div></h3>
    <article >
        <div class="container">
            <div class="row">
               <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=mth';">
                       <img src="book_images/mth/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
              <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=mthFin';">
                       <img src="book_images/mthFin/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=mth600';">
                       <img src="book_images/mth600/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
     <h3 class="container"> <div class="row"> <div class="col-12 text-md-left text-center">ინგლისური ენა</div></div></h3>
    <article >
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=eng';">
                       <img src="book_images/eng/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="book_buy_item" onclick="document.location='wignisrulad.php?item_id=engFin';">
                       <img src="book_images/engFin/default.png" width="148" height="211">
                       <div class="hoverbg">
                       <div  class="d-flex flex-column align-items-center hover_block">
                          <br><br>
                          <img src="images/plop.png">
                          <span><span>20.00</span>₾</span>
                       </div>
                     </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<footer>
   <div class="container d-flex justify-content-between">
       <div class="left_side">
          <ul class="list-unstyled mb-0">
             <li class="d-flex align-items-center">
               <img src="images/ph.png">
               <span>ცხელი ხაზი: (032) 2 30 61 31</span>
             </li>
              <li class="d-flex align-items-center">
               <img src="images/en.png">
               <span>ელ-ფოსტა: info@kings.ge</span>
             </li>
              <li class="d-flex align-items-center">
               <img src="images/ck.png">
               <span>სამუშაო საათები: ორშაბათი-პარასკევი: 10:00 - 19:00</span>
             </li>
              <li class="d-flex align-items-center">
               <img src="images/loc.png">
               <span>მისამართი: ცოტნე დადიანის #7 "ქარვასლა" - B307</span>
             </li>
          </ul>
       </div>
       <div class="right_side">
           <div class="social_icons">
              <a href="#" class="fab fa-facebook"></a>
              <a href="#" class="fab fa-youtube"></a>
           </div>
           <p class="mb-0">© კინგსი 2018. ყველა უფლება დაცულია</p>
       </div>
   </div>
  

</footer>
</body>
</html>