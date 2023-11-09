
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

if(isset($_POST['submit']))
{
    if($_POST['availability']=='true'){
    if(isset($_SESSION['cart']))
    {
      $myitems=  array_column($_SESSION['cart'],'title');
      if(in_array($_POST['title'],$myitems)){
       $already=1;
      }
      else{
  $message=1;
$count=count($_SESSION['cart']);
$_SESSION['cart'][$count]=array('title'=>$_POST['title'],'price'=>$_POST['price'],'image'=>$_POST['image'],'fuel_type'=>$_POST['fuel_type'],'mileage'=>$_POST['mileage'],'seats'=>$_POST['seats'],'Quantity'=>1);
echo "<script>alert('Item  added');
window.location.href='index.php';
</script>";
      }
    }
    else{
$_SESSION['cart'][0]=array('title'=>$_POST['title'],'price'=>$_POST['price'],'image'=>$_POST['image'],'fuel_type'=>$_POST['fuel_type'],'mileage'=>$_POST['mileage'],'seats'=>$_POST['seats'],'Quantity'=>1);
echo "<script>alert('Item  added');
window.location.href='index.php';
</script>";
    }
}
else{
 $unavailable=1;
}


}

if(isset($_POST['remove_item'])){
  session_start();
    foreach($_SESSION['cart'] as $key=> $value){
        if($value['title']==$_POST['title'])
        {
          unset($_SESSION['cart'][$key]);
    $_SESSION['cart']=array_values($_SESSION['cart']);
    echo "<script>alert('Item  Removed');
window.location.href='mycart.php';
</script>";

        }
    }
}
}



?>