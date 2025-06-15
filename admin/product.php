<?php
require_once("database.php");
$db = db::open();
$query="SELECT * from product";
$product=db::getRecords($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="col mt-5">
            <nav class="navbar navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand">Our Product</a>
                    <form class="d-flex">
                        <button class="btn btn-outline-success" type="submit"><a href="add_product.php"
                                class="ancor">add
                                product</a></button>
                    </form>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="menu" id="Menu">
                <h1>Our<span>Product</span></h1>
                <div class="menu_box">
                    <?php
             if($product){
                foreach($product as $prodt){
?>
                    <div class="col-lg-4">
                        <div class="menu_card card">

                            <div class="menu_image">
                                <img src="upload/<?php  echo $prodt['image_food']; ?>">
                            </div>

                            <div class="small_card">
                                <i class="fa-solid fa-heart"></i>
                            </div>

                            <div class="menu_info">
                                <h2><?php  echo $prodt['name_food']; ?></h2>
                                <p>
                                    <?php  echo $prodt['dcp_food']; ?>
                                </p>
                                <h3><?php  echo $prodt['price_food']; ?></h3>
                                <div class="menu_icon">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="update_product.php?id=<?php echo $prodt['id']; ?>"
                                            class="btn btn-primary w-100 text-dark">Edit</a>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <a href="action.php?id=<?php echo $prodt['id'];?>"
                                            class="btn btn-outline-danger w-100 text-dark delete">Trash</a> -->
                                        <button class="btn btn-danger delete"
                                            data-id="<?php echo $prodt['id'];?>">Delete</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php
                }
             }
             
             ?>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
        $(document).on("click", ".delete", function() {
            if (confirm("Do you really want to delete this record ?")) {


                var close = $('.card');
                var userid = $(this).data('id');
                var element = this;
                // alert(userid);
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {
                        id: userid
                    },
                    success: function(data) {
                        if (data == 1) {
                            $(element).closest(close).fadeOut();
                        } else {
                            // echo "error action.php  ";
                        }

                    }
                });
            }

        });
        </script>
</body>

</html>