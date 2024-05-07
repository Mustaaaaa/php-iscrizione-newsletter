<?php

?>

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
        <div class="container">
            <div class="text-center">
                <h1>Newsletter</h1>
            </div>
        </div>
    </header>

    <main>
        <form action="" method="post">
            <div>
                <div class="email-input m-5">
                    <style>
                        .email-input {
                            width: 300px;
                        }
                    </style>
                    <p>
                        <label for="email" class="form-label">Email Adresse</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </p>
                    <button class="btn btn-primary mt-3 mb-3">Send</button>
                    <?php
                    $user_email = $_POST['email'] ?? '';
                    // var_dump($user_email);

                    if (str_contains($user_email, '@') && str_contains($user_email, '.')) {
                        // var_dump($user_email);
                        ?>
                        <p class='alert alert-success'>Sent successfully to <?php echo $user_email ?></p>
                        <?php
                    } elseif (str_contains($user_email, '@')) {
                        ?>
                        <p class='alert alert-danger'>Error '.' is not present <?php echo $user_email ?> please try again</p>
                        <?php
                    } elseif (str_contains($user_email, '.')) {
                        ?>
                        <p class='alert alert-danger'>Error '@' is not present <?php echo $user_email ?> please try again</p>
                        <?php
                    } else{
                        ?>
                        <p class='alert alert-danger'>Error '.' and '@' are not present <?php echo $user_email ?> please try again</p>
                        <?php
                    };
                    ?>
                </div>
            </div>
        </form>
    </main>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>