<?php
require_once "elemento.php";

class cabecera extends elemento
{
	
	//En este caso no tendrá titulo
	function __construct()
	{
		$this->setTitulo("");	
	}
	//Funcion que define el menu de la cabecera
	function setMenu($numElementos)
	{
		
		$str="";
		$str=$str."&nbsp;"."<a href=index.php>Home </a>";
		
		for($i=1;$i<=$numElementos;$i++)
		{
			$str=$str."&nbsp;"."<a href=pagina".$i.".php>Página-".$i."</a> ";
		} 
		$this->setContenido($str);
		
	}
	private $menu=array(
	"home"=>array(
		"txt"=>"Inicio",
		"url"=>"http://192.168.0.210/ServidorUbuntu/Daw/Proyecto3/"
	),
	"fotos"=>array(
		"txt"=>"Fotos",
		"url"=>"http://192.168.0.210/ServidorUbuntu/Daw/Proyecto3/fotos.php"
		),
		"facebook"=>array(
		"txt"=>"Facebook",
		"url"=>"http://facebook.es"
		)
	);
	function setDireccion($elementoMenu,$direccionWeb){
		$elemento=$this->menu[$elementoMenu];
		$elemento["url"]=$direccionWeb;
		}
	function construirMenu(){
		$menu="<div id='cssmenu'><ul>";
		foreach($this->menu as $elementos){
			$menu=$menu."<li><a href=".$elementos["url"].">".$elementos["txt"]."</a></li>";
			}
			$menu=$menu."</ul></div>";
			$this->setContenido($menu);
		}
}

?>