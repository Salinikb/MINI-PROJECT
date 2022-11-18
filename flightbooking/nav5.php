<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Bootstrap NavBar Example</title>
    <meta charset="utf-8" />
    <!-- Include bootstrap, CSS and jQuery CDN -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  
<body>
    <!-- Add <nav> tag with .navbar and
         .navbar-default class -->
    <nav class="navbar navbar-default">
  
        <!-- Add navbar content -->
        <div class="container-fluid">
  
            <!-- Include .navbar-header class 
                 in <div>  (optional)-->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    Willfly
                </a>
            </div>
  
            <!-- Include navbar list -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">
                    Home
                </a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </div>
    </nav>
  
    <!-- Sample page content -->
    <div class="container">
       
    </div>
</body>
  
</html>