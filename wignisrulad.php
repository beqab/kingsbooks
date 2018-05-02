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

  <?php
  session_start();

    $book_id=$_GET["item_id"];
      if($book_id!="eng"&&$book_id!="engFin"&&$book_id!="geo"&&$book_id!="geoFin"&&$book_id!="geoMass"&&$book_id!="mth"&&$book_id!="mth600"&&$book_id!="mthFin")
          header('Location:'."index.php");

    require("books_text.php");
  ?>

<style type="text/css">




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


  <script>
      var item_id="<?php echo $_GET['item_id'];?>";
  </script>

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
             <div class="right_side d-flex align-items-center">
                 
                      <div class="kalata">
                        <a href="kalata.html">
                        <img src="images/shop.png"><span>კალათა: </span> <span class="packet_item" >2</span>
                        </a>
                      </div>
                      <div class="profile">
                        <a href="profili.html">
                       <img src="images/fingerprint.png">
                         <span>პროფილი</span> 
                         </a>
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
      <input class="form-control mr-sm-2" type="text" placeholder="ძებნა">
      <button class="btn  my-2 my-sm-0" type="button">
         <img src="images/search.png">
      </button>
    </form>
  </div>
</nav>

      </div>
    </header>


    <section class="more_books">
         <div class="container">
            <div class="row">
               <div class="col-md-auto d-md-block d-flex align-items-start justify-content-between col-12 text-md-left text-center ">
                   <img class="more_books_img " src=<?php echo "'book_images/".$_GET["item_id"]."/default.png'"?> id="book_image">

                    <div class="d-flex d-md-none align-items-start justify-content-start">
  <div class="d-flex flex-column align-items-center add_block_b">
    <div class="price"><span> 20.00 </span> ₾</div>
    <div class="add_book">
      <i class="fas fa-minus minus_book"></i> <input value="1" type="" name="" class="book_val"> <i class="fas fa-plus plus_book"></i> 
    </div>
    <a class="buy_b"> ყიდვა </a>
    <a href="" class="add_b d-flex align-items-center">
       <img src="images/shb.png">
       <span class="text-center" >
      კალათაში <br>
              დამატება </span>  </a>
  </div>


 </div>
               </div>
               <div class="col-md-6 col-12 book_info">
                    <?php
                      echo get_item_text($_GET["item_id"]);
                    ?>
               </div>
               <div class="col-md-2 d-none d-md-flex align-items-end ">
 <div class="d-flex align-items-center">
  <div class="d-flex flex-column align-items-center add_block_b">
      <select id="book_class">
        <option selected hidden>აირჩიეთ კლასი</option>
        <option>2 კლასი</option>
        <option>3 კლასი</option>
        <option>4 კლასი</option>
        <option>5 კლასი</option>
        <option>6 კლასი</option>
      </select> 
    <a class="buy_b" style="cursor:pointer;" id="buying_item"> ყიდვა </a>
    <a class="add_b d-flex align-items-center" id="add_to_kalata" style="cursor:pointer;">
       <img src="images/shb.png">
       <span class="text-center">
      კალათაში <br>
              დამატება </span>  </a>
  </div>


 </div>

 <script type="text/javascript">
      $("#add_to_kalata").click(function(e){
          if($("#book_class").val()=="აირჩიეთ კლასი"){alert("გთხოვთ აირჩიოთ კლასი");return;}

          $.post('update_kalata.php', {buy_now:0,itemId:item_id,item_comment:$("#book_class").val()}, function(data){
             if(data=="succ")location.href="wignisrulad.php?item_id="+item_id;
              else alert("დაფიქსირდა შეცდომა");
          });

      })

      $('#buying_item').click(function(e){
          if($("#book_class").val()=="აირჩიეთ კლასი"){alert("გთხოვთ აირჩიოთ კლასი");return;}
          $.post('update_kalata.php', {buy_now:1,itemId:item_id,item_comment:$("#book_class").val()}, function(data){
              if(data=="succ")location.href="shekveta.php";
              else alert("დაფიქსირდა შეცდომა");
          });
      })

      $('#book_class').on('change', function() {
         $("#book_image").attr("src","book_images/"+item_id+"/"+this.value+".png");
      })


     $('.plus_book').click(function(){

      var valinp=Number($('.book_val').val())
           $('.book_val').val(valinp+=1)
           console.log(valinp)
     })

      $('.minus_book').click(function(){

      var valinp=Number($('.book_val').val())
       if(valinp>1){
           $('.book_val').val(valinp-=1)
           console.log(valinp)
         }

     })
 </script>
               </div>
            </div>
         </div>
         <div class="container coments_block">
             <div class="row">
                   <div class="mb-3 ml-5">კომენტარები</div>
                   <div class="coment col-md-12 d-flex  align-items-start ">
                   
                     <i class="fas fa-user-circle"></i>
                      <div>
                        
                         <div class="name">სახელი</div>
                         <div class="coment_text">კომენტარი რგ ბლა ბფსდდცს</div>
                      </div>
                    
                   </div>
                        <div class="coment col-md-12 d-flex  align-items-start ">
                   
                     <i class="fas fa-user-circle"></i>
                      <div>
                        
                         <div class="name">სახელი</div>
                         <div class="coment_text">კომენტარი რგ ბლა ბფსდდცს</div>
                      </div>
                    
                   </div>
                        <div class="coment col-md-12 d-flex  align-items-start ">
                   
                     <i class="fas fa-user-circle"></i>
                      <div>
                        
                         <div class="name">სახელი</div>
                         <div class="coment_text">კომენტარი რგ ბლა ბფსდდცს</div>
                      </div>
                    
                   </div>

                   <div  class="col-md-12 mt-5 add_coment">
                            <form class="d-flex align-items-center justify-content-between">
                                <textarea class=""></textarea>
                                <button>გაგზავნა</button>
                            </form>
                   </div>
             </div>
         </div>
    </section>


<footer>
   <div class="container d-flex justify-content-between">
       <div class="left_side col-md-6">
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
       <div class="right_side  col-md-6">
           <div class="social_icons">
              <a href="#" class="fab fa-facebook"></a>
              <a href="#" class="fab fa-youtube"></a>
           </div>
           <p class="mb-0">© კინგსი 2017. ყველა უფლება დაცულია</p>
       </div>
   </div>


</footer>
</body>
</html>