<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2 class="text-center">Add Our product Fields</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 m-auto ">
                <div class="panel mb-25">
                    <div class="panel-body">
                        <div class="row g-5">
                            <form method="POST" action="action.php" id="form" enctype="multipart/form-data">
                                <div class="col-sm-12 mt-4">
                                    <label for="formFile" class="form-label">Upload Your Image</label>
                                    <input class="form-control" type="file" id="formFile" name="food_image">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_name</label>
                                    <input type="text" class="form-control" id="basicInput" name="food_name">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_dcp</label>
                                    <input type="text" class="form-control" id="basicInput" name="food_dcp">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label for="basicInput" class="form-label">Food_price</label>
                                    <input type="text" class="form-control" id="basicInput" name="food_price">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4 mx-auto">
                                        <button class="btn btn-success w-100" type="submit" name="add_product"
                                            id="submit">Submit</button>
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
    $(document).ready(function() {

        $('#submit').click(function() {
            $.ajax({
                url: 'action.php',
                type: 'post',
                data: $('#form').serialize(),
                success: function(data) {

                }
            });
        });
    });
    </script>

</body>

</html>