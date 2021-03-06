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
    $_SESSION["buy_now"]=0;
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
</head>
<body>
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

<section class="order">
  <div class="text-center">
             <select class="m-auto ct_select" id="town_selector">
                <option>ქალაქი</option>
                <option>თბილისი</option>
                <option>ქუთაისი</option>
                <option>რუსთავი</option>
                <option>ბათუმი</option>
                <option>სხვა</option>
                <option>სხვა</option>
                <option>სხვა</option>
                <option>სხვა</option>
                <option>სხვა</option>
                <option>სხვა</option>
             </select> 

  </div>


  <div style="height: 400px;">
    <form class="bbff" style="display: none;">
      <div style="max-width: 340px" class="container">
        <div style="color: #0056b3" class="text-center">
        <a style="color: #0056b3" class="text-center" href=""> ბარათით გადახდა </a>
      </div>
      <div class="payment_title text-center font-weight-bold mb-2">
        გადახდის მეთოდები
      </div>
      <div class="pay_method d-flex  justify-content-between mb-2 " >
        <a id="adgilze_gadaxda" class="d-flex align-items-center" href="#"><div class="circule"></div> <span>ადგილზე გადახდა</span></a>
        <a id="balansit_gadaxda" class="d-flex align-items-center " href="#"><div class="circule"></div><span>ბალანსით გადახდა</span></a>
      </div>
 </div>
 <div class="adgilze text-center font-weight-bold d-flex align-content-center justify-content-center">
  <span>
   თანხას გადაიხდით ადგილზე  მას შემდეგ, რაც კურიერი მოგიტანთ ნივთს
 </span>
 </div>

  <div style="max-width: 340px" class="container mt-2">

      <div >
        
          <div class="d-flex mb-2 justify-content-between">
              * <input class="procent46" type="" placeholder="მშობლის სახელი" name="" id="parent_name">
              * <input class="procent46" type="" placeholder="მშობლის გვარი" name="" id="parent_lastname">
          </div>
          <div class="d-flex mb-2">
            * <input style="margin-left: 4px;" class="procent46" type="number" placeholder="ტელეფონის ნომერი" name="" id="mobile_number">
          </div>
            <div class="d-flex mb-3">
            * <input style="margin-left: 4px;" class="w-100" type="" placeholder="ქუჩა/ბინის ნომერი" name="" id="address">
          </div>
          <div class="d-flex">
          <textarea style="margin-left: 10px;" class="w-100" value="კომენტარი" id="comment"></textarea>
          </div>
          <div class="text-right">
             <button class="submit_order">დადასტურება</button>
          </div>
      </div>


  </div>
  </form>
</div>
</section>
<div class="pop_b d_none d-flex flex-column align-items-center justify-content-around">
  <i class=" cancel_pop fas fa-times"></i>
    <p class="text-center" id="error_message"></p>
    <a class="text-center d-inline-block" href="#">ბალანსის შევსება</a>
</div>

<div class="Success  d_none d-flex flex-column align-items-center justify-content-around">
 
    <p class="text-center">გადახდა წარმატებით განხორციელდა</p>
</div>
<script type="text/javascript">
  var adgilzeTubalansiT= false;
    var curentCT= false;
    $('.ct_select').change(function(){

             $('.bbff').slideDown();

            if($(this).val() == 'თბილისი' || $(this).val() == 'რუსთავი' || $(this).val() == 'ქუთაისი'  || $(this).val() == 'ბათუმი') {
                  curentCT=true; 
                  $('.payment_title').text('გადახდის მეთოდები');

                  if($('.pay_method ').hasClass('d_none')){
                    $('.pay_method ').removeClass('d_none');
                    $('.adgilze  ').removeClass('d_none');
                  }
                  adgilzeTubalansiT=false;
                  console.log(curentCT)
                   $('#adgilze_gadaxda').find('.circule').css('background','#2E6583')
          $('#balansit_gadaxda').find('.circule').css('background','#fff')
            $('.adgilze').removeClass('d_none');
            adgilzeTubalansiT=false;
            }
           else {
                  curentCT=false; 
                  console.log(curentCT) 
                  $('.payment_title').text('ბალანსით გადახდა');
                
                  if(!($('.pay_method ').hasClass('d_none'))){
                    $('.pay_method ').addClass('d_none');
                    $('.adgilze').addClass('d_none');
                  }
                  adgilzeTubalansiT=true;

            }




    })
    $('#adgilze_gadaxda').click(function(){
          $(this).find('.circule').css('background','#2E6583')
          $('#balansit_gadaxda').find('.circule').css('background','#fff')
            $('.adgilze').removeClass('d_none');
            adgilzeTubalansiT=false;
    })
       $('#balansit_gadaxda').click(function(){
          $(this).find('.circule').css('background','#2E6583')
          $('#adgilze_gadaxda').find('.circule').css('background','#fff')
            $('.adgilze').addClass('d_none');
            adgilzeTubalansiT=true;
    })


    $('.submit_order').click(function(e){
        e.preventDefault()

        var town1=$("#town_selector").val();
        var name1=$("#parent_name").val();
        var lastname1=$("#parent_lastname").val();
        var mobile1=$("#mobile_number").val();
        var address1=$("#address").val();
        var comment1=$("#comment").val();

        

    if(name1==""){araasakmarisi("გთხოვთ მიუთითოთ მშობლის სახელი");return;}
    if(lastname1==""){araasakmarisi("გთხოვთ მიუთითოთ მშობლის გვარი");return;}

    if(mobile1.length!=9){araasakmarisi("ტელეფონის ნომერი 9 ციფრისგან უნდა შედგებოდეს");return;}
    if(mobile1[0]!='5'){araasakmarisi("ტელეფონის ნომერი 5-ით უნდა იწყებოდეს");return;}

    if(address1==""){araasakmarisi("გთხოვთ შეავსოთ მისამართის ველი");return;}


    var pay_type="";

    if(adgilzeTubalansiT){
      // ბალანსით გადახდისას მოვდივართ აქ
              pay_type="ბალანსით";
          }else{
              pay_type="ადგილზე";
          }

    $.post('receive_order.php', {town:town1,name:name1,lastname:lastname1,mobile:mobile1,address:address1,comment:comment1,payType:pay_type}, function(data){
                    if(data=="succ")Success();
                    else araasakmarisi(data);
              });

    })

// გადახდის წარმატებისტ შესრულების შემთხვევაში ეშვება ეს ფუნქცია
    function Success(){

       $('.Success').removeClass('d_none')
       setTimeout(function(){   $('.Success').addClass('d_none')},2000);
    }
// თანხა არ არის საკმარისი ეშვება

function araasakmarisi(msg){
   $("#error_message").html(msg);
   $('.pop_b').removeClass('d_none')
}





    $('.cancel_pop').click(function(){
        $(this).parent('.pop_b').addClass('d_none')
    })
</script>
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