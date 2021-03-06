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
  <?php
  session_start();
  ?>
    <header>
        <div class="top_heder_bg">
             <div class="top_header d-flex align-items-center justify-content-between container" >
             <div class="left_side">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                       <a class="active" href="index.html">წიგნები</a>
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

<section class="Basket">
           <div id="Basket">
               <div class="container">
                   <div class="row">
                    <div class="col-md-12 d-md-block d-none">
                      <div class="book_item_title row">
                          <div class="col-md-4">
                            პროდუქტი
                          </div>
                            <div class="col-md-3">
                            ფასი
                          </div>
                            <div class="col-md-3">
                             რაოდენობა
                          </div>
                           <div class="col-md-2">
                             ღირებულება
                          </div>
                        </div>
                      </div>
                          <div class="col-md-12 produt_box_sh">
                            <div class="book_item row d-flex align-items-center justify-content-center">
                          <div class="book_item_k col-md-4 col-sm-5 col-4 d-flex">
                            <img src="images/bbboo.png">
                            <span class="mt-md-3 m-0">ტესტები <br>
                                ინგლისურ ენაში</span>
                          </div>
                            <div class="col-md-3 col-sm-2 col-2 item_price_b">
                             <span >
                                 <sapn class="item_price">25.00</sapn> ₾
                             </span>
                          </div>
                            <div class="col-sm-3 col-3">
                               <div class="add_bookk">
      <i class="fas fa-minus minus_book"></i> <input value="1" type="" name="" class="book_val"> <i class="fas fa-plus plus_book"></i> 
    </div>
                          </div>
                           <div class="col-sm-2 col-2 d-flex align-items-center justify-content-between" >
                             <span >
                               <span class="item_price_sum" > 25.00 </span>
                               ₾ 
                             </span>

                             <span class="delet_itemb fas fa-times"></span>
                          </div>
                        </div>
                       
  <div class="book_item row d-flex align-items-center justify-content-center">
                          <div class="book_item_k col-md-4 col-sm-5 col-4 d-flex">
                            <img src="images/bbboo.png">
                            <span class="mt-md-3 m-0">ტესტები <br>
                                ინგლისურ ენაში</span>
                          </div>
                            <div class="col-md-3 col-sm-2 col-2 item_price_b">
                             <span >
                                 <sapn class="item_price">20.00</sapn> ₾
                             </span>
                          </div>
                            <div class="col-sm-3 col-3">
                               <div class="add_bookk">
      <i class="fas fa-minus minus_book"></i> <input value="1" type="" name="" class="book_val"> <i class="fas fa-plus plus_book"></i> 
    </div>
                          </div>
                           <div class="col-sm-2 col-2 d-flex align-items-center justify-content-between" >
                             <span >
                               <span class="item_price_sum" > 20.00 </span>
                               ₾ 
                             </span>

                             <span class="delet_itemb fas fa-times"></span>
                          </div>
                        </div>

                        <div class="row">

                           <div class="col-12 d-flex align-items-end flex-column bbg">
                               <div>მიტანის ღირებულება: <sapn class="shipping">5</sapn> ლარი</div>

                               <div >
                                   სულ ჯამში : <span class="all_items_price">50</span> ₾
                               </div>
                           </div>
                          
                        </div>
  

                      </div>

                      <div class="col-12 text-right reseand_books">
                          <button>შეკვეთა</button>
                      </div>
                     
                   </div>
               </div>
           </div>

           <script type="text/javascript">
          var itemebisjamuripasi=[]

//             function gogo(th){
//                  $('.book_item').each(function(){
                            
//                       var itemPRCE =   Number( .parent('.book_item').find('.item_price').text() );
//                       var itemPoints=  Number($(this).find('input').val() );
                   
//                       var itemSum = $(this).find('.item_price_sum').text((itemPRCE*itemPoints).toFixed(2));

//                       var sum =  Number($('.all_items_price').text())
//                             console.log( sum )
//                       $('.all_items_price').text(sum=itemPRCE*itemPoints)
//                  });

// console.log(itemPRCE)

// }





                $('all_items_price').text()
           </script>
</section>
<footer>
   <script type="text/javascript">
    
     $('.plus_book').each(function(){
             $(this).click(function(){

      var valinp=Number($(this).siblings('input').val())
           $(this).siblings('input').val(valinp+=1)


   var item_price_sum=$(this).parents('.book_item').find('.item_price_sum').text();
   var item_price=$(this).parents('.book_item').find('.item_price').text();
var all =Number(item_price_sum) + Number(item_price)
var newsum=item_price_sum*1+item_price*1;
var allpriceold=$('.all_items_price').text()
var allpricesum=allpriceold*1+item_price*1
item_price_sum=$(this).parents('.book_item').find('.item_price_sum').text(newsum.toFixed(2))
           // console.log(valinp)
            // gogo()
            $('.all_items_price').text(allpricesum)

                 });          
     })




     $('.minus_book').each(function(){
             $(this).click(function(){

      var valinp=Number($(this).siblings('input').val())
       if(valinp>1){
          $(this).siblings('input').val(valinp-=1)
           var item_price_sum=$(this).parents('.book_item').find('.item_price_sum').text();
   var item_price=$(this).parents('.book_item').find('.item_price').text();
var all =Number(item_price_sum) + Number(item_price)
var newsum=item_price_sum*1-item_price*1;
var allpriceold=$('.all_items_price').text()
var allpricesum=allpriceold*1-item_price*1
item_price_sum=$(this).parents('.book_item').find('.item_price_sum').text(newsum.toFixed(2))
           // console.log(valinp)
            // gogo()
            $('.all_items_price').text(allpricesum)
         }

     })




     

     })


$('.delet_itemb').each(function(){
     $(this).click(function(){
         // $(this).remove()
     var thissumprice =  $(this).parents('.book_item').find('.item_price_sum').text();

     var allll=$('.all_items_price').text()
     var nnnn=allll*1-thissumprice*1;
     $('.all_items_price').text(nnnn);
       $(this).parents('.book_item').remove();
         if($('.book_item ').length <=0){
         console.log($('.book_item ').length);
          $('.all_items_price').text(0);
          $('.shipping').text(0);
     }
     })
   
})
     // console.log($('.item_price_sum').text())
 </script>
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