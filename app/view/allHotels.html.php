<?
if(is_array($content)){
foreach($content as $hotel){
	echo '<div class = "container py-5" >';
	echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center myrow">';
	echo '
<div class = "col-12 col-sm-12 col-md-10 col-lg-10">
<div class="card">
  <div class="card-body text-center">
    <div class="card-text">';
	echo sprintf('<h2>%s</h2>', $hotel[1]);
	echo '<button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Заказать';
	echo'</button>';
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel[2]);
	echo '<hr>';
	echo sprintf('<p>%s</p>', $hotel['price']);
	echo '</div>
  </div>';
	echo sprintf('<div class = "fullImg" style = "padding-top:10px;" id = "myClass%s" ><img src = "/myFiles/numbers/%s/slide1.jpg" alt = "Большое изображение"></div>', $hotel[0], $hotel[0]);
	echo '  <div class="card-body">
    <p class="card-text text-center"><button type="button" class="btn btn-primary btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Заказать';	
	echo'
	</button>
		</p>
  </div>
</div>';
	echo '</div>';
		
echo '<div class = "row justify-content-md-center justify-content-lg-center justify-content-center myClass">';
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding: 5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/numbers/%s/slide1.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/numbers/%s/slide2.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/numbers/%s/slide3.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0]);
echo '<div class = "col-3 col-md-2 col-sm-3 col-lg-2" style = "padding:5px;">';
echo sprintf('<img class = "myClass%s" src="/myFiles/numbers/%s/slide4.jpg" onclick = "bigCapture(event); return false" alt="logo"></div>', $hotel[0], $hotel[0]);






echo	'
	</div>
	</div>
</div>';
		
	
		

}
}
else{
	echo '<h3>No data</h3>';
}
?>

		
<script>
function bigCapture(e){
document.getElementById(e.target.className).innerHTML = '<img src = "' + e.target.src + '" alt = "Большое изоброжение">';
	// console.log(e.path[0].src);
	// console.log(e.target.className);
	// console.log(e.target.src);
  return false;
}
</script> 
