<!DOCTYPE html>
<html lang="en">

<head>
  <title>Imkon plus</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/jpg" href="doda/Logo_IMKON_Plyus.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="mystylede.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'www.facebook.com/imkonplyus/',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>  
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- NAVIGATION BAR *************************************************************************************-->

	<nav class="navbar navbar-default navbar-fixed-top col-md-12 col-sm-12 col-xs-12 col-lg-12">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
		</div>
		<div class="collapse navbar-collapse" id="mynavbar">
		<a href="#" class=""><img src="doda/Logo_IMKON_Plyus.png" width="9%"></a>
			<ul class="nav navbar-nav navbar-right">
        <li><a href="#catalog">Каталог</a></li>
        <li><a href="#services">Услуги</a></li>
				<li><a href="#part">О Нас</a></li>
        <li><a href="#contact">Контакты</a></li>
				<li><a href="#googleMap">Филиалы</a></li>
        <li><a href="main.php" id="right">Войти</a></li>
			</ul>
		</div>
	</div>
</nav>

		<!--************************  CAROUSEL   ***************************************************-->

<header id="myCarousel" class="carousel slide VER col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" id="Davr"></div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" id="Davr1"></div>
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" id="Davr2"></div>
               
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>



		<!--*******************************    GALEREYA    ********************************************-->
<section id="catalog" class="text-center col-md-12 col-sm-12 col-xs-12 col-lg-12">
		<div class="container image">
  <h2 id="mi">Мы знаем, как делать<br>
 вкусное мороженое!</h2>
  
  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
        <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/12.png" alt="" />
          <div class="caption">
            <span class="">Стаканчики</span>
          </div>
        </a>
       
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
       <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/13.png" alt="" />
          <div class="caption">
           <span class="">Ведерки</span>
          </div>
        </a>

      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
         <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/14.png" alt="" />
          <div class="caption">
            <span class="">Ванночки</span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
        <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/15.png" alt="" />
          <div class="caption">
          <span class="">Весовое</span>
          </div>
        </a>

      </div>
    </div>

  </div>

  
  <!--****************************    SECOND ROW      *****************************************-->
  


  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
        <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/16.png" alt="" />
          <div class="caption">
           <span class="">Сорбет</span>
          </div>
        </a>

         

      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
       <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/17.png" alt="" />
          <div class="caption">
           <span class="">Рожки</span>
          </div>
        </a>

         


      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
        <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/18.png" alt="" />
          <div class="caption">
            <span class="">Эскимо без глазури</span>
          </div>
        </a>

         


      </div>
    </div>

    <div class="col-md-3">
      <div class="thumbnail thumbnail-my">
        <a href="catalog.php"  class="btn btn-lg" >
			<img class="" src="doda/19.png" alt="" />
          <div class="caption">
         <span class="">Торты</span>
          </div>
        </a>

         
      </div>
    </div>

  </div>
  		 <div class="row">
  		 	
  		 	 <div class="col-md-12">
      <div class="thumbnail go">
      <a href="catalog.php"  class="btn btn-lg" >
				<div class=""><span>Перейти в каталог</span></div>
          
        </a>
      </div>
    </div>
  </div>
  </div>
</section>

	<!--*************************** SEEEEEEEEEEETKA ******************************************************-->

<section id="setka" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
    <div class="container-fluid text-center" id="services">
    	<div class="row">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-8">
	<div class="row">
	
		<div class="col-sm-4">
			
			<div class="media">
  <div class="media-left">
   <img src="doda/home.png" alt="Online ordering" class="media-object wid" >
   </div>
  <div class="media-body">
    <h4 class="media-heading">Онлайн Заказ</h4>
    <p>Легко, Просто, Быстро и Удобно</p>
    <a href="" class="btn btn-cus">Заказ</a>
  </div>
</div>
		</div>
		<div class="col-sm-4">
			
			<div class="media">
  <div class="media-left">
     <img src="doda/user.png" class="media-object wid"></div>
  <div class="media-body">
    <h4 class="media-heading">Мой Аккаунт</h4>
    <p>Регистрируйся и получай бонусы</p>
     <a href="main.php" class="btn btn-cus">Регистрация</a>
  </div>
		</div></div>
		<div class="col-sm-4">
			
			<div class="media">
  <div class="media-left">
   <img src="doda/comment.png" alt="SMS" class="media-object wid"></div>
  <div class="media-body">
    <h4 class="media-heading">Отзывы</h4>
    <p>Оставляйте свои предложения и комменты</p>
    <a href="" class="btn btn-cus">Комментарии</a>
  </div>
  
		</div>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</div>
</div>
</div>
</div>


<!--****************************************   PARTNERSTVOOOOO ******************************-->

