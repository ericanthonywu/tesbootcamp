<?php
$con = mysqli_connect('localhost','root','','tesbootcamp');

$arr = [];
$sql = mysqli_query($con,"
select 
      products.id, 
      (categories.name) as category_name, 
      (products.name) as products 
from 
      products 
            inner join 
      categories 
            on 
      products.category_id = categories.id
");
while($data = mysqli_fetch_array($sql)){
    $temp=array(
        "id"=>$data['id'],
        "category_name"=>$data['category_name'],
        "products"=>$data['products']
    );
    array_push($arr,$temp);
}
$dataa = json_encode($arr);

echo "{\"data\" :  $dataa }";