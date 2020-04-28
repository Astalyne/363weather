<?php
$city = $_GET['city'];
$api = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&units=metric&appid=c2c3c845e6f270f0f917824e733b7624";
$d = json_decode(file_get_contents($api), true);
$temp = $d['main']['temp'];
$temperature = "Temp: ('C): " . $temp ;
$clouds = "Clouds Percentage:" . $d['clouds']['all'];
$humidity = "Humidity Level:" . $d['main']['humidity'];
$windspeed = "Wind Speed (m/s):" . $d['wind']['speed'];
?>
<html>
<body>
<div class="container">
    <h2 style="text-align:center">
        </b><br>
        <?php echo $temperature; ?>
        </b><br>
        <?php echo $clouds; ?>
        </b><br>
        <?php echo $humidity; ?>
        </b><br>
        <?php echo $windspeed; ?>
        </b><br>
    </h2>
</div>
</body>
</html>

