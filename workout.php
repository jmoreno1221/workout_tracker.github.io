<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/newexercise.css">
    <title>Workout</title>
</head>

<body>
    <h1 class="topname">Workout</h1>
    
    <form>

        <h5>Name of Workout</h5>
        <input id="workouttxt" type="text" name="workout" value="" placeholder="Name of Workout">
        <h5>Number of Exercises</h5>
        <input id="workouttxt" type="number" name="weight" value="" placeholder="Number of Exercises">
        
        
          <a href = "\index.php"><img src = "images/cancel_icon.png" 
    alt = "cancelicon"></a>
        <a href = "\newexercise.php"><img src = "images/ok_icon.png" 
    alt = "cancelicon"></a>
        
        

    </form>    

    <div>
        <nav class="navbar bottom-nav">
            <table class="bottom-nav">

                <tr>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/profile_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/history_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/home_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/data_icon.PNG"></td>
                    <td id="bottom-menu" onClick="document.location.href='index.php';"><img class="icons" src="images/settings_icon.PNG"></td>
                </tr>
            </table>
        </nav>
    </div>

</body>
</html>
