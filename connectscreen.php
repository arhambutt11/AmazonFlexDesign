<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/connectscreen.css" rel="stylesheet">


</head>

<body>


    <section>
        <div class="loginbackground">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logoimg">
                            <img src="images/logo.png" class="img-responsive">
                        </div>
                        <div class="logindata">
                            <h4>CONNECT YOUR <br> AMAZON FLEX ACCOUNT</h4>
                            <p>You need to connect your account once</p>
                        </div>
                        <div class="loginform">
                            <input type="text" class="form-control" placeholder="Enter Name">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Enter Password">
                        </div>
                        <div class="loginformclick">
                            <a class="btn btn-primary sign" data-toggle="modal" href='#modal-id'>Submit</a>
                            <div class="modal fade" id="modal-id">
                                <div class="modal-dialog mymodal" style="align-self: center; margin-top: 300px;">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="mymodaldata">
                                                <img src="images/tick.png" class="img-responsive">
                                                <h4>Successfully Connected!</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








</body>

</html>