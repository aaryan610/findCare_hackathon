<?php
    include('../include/functions.inc.php');

    $date = $_GET['q'];
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        echo "<div class='time-slots'>";

            //Fetch all Appointmnets for Particular Date
                $sql=mysqli_query($con, "SELECT * FROM opd_appointments where date='$date'");

            //First Time
                $hours = 10;
                $mins = "00";

            //Second Time
                $hoursMax;
                $minsMax;

            //Counter
                $i = 1;

            //Fetch All TIme Slots
                while($row=mysqli_fetch_assoc($sql)) {
                    if($i%2 == 0) {
                        $mins = 30;
                        $minsMax = "00";
                    } else {
                        $mins = "00";
                        $minsMax = 30;
                    }

                    if($mins == 30) {
                        $hoursMax = $hours + 1;
                    } else {
                        $hoursMax = $hours;
                    }

                    if(($hours == 13 && $mins == 30) || ($hours == 14 && $mins == "00")) {
                        echo "<div class='slot break' value='" . $row['name'] . "'>";
                    } else {
                        echo "<div class='slot available' value='" . $row['name'] . "'>";
                    }
            echo "
                    <div class='time'>" . $hours . ":" . $mins . "-" . $hoursMax . ":" . $minsMax . "</div>
                </div>
                ";

                    if($mins == 30) {
                        $hours = $hours + 1;
                    } else {
                        $hours = $hoursMax;
                    }

                    $i++;
                }
        echo "</div>";
    ?>
</body>
</html>