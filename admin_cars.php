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
                <a class="navbar-brand" href="/index">CarShare</a>
                <a class="btn btn-primary" href="/admin">Admin Dashboard</a>
            </div>
        </nav>


        <!-- display all cars -->
        <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Car ID</th>
      <th scope="col">Location</th>
      <th scope="col">Plate</th>
      <th scope="col">Make</th>
        <th scope="col">Body Type</th>
        <th scope="col">View Details</th>
    </tr>
  </thead>
  <tbody>
    <tbody>
    <tr>
      <th scope="row">000</th>
      <td>Melbourne</td>
      <td>xxxxx</td>
      <td>Toyota</td>
        <td>SUV</td>
        <td><a href="/admin_carDetail" class="btn btn-primary">Details</a></td>
        
    </tr>
    
    
  </tbody>
    
    

</table>



        <!-- Footer -->
       

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <div>
            <footer id="footer" class="py-2 bg-light text-black-90">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    <a href="/index"> CarShare.com</a>
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