<section id="part" class="text-center container-fluid" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
<div id="rang">
	<h2 ><span id="place" class="col-sm-12 col-xs-12 col-md-12 col-lg-12">Партнерство с нами выгодно!</span></h2>
	<div class="row">
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Предлагаем более 100 <br> наименований мороженого</p>
		</div>
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Доставка товара за счет <br> нашей компании</p>
		</div>
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Личный менеджер для <br> оперативного решения вопросов</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Гибкая система скидок <br> и выгодные условия оплаты</p>
		</div>
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Собственный холодильный <br> склад и логистический центр</p>
		</div>
		<div class="col-sm-4">
			<p><span class="glyphicon glyphicon-ok galochka"></span> Мороженое с вашим дизайном, <br> упаковкой и названием</p>
		</div>
	</div>
	<a class="btn btn-info" href="/cooperation/for-partners/">Узнать больше о сотрудничестве</a> 
	</div>
</section>

<!--*****************************************    KACHESTVO    ******************************-->

<section id="kachestvo" class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
<div class="text-center container">
  <h2 id="headice" class="container"></h1>
  <div class="row">
    <div class="col-sm-3">
    <img src="doda/1.jpg" class="img-responsive bot_dis">
    <p><br>Изготавливаем мороженое из натурального молока, фруктов и сибирских ягод</p>
    </div>
    <div class="col-sm-3">
    <img src="doda/2.png" class="img-responsive bot_dis">
    <p><br>Не используем растительные жиры при производстве мороженого</p>
    </div>
    <div class="col-sm-3">
    <img src="doda/3.png" class="img-responsive bot_dis">
    <p><br>Готовим мороженое по лучшим традициям и сохраняем вкус детства</p>
    </div>
    <div class="col-sm-3">
    <img src="doda/4.png" class="img-responsive bot_dis">
    <p><br>Следим за качеством от приемки продуктов до поставки клиентам</p>
    </div>
  </div>
  </div>
</section>

<!--****************************   CONTACT    **********************************************-->

<div class="container-fluid bg-grey col-md-12 col-sm-12 col-xs-12 col-lg-12" id="contact">
	<h2 class="text-center bottom">Контактные данные</h2>
	<div class="row">
		<div class="col-sm-5">
			<p>Обращайтесь по всем вопросам, ответ будет отправлен в течении 24 часов.</p>
			<p><span class="glyphicon glyphicon-map-marker"></span>Адрес: 41°21'23. 69°21'23.9"E, 9 проспект Узбекистан, Tashkent 100029, Узбекистан</p>
			<p><span class="glyphicon glyphicon-phone"></span> +998 90 351 36 11</p>
      <p><span class="glyphicon glyphicon-envelope"></span> imkonplyus@gmail.com</p> 
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-page" data-href="https://www.facebook.com/imkonplyus" data-width="30" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>​
		</div>
    <div class="col-sm-7">
    <form id="formad" action="send.php" method="POST" name="otpravit" role="form" >
  		<div class="row">
      	<div class="col-sm-6 form-group">
					<input type="text" class="form-control" id="name" name="name1" placeholder="имя" required>
				</div>
				<div class="col-sm-6 form-group">
					<input type="email" class="form-control" name="email1" id="email" placeholder="Email" required>
				</div>
			</div>
			<textarea class="form-control" id="comments" name="comments" placeholder="Комментарий" rows="10"></textarea><br>
			<div class="row">
				<div class="col-sm-12">
        <button onclick="sendMsg()" class="btn btn-default pull-right" id="otpravit" name = "otpravit" type="submit">Отправить</button>
        </div>
			</div>
	     </form>
     </div>
  </div>
</div>

<!--                      MAP                     **************************************************-->
<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 map"> 
  <div id="googleMap" style="height:400px;width:100%;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
  var myCenter=new google.maps.LatLng(41.35653, 69.356479);
  var dat =  $("#formad").serialize();
  function sendMsg(){

    $.ajax({
            url: 'send.php',
            data: dat,
            type: 'POST',
            success: function(){
              alert("success");
            }

    });
  }
  function initialize(){
    var mapProp={
      center:myCenter,
      zoom:15,
      scrollwheel:false,
      draggable:false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var marker=new google.maps.Marker({position:myCenter});
    marker.setMap(map);
  }

  google.maps.event.addDomListener(window,'load',initialize);

</script>
</div>

<footer class="text-center col-md-12 col-sm-12 col-xs-12 cl-lg-12" id="serv">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p id="goup">Imkon Plyus</p>
</footer>

<script>
$(document).ready(function(){
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== ""){
     
      event.preventDefault();

      
      var hash = this.hash;

      $('html, body').animate({ scrollTop: $(hash).offset().top }, 1500, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
})
</script>

</body>
</html>



