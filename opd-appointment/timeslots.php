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
                $sql = mysqli_query($con, "SELECT * FROM opd_appointments WHERE date='$date'");

            //First Time
                $hours = 10;
                $mins = "00";

            //Second Time
                $hoursMax;
                $minsMax;

            //Fetch All TIme Slots
                for($i = 1; $i <= 16; $i++) {
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
                    
                    //Define Different Classes based on Different Time Slots
                        if(($hours == 13 && $mins == 30) || ($hours == 14 && $mins == "00") || ($hours == 16 && $mins == 30)) {
                            echo "<div class='slot break'>";
                        } else {
                            echo "<div class='slot available' value='" . $hours . ":" . $mins . " - " . "$hoursMax" . ":" . $minsMax . "'>";
                        }

                    //Display Time for Time Slot
                        echo "<div class='time'>" . $hours . ":" . $mins . " - " . $hoursMax . ":" . $minsMax . "</div>";
                            if(($hours == 13 && $mins == 30) || ($hours == 14 && $mins == "00") || ($hours == 16 && $mins == 30)) {
                                echo "<div class='status'>Break</div>";
                            } else {
                                echo "<div class='status'>Available</div>";
                            }
                            
                        echo "
                                <button type='button'>CHOOSE</button>
                            </div>
                        ";

                    if($mins == 30) {
                        $hours = $hours + 1;
                    } else {
                        $hours = $hoursMax;
                    }
                }
        echo "</div>";
    ?>
</body>
</html>