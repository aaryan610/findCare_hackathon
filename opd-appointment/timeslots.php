<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        include('../include/functions.inc.php');

        $date = sanitize_data($con, $_GET['q']);

        echo "<div class='time-slots'>";

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

                    //Concatenate the Time Range
                        $time = $hours . ":" . $mins . " - " . "$hoursMax" . ":" . $minsMax;

                    $sql = mysqli_query($con, "SELECT * FROM opd_appointments WHERE time='$time' AND date='$date'");
                    $count = mysqli_num_rows($sql);

                    //Define Different Classes based on Different Time Slots
                        if ($time == "13:30 - 14:00" || $time == "14:00 - 14:30" || $time == "16:30 - 17:00") {
                            echo "<div class='slot break'>";
                        } else if ($count > 0) {
                            echo "<div class='slot unavailable' value='" . $time . "'>";
                        } else {
                            echo "<div class='slot available' value='" . $time . "'>";
                        }

                    //Display Time for Time Slot
                        echo "<div class='time'>" . $time . "</div>";

                            //Display Status and Choose Button
                                if ($time == "13:30 - 14:00" || $time == "14:00 - 14:30" || $time == "16:30 - 17:00") {
                                    echo "<div class='status'>Break</div>";
                                } else if ($count > 0) {
                                    echo "<div class='status'>Already Booked</div>";
                                } else {
                                    echo "
                                        <div class='status'>Available</div>
                                        <button type='button'>CHOOSE</button>
                                    ";
                                }
                            
                        echo "</div>";

                    if($mins == 30) {
                        $hours = $hours + 1;
                    } else {
                        $hours = $hoursMax;
                    }
                }
        echo "
            </div>
            <br />
            <div class='selected-slot'>Selected Time Slot: <span></span></div>
            <br />
            <div class='section-three-buttons'>
                <div class='input-group half'>
                    <button type='button' onclick='changeSection(3, 2)'>BACK</button>
                    <button type='submit' name='confirm'>CONFIRM APPOINTMENT</button>
                </div>
            </div>
        ";
    ?>
</body>
</html>