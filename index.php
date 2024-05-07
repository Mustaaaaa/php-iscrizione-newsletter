<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <?php require_once "./header.php"; ?>
    </header>

    <main>
        <form action="" method="post">
            <div class="container pad">
                <style>
                    .pad{
                        padding: 200px 0 200px 0;
                    }
                </style>
                <div class="input-section d-flex m-5">
                    <style>
                        .input-section {
                            flex-wrap: wrap;
                        }
                    </style>
                    <p class="col-6 p-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $_POST['name'] ?? ''; ?>">
                    </p>
                    <p class="col-6 p-2">
                        <label for="lastname" class="form-label">Lastname</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $_POST['lastname'] ?? ''; ?>">
                    </p>
                    <p class="col-6 p-2">
                        <label for="email" class="form-label">Email Adresse</label>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo $_POST['email'] ?? ''; ?>">
                    </p>
                    <p class="col-6 p-2">
                        <label for="phonenumber" class="form-label">Phone number</label>
                        <input type="text" id="phonenumber" name="phonenumber" class="form-control" value="<?php echo $_POST['phonenumber'] ?? ''; ?>">
                    </p>
                    <button class="btn btn-primary m-2">Send</button>
                </div>
                <div class="d-flex justify-content-center">
                    <?php
                    include_once "./utilities.php";
                    $user_email = $_POST['email'] ?? '';
                    $user_name = $_POST['name'] ?? '';
                    $user_lastname = $_POST['lastname'] ?? '';
                    $user_phonenumber = $_POST['phonenumber'] ?? '';
                    echo nameVerification($user_name);
                    echo lastnameVerification($user_lastname);
                    echo emailVerification($user_email);
                    echo phoneNumberVerification($user_phonenumber);
                    ?>
                </div>
            </div>
        </form>
    </main>



    <footer>
        <?php require_once "./footer.php"; ?>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>