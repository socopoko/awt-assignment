<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->        
    <link rel="stylesheet" href="./styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>✨ My Image Gallery</title>
</head>
<body>
    <div class="header">
        <h1>MY IMAGE GALLERY</h1>
    </div>

    <div class="row navbar">
        <div class="col offset-s3 s1">
            <a class="waves-effect waves-teal btn-flat btn-large" href="index.php">home</a>
        </div>
        <div class="col offset-s1 s1">
            <a class="waves-effect waves-teal btn-flat btn-large" href="movies.php">movies</a>
        </div>
        <div class="col offset-s1  s1">
            <a class="waves-effect waves-light btn-flat btn-large" href="personalities.php">personalities</a>
        </div>
        <div class="col offset-s1 s1">
            <a class="waves-effect waves-light btn-flat btn-large" href="cars.php">cars</a>
        </div>
     </div>

    <div class="container">
        <div class="row">
            <div class="col s5">
                <img src="./assets/logo/logo.png" alt="" width="600px" style="margin:20px 0 50px 0">
                <div class="row">
                    <div class="col s4 offset-s1">
                       <img src="./assets/logo/me.jpeg" alt="" width="100px" style="border-radius: 50px;">
                    </div>
                    <div class="col s7">
                        <h6><b>Name:</b> Swagat Panda</h6>
                        <h6><b>Reg. no.:</b> 201800523</h6>
                        <h6><b>Sec: </b> C</h6>
                    </div>
                </div>
                
            </div>
            <div class="col s5 offset-s2">
                <div class="bmi">
                    <div class="row">
                        <h3>💪🏻 BMI Calculator</h3>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input type="text" required id="h">
                            <label for="h">Height (in feets)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input type="text" required id="w">
                            <label for="w">Weight (in kgs)</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="waves-effect waves-light btn" id="btn" onClick="BMI()"><b>Calculate</b></button>
                    </div>
                    <center><b><h5 id="result_bmi"></h5></b></center>
                </div>
            </div>
        </div>     
    </div>
    
    <div class="footer">
        <p>Swagat Panda (201800523)</p>
    </div>

    <script type="text/javascript">
        function BMI() {
            var h = document.getElementById('h').value;
            var w = document.getElementById('w').value;
            h = h * 12 * 0.025; // height converted in meter 
            var bmi = w / (h * h);
            var bmio = (bmi.toFixed(2));

            if(bmio < 18.5) {
                message = "Underweight";    
            }                
            else if(bmio < 24.9) {
                message = "Normal";
            }
            else if(bmio < 29.9) {
                message = "Overweight";  
            }
            else if (bmio >= 29.9) {
                message = "Obese";
            }
            else {
                message = "NaN";
            }
            
            if(message != "NaN")
                document.getElementById("result_bmi").innerHTML = `Your BMI is <b>${bmio}</b> which is <b>${message}</b>`;
            else
                document.getElementById("result_bmi").innerHTML = "Please provide valid input 😅"
        }
    </script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>