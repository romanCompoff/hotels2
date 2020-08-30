<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$configs['words2']?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="oc/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="oc/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/myStyle.css">
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
    <title><?=$configs['heading2']?></title>
	<meta name="yandex-verification" content="0b16e7b808a41d8b" />

  </head>

<body>
	<div class = "container-fluid " style = "padding-right: 0px; padding-left: 0px;">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<img src = "/img/logo.png">
			<div class = "col"><a class="navbar-brand" href="/"><?=$configs['siteName']?></a></div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="col collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="#">Домашняя <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#numbers"><?=$configs['menu1']?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#adress"><?=$configs['menu2']?></a>
						</li>
					</ul>
					<a class="nav-link" href="tel:<?=$configs['phoneNumber']?>"><span class = "myElements"><?=$configs['phoneNumber']?></span></a>
					<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ЗАКАЗАТЬ</button>					
				</div>
		</nav>
    <div class = "row" style = "margin:0px; padding:0">
		<div class = "col-12 col-sm-12 col-md-12 col-lg-12" style = "padding:0;">
			<div class="img-wrap">
				<img src="<?=$banner?>" class="img-fluid" alt="Отели на ваш выбор" style = "padding:0; width:100%">
			</div>
		</div>
	</div>
</div>

<div class = "container" style = "padding: 70px 10px;">
    <div class = "row justify-content-md-center justify-content-center no-gutters">
		<div class = "col-11">							
			<div class="text-center">
				<h1><?=$configs['heading1']?></h1>
		<p><span style="font-size:16px"><?=$configs['words1']?></span></p>
		</div>
		<?=$articles?>

		</div>
	</div>
</div>



<!--
<div class = "container">
	<div class = "row justify-content-md-center justify-content-lg-center justify-content-center no-gutters">
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide1.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide2.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide3.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide4.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide5.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
		<div class = "col-6 col-md-4 col-sm-6 col-lg-4" style = "padding-top:10px;">
			<img src="/img/img-block/slide6.jpg" class="" alt="logo" width="90%" height="auto" >
		</div>
	</div>
</div>

	
		
		<div class="text-center">
			<h2>Что я предлагаю?</h2>
				<p style="font-size:16px; padding: 33 0;">Почему стоит обратиться именно ко мне?</p>
		</div>
<div class="card-deck mx-0">
  <div class="card">
  <div class="text-center">
    <img class="card-img-top py-5" src="/img/img-cards/slide9.png" alt="Качество обслуживания" style = "width:60%;">
    </div>
	<div class="card-body text-center">
      <h5 class="card-title">КАЧЕСТВО ОБСЛУЖИВАНИЯ</h5>
      <p class="card-text">Работаю на совесть. Нацелен на долгосрочное сотрудничество.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card"><div class="text-center">
    <img class="card-img-top py-5"  src="/img/img-cards/slide1.png" alt="Медицинские услуги" style = "width:60%;">
	</div>
    <div class="card-body text-center">
      <h5 class="card-title">РАЗУМНЫЕ ЦЕНЫ</h5>
      <p class="card-text">Работаю один от начала и до конца. Не надо кормить начальство. Цены ниже, чем у конкурентов.</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
  <div class="text-center">
    <img class="card-img-top py-5" src="/img/img-cards/slide7.png" alt="премиум номера" style = "width:60%;">
	</div>
    <div class="card-body text-center">
      <h5 class="card-title">Индивидуальный подход</h5>
      <p class="card-text">Вы получите именно то, что лучше всего подойдет для ваших целей</p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
</div>
-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ЗАКАЗАТЬ</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 
        <form  action = "#" onsubmit = "SaveZakaz()" method = "post" enctype="multipart/form-data" novalidate="">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ваше имя:</label>
            <input type="text" class="form-control" id="recipientName" name="recipientName">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Номер телефона:</label>
			<input type="text" class="form-control" id="phoneText" name="phoneText">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Почта:</label>
			<input type="text" class="form-control" id="messageText" name="messageText">
          </div>
        
      </div>
      <div class="modal-footer">
	  <button type="submit" class="btn btn-primary">ЗАКАЗАТЬ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ЗАКРЫТЬ</button>
        
		</form>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class = "text-center">
<h2 id = "numbers"></h2>
<p><span style="font-size:16px"></span></p>
</div>
</div>
<!--
Контент сайта
 -->
<?=$content?>

<!--

