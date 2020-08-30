<?php
foreach($content as $b){
	echo '<a href="/admin/admin.php?admin=list&hotel=';
	echo $b['hotelName'];
	echo '" class = "btn btn-primary btn-success m-3">';
	echo $b['rusName'];
	echo '</a>';
}