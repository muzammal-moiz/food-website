<?php
require_once("database.php");
$db = db::open();
$id=$_GET['id'];
$data="SELECT * FROM product WHERE id='$id'";
$update=db::getRecord($data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2 class="text-center">Update Our product Fields</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 m-auto ">
                <div class="panel mb-25">
                    <div class="panel-body">
                        <div class="row g-5">
                            <form method="POST" action="action.php" id="form" enctype="multipart/form-data">
                                <div class="col-sm-12 mt-4">
                                    <label for="formFile" class="form-label">Upload Your Image</label>
                                    <input class="form-control" type="file" id="image" name="food_image">
                                </div>
                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_name</label>
                                    <input type="text" class="form-control" id="foodname" name="food_name"
                                        value="<?php echo $update['name_food'] ?>">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_dcp</label>
                                    <input type="text" class="form-control" id="fooddcp" name="food_dcp"
                                        value="<?php echo $update['dcp_food'] ?>">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_price</label>
                                    <input type="text" class="form-control" id="foodpri" name="food_price"
                                        value="<?php echo $update['price_food'] ?>">
                                </div>
                                <input type="hidden" id="userid" name="id" value="<?php echo $update['id'] ?>">
                                <div class="row mt-3">
                                    <div class="col-md-4 mx-auto">
                                        <button class="btn btn-success w-100" type="submit" name="update_product"
                                            id="submit">update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    // $(document).ready(function() {
    //     // var uid = $('#userid').val();
    //     var food_n = $('#foodname').val();
    //     var food_dcp = $('#fooddcp').val();
    //     var food_pri = $('#foodpri').val();
    //     var image = $('#image').val();

    //     $.ajax({
    //         url: "action.php",
    //         type: "POST",
    //         data: {
    //             // id: uid,
    //             name: food_n,
    //             dcp: food_dcp,
    //             pri: food_pri,
    //             img: image
    //         },
    //         success: function(data) {

    //         }
    //     });
    // });
    </script>

</body>

</html>