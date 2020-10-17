<?php
    //Must Include Files
        include('../include/functions.inc.php');

    //Insert Appointment Data into Database
        if(isset($_POST['confirm'])) {

            //Store all User Details
                $name = sanitize_data($con, $_REQUEST['name']);
                $contactno = sanitize_data($con, $_REQUEST['contactno']);
                $department = sanitize_data($con, $_REQUEST['department']);
                $date = sanitize_data($con, $_REQUEST['date']);
                $time = sanitize_data($con, $_REQUEST['time']);

            //Insertion Query
                $insert = mysqli_query($con,"INSERT INTO opd_appointments (sno, name, contactno, department, date, time) VALUES ('', '$name', '$contactno', '$department', '$date', '$time')");

            //Confirm Insertion
                if($insert) {
                    header("Location: ./");
                    die();
                } else {
                    echo "Unsuccessful";
                }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/style.css" />

    <title>OPD Appointments</title>
</head>
<body>

    <?php include('../include/header.html.php'); ?>

    <!--Main Container-->
    <div class="main-container">
      <!--Form-->
      <form method="post">
        <div class="form-wrapper">

            <!--Section 1-->
            <div class="form active">
                <div class="form-img">
                    <img
                        src="../assets/images/undraw_doctor_kw5l.png"
                        alt="Doctor Image"
                    />
                </div>
                <div class="form-content">
                    <div class="input-group">
                        <input type="text" placeholder="Patient's Name" name="name" id="name" />
                        <label for="name">Patient's Name</label>
                    </div>
                    <div class="input-group">
                        <input type="number" placeholder="Contact No." name="contactno" id="contactno" />
                        <label for="contactno">Contact No.</label>
                    </div>
                    <div class="input-group">
                        <button type="button" onclick="changeSection(1, 2);">Proceed</button>
                    </div>
                </div>
            </div>

            <!--Section 2-->
            <div class="form">
                <div class="form-img">
                    <img
                        src="../assets/images/undraw_doctors_hwty.png"
                        alt="Doctor Image"
                    />
                </div>
                <div class="form-content">
                    <div class="input-group">
                        <select name="department" id="department" required>
                            <option value="">SELECT DEPARTMENT</option>

                            <?php
                                //Fetch and Display all Departments
                                    $sql = mysqli_query($con, "SELECT * FROM departments");
                                    while($row = mysqli_fetch_assoc($sql)) {
                            ?>
                                    <option value="<?php echo $row['name']; ?>"></option>
                            <?php
                                    }
                            ?>

                        </select>
                    </div>
                    <div class="input-group">
                        <input type="date" placeholder="Appointment Date" name="date" id="date" onchange="showTimeSlots(this.value);" />
                        <label for="date">Appointment Date</label>
                    </div>
                    <div class="input-group half">
                        <button type="button" onclick="changeSection(2, 1);">Back</button>
                        <button type="button" onclick="changeSection(2, 3);">Proceed</button>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="form">
            </div>
        </div>
      </form>
    </div>

    


    <script src="./index.js"></script>
    <script>
        //Fetch Time Slots based on Date Selected using AJAX
            function showTimeSlots(date) {
                if (date == null) {
                    document.querySelectorAll(".form")[2].innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.querySelectorAll(".form")[2].innerHTML = this.responseText;
                        }
                    }
                    xmlhttp.open("GET", "timeslots.php?q="+date, true);
                    xmlhttp.send();
                }
            }
</script>
</body>
</html>