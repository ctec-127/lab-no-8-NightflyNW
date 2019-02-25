<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Temperature Converter</title>
</head>
<body>
    <div>
        <?php require 'inc/navbar.inc.php'; ?>
        <?php require 'inc/conversion.inc.php'; ?>
       
    </div>

    <div class="container my-2">
        <div class="row m-auto">
            <div class="jumbotron col-sm-12 color-success">
                <h1 class="display-4 text-center m-auto">Hello, world!</h1>
                <p class="lead text-center">This is an easy to use temperature convertion application.</p>
                <a></a>
            </div>
        </div>  
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-2" style=><h1></h1></div>
            <div class="col-sm-8 text-center" style="background-color:lightgrey;">
                <h2>Temperature Converter</h2>
                <form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2 mr-4" for="temp">Temperature</label>
                    <!-- <div class="col-sm-12"> -->
                        <input class="mr-4" type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp">
                        <select name="originalunit">
                            <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                            <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                            <option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                            <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                        </select>
                    <!-- </div> -->
                    </div>

                    

                    <div class="form-group">
                        <label class="control-label col-sm-2 mr-4" for="convertedtemp">Converted Temperature</label>
                        <!-- <div class="col-sm-10">           -->
                        <input class="mr-4" type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
                        name="convertedtemp" size="7" maxlength="7" id="convertedtemp">
                        <select name="conversionunit">
                            <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                            <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                            <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                            <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                        </select>
                    </div>
                    <!-- </div> -->
                
                    <input class="btn btn-primary btn-lg mb-4" type="submit" value="Convert"/>
                </form>
            </div>
            <div class="col-sm-2" style=""></div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="container">
        <!-- Control the column width, and how they should appear on different devices -->
            <div class="row text-center">
                
                <div class="card col-sm-4"> <h3 class="card-header mt-3">Formulas</h3> 
                    <br>
                    <br>
                    <div class="card-block"> 
                        <h4 class="card-title mt-3">From Celsius to Farentheit</h4> 
                        <p class="card-text">(0°C × 9/5) + 32 = 32°F</p> 
                        <br>
                        <h4 class="card-title">From Celsius to Kelvin</h4> 
                        <p class="card-text">0°C + 273.15 = 273.15K</p>
                    </div> 
                </div>
                <div class="col-sm-4" style=""><img src="img/comparison.jpg" width="300" height="450" m-auto alt=""></div>
                <div class="card col-sm-4"> <h3 class="card-header mt-3">Temperature Measurements</h3> 
                    <div class="card-block"> 
                        <h4 class="card-title mt-3">Celsius</h4> 
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> 
                        <h4 class="card-title">Farenheit</h4> 
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <h4 class="card-title">Kelvin</h4> 
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div> 
                </div>
                
            </div>
            <br>
       </div>
    </div>

    <footer class="container-fluid text-center">
        <p>&copy; Copyright 2019 - Scott Altom</p>
    </footer>


<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>