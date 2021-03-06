<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>CarShare</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
              type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">
        <link href="css/adminAdd-page.css" rel="stylesheet">

        <!-- Initialize Firebase.js -->
        <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase.js"></script>
        <script src="/js/config_and_init.js"></script>
        
        <!-- Tracking Auth State -->
        <script src="/js/tracking_auth_state.js"></script>

        <!-- SignOut button funtion -->
        <script src="/js/signout.js"></script>

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#">CarShare</a>
                <a class="btn btn-primary" href="/admin">Admin Dashboard</a>
                <a class="btn btn-primary" onclick="signout()">Sign Out</a>
            </div>
        </nav>


        <!-- car info -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    Add New Car
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="carId" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="00000" readonly>
                                <small id="idHelp" class="form-text text-muted">This is an auto generated ID.</small>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carLocation" class="col-sm-2 col-form-label">Location</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="carLocation">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Status</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="carStatus">
                                    <label class="form-check-label" for="carStatus">
                                        Available Now
                                    </label>
                                </div>
                            </div>
                        </div>
                         <hr class="rounded">
                        <div class="form-group row">
                            <label for="carPlate" class="col-sm-2 col-form-label">Plate</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="carPlate">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carMake" class="col-sm-2 col-form-label">Make</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="carMake">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="carModel" class="col-sm-2 col-form-label">Model</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="carModel">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carBodytype" class="col-sm-2 col-form-label">Body Type</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="carBodytype">
                                    <option>SUV</option>
                                    <option>Sedan</option>
                                    <option>Wagon</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carColor" class="col-sm-2 col-form-label">Color</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="carColor">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carPic" class="col-sm-2 col-form-label">Photo Upload</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control-file" id="carPic">
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Footer -->
        

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <div>
            <footer id="footer" class="py-2 bg-light text-black-90">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="https://shareCars.com/"> CarShare.com</a>
                </div>
                <!-- Copyright -->

            </footer>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>

    </body>

</html>