<?php
class Bombilla
{
function on(){
		return '
		<a href ="?off=1"> 
		<img src="bombillo_on.jpg" style= "height:200px"/>
		</a>
		';
}
function off(){
		return '
		<a href ="?on=1">
		<img src="bombillo_off.jpg" style= "height:200px"/>
		</a>';

}
	
}

//controlador
$b = new Bombilla();

if (isset($_GET['on'])) 
	echo $b->on();
else 
	echo $b->off();


?>