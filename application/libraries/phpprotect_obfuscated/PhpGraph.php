<?php
include('phpMyGraph5.0.php');
if(!defined ('BASEPATH')) exit('no direct scripts access allowed');
 
class PhpGraph{
 
function create_graph($Vf5zqmgi2wdw=null, $Vlhi02kz1ecz,$Vkazpflc35w1='horizontal-line-graph',$Vzgxlaigruqq='', $Vskzyhvuqp4p=null){
 

$Vf5zqmgi2wdw['title'] = $Vzgxlaigruqq;

if($Vkazpflc35w1=='horizontal-line-graph'){
$Vrh1qulr0iaa = new HorizontalLineGraph();
}
else if($Vkazpflc35w1=='horizontal-simple-column-graph'){
$Vrh1qulr0iaa = new HorizontalSimpleColumnGraph();
}
else if($Vkazpflc35w1=='horizontal-column-graph'){
$Vrh1qulr0iaa = new HorizontalColumnGraph();
}
else if($Vkazpflc35w1=='horizontal-polygon-graph'){
$Vrh1qulr0iaa = new HorizontalPolygonGraph();
}
else if($Vkazpflc35w1=='vertical-line-graph'){
$Vrh1qulr0iaa = new VerticalLineGraph();
}
else if($Vkazpflc35w1=='vertical-simple-column-graph'){
$Vrh1qulr0iaa = new VerticalSimpleColumnGraph();
}
else if($Vkazpflc35w1=='vertical-shadow-column-graph'){
$Vrh1qulr0iaa = new VerticalColumnGraph();
}
else if($Vkazpflc35w1=='vertical-polygon-graph'){
$Vrh1qulr0iaa = new VerticalPolygonGraph();
}

if($Vskzyhvuqp4p!=null){

if($Vf5zqmgi2wdw['compare']==true){
$Vf5zqmgi2wdw['file-name'] = $Vskzyhvuqp4p;
$Vrh1qulr0iaa->parseCompare($Vlhi02kz1ecz[0],$Vlhi02kz1ecz[1], $Vf5zqmgi2wdw);
return $Vf5zqmgi2wdw['file-name'];
}
else{
$Vf5zqmgi2wdw['file-name'] = $Vskzyhvuqp4p;
$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
return $Vf5zqmgi2wdw['file-name'];
}
}

else{
header("Content-type: image-png");

if($Vf5zqmgi2wdw['compare']==true){
$Vrh1qulr0iaa->parseCompare($Vlhi02kz1ecz[0],$Vlhi02kz1ecz[1], $Vf5zqmgi2wdw);
return $Vf5zqmgi2wdw['file-name'];
}
else{
$Vrh1qulr0iaa->parse($Vlhi02kz1ecz, $Vf5zqmgi2wdw);
return $Vf5zqmgi2wdw['file-name'];
}
}
 
}
}