<table class="table table-hover">
	
	  <thead>
    <tr>
     <th>#</th>
      <th>Услуга</th>
      <th>Стоимость</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<th scope="row">шт.</th>
      <td>Разработка сайта визитки</td>
      <td>От 1500</td>
    </tr>
    <tr>
	<th scope="row">шт.</th>
      <td>Разработка сайта на CMS</td>
      <td>От 1500</td>
    </tr>
    <tr>
	<th scope="row">шт.</th>
      <td>Разработка сайта под требования</td>
      <td>От 3000</td>
    </tr>
    <tr>
	<th scope="row">шт.</th>
      <td>Перенос сайта</td>
      <td>От 500</td>
    </tr>
    <tr>
	<th scope="row">год</th>
      <td>Размещение сайта на хостинге</td>
      <td>500</td>
	  </tr>
    <tr>

    <tr>
	<th scope="row">шт.</th>
      <td>Разработка приложения</td>
      <td>От 500</td>
	  </tr>
    <tr>    
	
	<tr>
	<th scope="row">шт.</th>
      <td>Другие услуги</td>
      <td>По договренности</td>
	  </tr>
    <tr>

  </tbody>
</table>

-->


<!--<div class = "container" style = "padding: 100px 0;">
	<div class = "row justify-content-md-center justify-content-lg-center justify-content-center no-gutters">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/img-block/slide3.jpg" alt="Первый слайд">
	  			<div class="carousel-caption d-none d-md-block">
			<h3>sdfgdfgdfg</h3>
			<p>sdfgsdfgfsdgfsdg</p>
			</div>
    </div>
<div class="carousel-item">
			<img src="/img/img-block/slide1.jpg" alt="...">
			<div class="carousel-caption d-none d-md-block">
			<h3>sdfgdfgdfg</h3>
			<p>sdfgsdfgfsdgfsdg</p>
			</div>
		</div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/img-block/slide2.jpg" alt="Третий слайд">
    </div>
				<div class="carousel-caption d-none d-md-block">
			<h3>sdfgdfgdfg</h3>
			<p>sdfgsdfgfsdgfsdg</p>
			</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


		
	</div>
</div>-->
<style>
</style>
<?

echo $fb;

?>

<div class = "container" style = "padding: 33px 0;">
<div class = "text-center" style = "padding: 33px 0;">
<p>
Оставьте заявку на сайте, и наши менеджеры помогут подобрать номер!
</p>
<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ЗАКАЗАТЬ</button>
</div>
<div class = "row justify-content-between no-gutters">
<div class = "col-12 col-sm-12 col-md-6 col-lg-6"> 
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2868952.2528884467!2d32.28820361308605!3d45.39499658567419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1585585090694!5m2!1sru!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<div class = "col-12 col-sm-12 col-md-5 col-lg-5 py-3" id = "adress" name = "adress"> 
<h3>Адрес:</h3>
<p><?=$configs['adress']?></p>
<p>Телефон: 
<a class="nav-link" href="tel:<?=$configs['phoneNumber']?>"><span style = "color:green; font-size: 150%"><?=$configs['phoneNumber']?></span></a>
<br>
<a class="nav-link" href="tel:<?=$configs['phoneNumber2']?>"><span style = "color:green; font-size: 150%"><?=$configs['phoneNumber2']?></span></a>
</p>
<p><?=$configs['email']?></p>

</div>
</div>
</div>

<div class = "container-fluid" style = "padding:0px; background-color:gray;">
<div class = "row align-self-center">
<div class = "col-10 col-sm-10 col-md-10 col-lg-10 text-center">
<p >  <a class="nav-link" href="tel:<?=$configs['phoneNumber']?>"><span style = "color:green; font-size: 150%"><?=$configs['phoneNumber']?></span></a> </p>
<p>  <p>  <?=$configs['email']?></p> 
<p> © 2020 <?=$configs['siteName']?>

</p>
</div>
</div>
</div>
<script>
function SaveZakaz() {
var res = "https://2kompa.ru/postS/myHotelsPost.php?phoneText=" + document.all.phoneText.value;
res = res + "&messageText=" + document.all.messageText.value;
res = res + "&recipientName=" + document.all.recipientName.value;
res = res + "&sName=<?=$configs['siteName']?>";

if(document.all.phoneText.value){
var xhr = new XMLHttpRequest();
xhr.open('GET', res);
xhr.send();
return res;
}}
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(64880416, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/64880416" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  </body>
</html>