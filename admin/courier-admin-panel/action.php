<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $rec = db::getRecord($query);
    if ($rec != NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($_FILES['doc_file']['name'] == "") {
        $sql2 = "UPDATE admin SET name='$name',password='$password'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['doc_file']['name'];
        $file_loc = $_FILES['doc_file']['tmp_name'];
        $file_size = $_FILES['doc_file']['size'];
        $file_type = $_FILES['doc_file']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql2 = "UPDATE admin SET name='$name',password='$password',image='$final_file'";
        $r = db::query($sql2);
        echo "<script>location='profile.php?status=1'</script>";

    }
}

//logout
if (isset($_GET['logout'])) {
    unset($_SESSION['email']);
    echo "<script>location='index.php'</script>";
}



// update_logo
if (isset($_POST['update_logo'])) {
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id = $db->real_escape_string($_POST['id']);
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE logo SET dcp='$dcp'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE logo SET dcp='$dcp',image='$final_file' ";
        db::query($sql);
    }
    echo "<script>location='logo.php'</script>";
}


//add_banner
/*if (isset($_POST['submit'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $button_name = $db->real_escape_string($_POST['button_name']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `banner` (`heading`,`image`,`button_name`) VALUES ('$heading','$final_file','$button_name')";
    db::query($query_insert);
    echo "<script>location='banner.php'</script>";
}*/

//update_banner
if (isset($_POST['update_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $title = $db->real_escape_string($_POST['title']);
    $dcp = $db->real_escape_string($_POST['dcp']);


    $id = $db->real_escape_string($_POST['id']);
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE banner SET heading='$heading',dcp='$dcp',title='$title' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE banner SET heading='$heading',dcp='$dcp',title='$title',image='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='banner.php'</script>";
}
/*//del_banner
if (isset($_GET['del_banner'])) {
    $id = $_GET['del_banner'];
    $sql = "DELETE FROM banner WHERE id='$id'";
    db::query($sql);
    echo "<script>location='banner.php'</script>";
}*/


//add_newsletter
if (isset($_POST['newsbtn'])) {
    $email = $db->real_escape_string($_POST['email']);

    $query_insert = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";
    db::query($query_insert);
    echo "<script>location='../index.php'</script>";
}

//del_newsletter
if (isset($_GET['del_news'])) {
    $id = $_GET['del_news'];
    $sql = "DELETE FROM newsletter WHERE id='$id'";
    db::query($sql);
    echo "<script>location='newsletter.php'</script>";
}
//add_service
if (isset($_POST['add_services'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `service` (`heading`,`image`,`dcp`) VALUES ('$heading','$final_file','$dcp')";
    db::query($query_insert);
    echo "<script>location='services.php'</script>";
}


//update_SERVICE
if (isset($_POST['update_service'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id=$_POST['id'];
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE service SET heading='$heading',dcp='$dcp' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE service SET heading='$heading',image='$final_file',dcp='$dcp' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='services.php'</script>";
}
//del_service
if (isset($_GET['del_services'])) {
    $id = $_GET['del_services'];
    $sql = "DELETE FROM service WHERE id='$id'";
    db::query($sql);
    echo "<script>location='services.php'</script>";
}


//add_subscription
if (isset($_POST['add_subscription'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $query_insert = "INSERT INTO `subscription` (`heading`,`price`,`dcp`) VALUES ('$heading','$price','$dcp')";
    db::query($query_insert);

    echo "<script>location='subscription.php'</script>";
}


//update_subscription
if (isset($_POST['update_subscription'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $price = $db->real_escape_string($_POST['price']);

    $id=$_POST['id'];
    $sql = "UPDATE subscription SET heading='$heading',dcp='$dcp',price='$price' WHERE id='$id'";
    echo db::query($sql);
    echo "<script>location='subscription.php'</script>";
}
//del_subscription
if (isset($_GET['del_subscription'])) {
    $id = $_GET['del_subscription'];
    $sql = "DELETE FROM subscription WHERE id='$id'";
    db::query($sql);
    echo "<script>location='subscription.php'</script>";
}

//add_About
if (isset($_POST['add_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `about` (`heading`,`image`,`dcp`) VALUES ('$heading','$final_file','$dcp')";
    db::query($query_insert);
    echo "<script>location='about.php'</script>";
}
//update about
if (isset($_POST['update_about'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $id = $db->real_escape_string($_POST['id']);
    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $sql = "UPDATE  about SET heading='$heading',dcp='$dcp',image='$final_file' WHERE id='$id'";
    db::query($sql);
    echo "<script>location='about.php'</script>";
}
//del_about
if (isset($_GET['del_about'])) {
    $id = $_GET['del_about'];
    $sql = "DELETE FROM about WHERE id='$id'";
    db::query($sql);
    echo "<script>location='about.php'</script>";
}
//add_testimonails
if (isset($_POST['add_testimonails'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $btn = $db->real_escape_string($_POST['btn']);


    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `testimonails` (`heading`,`image`,`dcp`,`btn`) VALUES ('$heading','$final_file','$dcp',',$btn')";
    db::query($query_insert);
    echo "<script>location='testimonails.php'</script>";
}


//update_testimonails
if (isset($_POST['update_testimonails'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $btn = $db->real_escape_string($_POST['btn']);


    $id=$db->real_escape_string($_POST['id']);
    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE testimonails SET heading='$heading',dcp='$dcp',btn='$btn' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE testimonails SET heading='$heading',image='$final_file',dcp='$dcp',btn='$btn' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='testimonails.php'</script>";
}
//del_testimonails
if (isset($_GET['del_testimonails'])) {
    $id = $_GET['del_testimonails'];
    $sql = "DELETE FROM testimonails WHERE id='$id'";
    db::query($sql);
    echo "<script>location='testimonails.php'</script>";
}
//add_contact
if (isset($_POST['btn'])) {
    $fname = $db->real_escape_string($_POST['fname']);
    $lname = $db->real_escape_string($_POST['lname']);
    $email = $db->real_escape_string($_POST['email']);
    $phone = $db->real_escape_string($_POST['phone']);
    $Message = $db->real_escape_string($_POST['Message']);

    $query_insert = "INSERT INTO `contact` (`fname`,`lname`,`email`,`phone`,`Message`) VALUES ('$fname','$lname','$email','$phone','$Message')";
    db::query($query_insert);
    echo "<script>location='../contact.php'</script>";
}

//del_contact
if (isset($_GET['del_contact'])) {
    $id = $_GET['del_contact'];
    $sql = "DELETE FROM contact WHERE id='$id'";
    db::query($sql);
    echo "<script>location='contact.php'</script>";
}
?>

