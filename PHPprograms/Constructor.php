<?php
 class demo{
 var $name = "Sarthika";
 function __construct($name)
 {
   $this->name=$name;
 }
}
$obj=new demo("Krantika");
echo $obj->name;
?>