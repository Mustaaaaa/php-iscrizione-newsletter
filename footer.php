<?php
$text = $_POST['text'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>
    <footer>
        <div class="footer-section">
            <style>
                .footer-section {
                    margin-top: 20px;
                    padding-top: 15px;
                    background-color: black;
                }
            </style>
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="col-6 d-flex justify-content-center">
                        <img src="./foto.jpg" alt="">
                        <style>
                            img {
                                width: 200px;
                            }
                        </style>
                    </div>

                    <form class="col-6" method="POST">
                        <label for="text" class="form-label text-light">If you are one of us insert your name</label>
                        <input type="text" id="text" name="text" placeholder="Insert your name..." class="form-control mb-2">
                        <button class="btn btn-primary">Send</button>
                        <?php
                        echo "<p class='alert alert-primary mt-2'>Hello $text now we are in 97566854946 person that have the same problem.</p>"
                        ?>
                    </form>
                </div>
                <div class="copyright-section">
                    <style>
                        .copyright-section {
                            color: white;
                            font-size: 10px;
                            padding: 40px;
                        }
                    </style>
                    <p>Copyright © 2021, All Rights Reserved.</p>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>