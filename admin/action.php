<?php
require_once("database.php");
$db = db::open();
//add pproduct
extract($_POST);
if(isset($_POST['add_product'])){

    $file = rand(1000, 100000) . "-" . $_FILES['food_image']['name'];
    $file_loc = $_FILES['food_image']['tmp_name'];
    $file_size = $_FILES['food_image']['size'];
    $file_type = $_FILES['food_image']['type'];
    $folder = "upload/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `product`(`image_food`, `name_food`, `dcp_food`, `price_food`)
     VALUES ('$final_file','$food_name','$food_dcp','$food_price')";
    db::query($query_insert);
    header('location:product.php');
}

//updata
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $f_name=$_POST['food_name'];
    $dcp=$_POST['food_dcp'];
    $price=$_POST['food_price'];

    if ($_FILES['food_image']['name'] == "") {
        $sql = "UPDATE `product` SET `name_food`='$f_name',`dcp_food`='$dcp',`price_food`='$price' WHERE `id`='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['food_image']['name'];
        $file_loc = $_FILES['food_image']['tmp_name'];
        $file_size = $_FILES['food_image']['size'];
        $file_type = $_FILES['food_image']['type'];
        $folder = "upload/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE `product` SET `image_food`='$final_file',`name_food`='$f_name',`dcp_food`='$dcp',`price_food`='$price' WHERE `id`='$id'";
        echo db::query($sql);
    }
    header("location:product.php");
}

//delete 
 
$U_id=$_POST["id"];
$sql = "DELETE FROM product WHERE id='$U_id'";
$queryrun=db::query($sql);
if($queryrun)
{
    echo 1;
}else{
    echo 2;
}
//php kay through
// if(isset($_GET['id'])){
//     $delete_id = $_GET['id'];
//     $sql = "DELETE FROM product WHERE id='$delete_id'";
//     db::query($sql);
//     header("location:product.php");
// }

?>