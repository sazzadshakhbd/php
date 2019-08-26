<doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>get-method</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-center align-items-center">
                            <form actions="" method="get">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="pet">
                                <div class="mb-1">
                                <?php
                                // print_r($_POST);
                                if(isset($_GET['sub'])){
                                    $x = $_GET['pet'];
                                    echo $x;
                                }
                                ?>
                                </div>
                                <button type="submit" class="btn btn-success btn-sm mt-2" name="sub">Submit Request</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </body>
    </html>