	@extends('layout')
  
	@section('content')
   <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Montserrat=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
<style>

.mastheadss {
  height: 50vh;
  min-height: 300px;
  background-image: url('/images/e.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
 
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding-top:20px;
  text-align: center;
  font-family: 'Ma Shan Zheng', cursive;
}
.holderCircle { width: 500px; height: 500px; border-radius: 100%; margin: 60px auto; position: relative; }


.dotCircle { width: 100%; height: 100%; position: absolute; margin: auto; top: 0; left: 0; right: 0; bottom: 0; border-radius: 100%; z-index: 20; }
.dotCircle  .itemDot { display: block; width: 80px; height: 80px; position: absolute; background: #ffffff; color: #7d4ac7; border-radius: 20px; text-align: center; line-height: 80px; font-size: 30px; z-index: 3; cursor: pointer; border: 2px solid #e6e6e6; }
.dotCircle  .itemDot .forActive { width: 56px; height: 56px; position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: none; }
.dotCircle  .itemDot .forActive::after { content: ''; width: 5px; height: 5px; border: 3px solid #7d4ac7; bottom: -31px; left: -14px; filter: blur(1px); position: absolute; border-radius: 100%; }
.dotCircle  .itemDot .forActive::before { content: ''; width: 6px; height: 6px; filter: blur(5px); top: -15px; position: absolute; transform: rotate(-45deg); border: 6px solid #a733bb; right: -39px; }
.dotCircle  .itemDot.active .forActive { display: block; }
.round { position: absolute; left: 40px; top: 45px; width: 410px; height: 410px; border: 2px dotted #a733bb; border-radius: 100%; -webkit-animation: rotation 100s infinite linear; }
.dotCircle .itemDot:hover, .dotCircle .itemDot.active { color: #ffffff; transition: 0.5s;   /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7d4ac7+0,a733bb+100 */ background: #7d4ac7; /* Old browsers */ background: -moz-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* FF3.6-15 */ background: -webkit-linear-gradient(left, #7d4ac7 0%, #a733bb 100%); /* Chrome10-25,Safari5.1-6 */ background: linear-gradient(to right, #7d4ac7 0%, #a733bb 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */ filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d4ac7', endColorstr='#a733bb', GradientType=1); /* IE6-9 */ border: 2px solid #ffffff; -webkit-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); -moz-box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); box-shadow: 0 30px 30px 0 rgba(0, 0, 0, .13); }
.dotCircle .itemDot { font-size: 40px; }
.contentCircle { width: 250px; border-radius: 100%; color: #222222; position: relative; top: 150px; left: 50%; transform: translate(-50%, -50%); }
.contentCircle .CirItem { border-radius: 100%; color: #222222; position: absolute; text-align: center; bottom: 0; left: 0; opacity: 0; transform: scale(0); transition: 0.5s; font-size: 15px; width: 100%; height: 100%; top: 0; right: 0; margin: auto; line-height: 250px; }
.CirItem.active { z-index: 1; opacity: 1; transform: scale(1); transition: 0.5s; }
.contentCircle .CirItem i { font-size: 180px; position: absolute; top: 0; left: 50%; margin-left: -90px; color: #000000; opacity: 0.1; }
@media only screen and (min-width:300px) and (max-width:599px) {
  .holderCircle { width: 300px; height: 300px; margin: 110px auto; }
  .holderCircle::after { width: 100%; height: 100%; }
  .dotCircle { width: 100%; height: 100%; top: 0; right: 0; bottom: 0; left: 0; margin: auto; }
}
@media only screen and (min-width:600px) and (max-width:767px) { }
@media only screen and (min-width:768px) and (max-width:991px) { }
@media only screen and (min-width:992px) and (max-width:1199px) { }
@media only screen and (min-width:1200px) and (max-width:1499px) { }
  .title-box .title { font-weight: 600; letter-spacing: 2px; position: relative; z-index: -1; }
        .title-box span { text-shadow: 0 10px 10px rgba(0, 0, 0, .15); font-weight: 800; color: #640178; }
        .title-box p {font-size: 17px; line-height: 2em; }
</style>
<header class="mastheadss">
<div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
 <div class="bg-text">

 
  <h1 style="font-size:50px">Contact</h1>
 
</div>

</div>
</div>
</div>
</header>
 <div class="container">
<section class="iq-features">
           
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-12"></div>
                  <div class="col-lg-6 col-md-12">
                     <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                          
                           <span class="itemDot active itemDot2" data-tab="2">
                           <i class="fa fa-comments"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot3" data-tab="3">
                           <i class="fa fa-user"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot4" data-tab="4">
                           <i class="fa fa-tags"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot5" data-tab="5">
                           <i class="fa fa-upload"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot6" data-tab="6">
                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                           </span>
                        </div>
                        <div class="contentCircle">
                           
                           <div class="CirItem title-box active CirItem2">
                              <h2 class="title"><span> Contact </span></h2>
                              <p>You can contact us by calling at +9779860025555 or email us at versacenevein@gmail.com</p>
                              <i class="fa fa-comments"></i>
                           </div>
                           <div class="CirItem title-box CirItem3">
                              <h2 class="title"><span>Responses</span></h2>
                              <p>We ask each of our customers to rate the company that provided their car. Check the scores - and make the right choice.</p>
                              <i class="fa fa-user"></i>
                           </div>
                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>Tags</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-tags"></i>
                           </div>
                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>Upload</span></h2>
                              <p>You can upload your car for rent without any problem and also rent a car if you need.</p>
                              <i class="fa fa-upload"></i>
                           </div>
                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>Support</span></h2>
                              <p>Customer can call any time for the inquirey or information about renting a car giving you car on rent.</p>
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12"></div>
               </div>
           
        </section>
 </div>
<div>
        {!! $map['js'] !!}
   
    <div class="container">
    	<h1 style="font-size:50px; font-family: 'Ma Shan Zheng', cursive; text-align: center;" >Our Offices</h1>
            {!! $map['html'] !!}
            <div id="directionsDiv"></div>
    </div>
     <div id="map"></div>
   </div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
   <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<script type="text/javascript">
  
  let i=2;

  
  $(document).ready(function(){
    var radius = 200;
    var fields = $('.itemDot');
    var container = $('.dotCircle');
    var width = container.width();
 radius = width/2.5;
 
     var height = container.height();
    var angle = 0, step = (2*Math.PI) / fields.length;
    fields.each(function() {
      var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
      var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
      if(window.console) {
        console.log($(this).text(), x, y);
      }
      
      $(this).css({
        left: x + 'px',
        top: y + 'px'
      });
      angle += step;
    });
    
    
    $('.itemDot').click(function(){
      
      var dataTab= $(this).data("tab");
      $('.itemDot').removeClass('active');
      $(this).addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+ dataTab).addClass('active');
      i=dataTab;
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-1)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-1)*36)+"deg)",
        "transition":"1s"
      });
      
      
    });
    
    setInterval(function(){
      var dataTab= $('.itemDot.active').data("tab");
      if(dataTab>6||i>6){
      dataTab=1;
      i=1;
      }
      $('.itemDot').removeClass('active');
      $('[data-tab="'+i+'"]').addClass('active');
      $('.CirItem').removeClass('active');
      $( '.CirItem'+i).addClass('active');
      i++;
      
      
      $('.dotCircle').css({
        "transform":"rotate("+(360-(i-2)*36)+"deg)",
        "transition":"2s"
      });
      $('.itemDot').css({
        "transform":"rotate("+((i-2)*36)+"deg)",
        "transition":"1s"
      });
      
      }, 5000);
    
  });



</script>
@endsection
