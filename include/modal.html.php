<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/modal.css">
</head>
<body>
    <?php
        function modal($type, $content) {
            echo '
                <div class="modal">
                    <div class="modal-wrapper">
                        <div class="modal-head">
                            <div class="modal-header-image">
            ';

            if($type == "alert") {
                echo '

                                <img src="../assets/images/alert.png" alt="Alert">
                            </div>
                        <div class="modal-title">Alert</div>
                ';
            } else {
                echo '

                                <img src="../assets/images/successful.png" alt="Successful">
                            </div>
                        <div class="modal-title">Successful</div>
                ';
            }
            
            echo '
                        </div>
                        <hr />
                        <div class="modal-body">
                            <div class="modal-content">
                                <p>' . $content .'</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    ?>
</body>
</html>