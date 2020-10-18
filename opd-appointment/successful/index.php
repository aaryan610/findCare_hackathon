<?php
    session_start();

    //Must Include Files
        include('../../include/functions.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="./index.css">

    <title>Appointment Confirmation</title>
</head>
<body>
    <?php

        if(isset($_SESSION['key'])) {
            $id = $_SESSION['key'];
            $query = mysqli_query($con, "SELECT * FROM opd_appointments WHERE sno='$id'");
            $row = mysqli_fetch_assoc($query);
    ?>

            <!-- Header -->
            <header>
                <nav class="navbar flex flex-ai-c">
                    <h1 class="flex flex-ai-c flex-jc-c">findCare</h1>
                    <ul class="navlinks flex flex-ai-c">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../../covid-19">Covid-19</a></li>
                        <li><a href="../">OPD Appointment</a></li>
                        <li class="appointment"><a href="../">Book Appointment</a></li>
                    </ul>
                    <ul class="hamburger">
                        <li class="lines"></li>
                        <li class="lines"></li>
                        <li class="lines"></li>
                    </ul>
                </nav>
            </header>

            <div class="table-container">
                <h2>Appointment Confirmed</h2>
                <div class="action-buttons">
                    <button type="button" onclick="saveAsPDF();"><i class="fas fa-download"></i> Save as PDF</button>
                    <button type="button" onclick="print();"><i class="fas fa-print"></i> Print</button>
                </div>
                <table>
                    <tbody>
                        <tr>
                            <td>Appointment Id:</tdlass=>
                            <td><?php echo $row['sno']; ?></tdclass=>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $row['name']; ?></td>
                        </divass=>
                        <tr>
                            <td>Contact No.:</td>
                            <td><?php echo $row['contactno']; ?></td>
                        </tr>
                        <tr>
                            <td>Departmnent:</td>
                            <td><?php echo $row['department']; ?></td>
                        </tr>
                        <tr>
                            <td>Date:</td>
                            <td><?php echo $row['date']; ?></td>
                        </tr>
                        <tr>
                            <td>Time Slot:</td>
                            <td><?php echo $row['time']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--Footer-->
            <footer class="footer flex flex-jc-c flex-ai-c">
                <div class="footer-section section-one">
                    <h3>findCare</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti velit, labore id ipsa minus recusandae.</p>
                    <div class="lang-select">
                        <h4>Language</h4>
                        <span>English</span>
                        <span>Hindi</span>
                    </div>
                </div>
                <div class="footer-section section-two">
                    <h3>For Patients</h3>
                    <ul>
                        <li><a href="#">Search for doctors</a></li>
                        <li><a href="#">Bookings</a></li>
                        <li><a href="#">Covid-19</a></li>
                        <li><a href="#">Patient Dashboard</a></li>
                    </ul>
                </div>
                <div class="footer-section section-three">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Raipur, Chhattisgrah</li>
                        <li>+91-7000817013</li>
                        <li>findcare@gmail.com</li>
                    </ul>
                </div>
            </footer>
            
            <?php session_destroy(); ?>

    <?php
        } else {
            header('Location: ../');
            die();
        }

    ?>

    <script
    src="https://kit.fontawesome.com/7368c40b21.js"
    crossorigin="anonymous"
></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>

<script>

    //Function to Save Slip as PDF
        const saveAsPDF = () => {
            const HTML_Width = $(".table-container table").width();
            const HTML_Height = $(".table-container table").height();
            const top_left_margin = 15;
            const PDF_Width = HTML_Width + (top_left_margin * 2);
            const PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
            const canvas_image_width = HTML_Width;
            const canvas_image_height = HTML_Height;

            const totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

            html2canvas($(".table-container table")[0]).then(function (canvas) {
                const imgData = canvas.toDataURL("image/jpeg", 1.0);
                const pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
                for (let i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
                }
                pdf.save("<?php echo $row['name'] . "_" . $row['sno'] . "_" . $row['date'] ?>.pdf");
            });
        }

    //Function to Print Slip
        const print = () => {
            const table = document.querySelector(".table-container table");

            newWin = window.open("");
            newWin.document.write(table.outerHTML);
            newWin.print();
            newWin.close();
        };
</script>
</body>
</html>