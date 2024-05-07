<?php
// $user_email = $_POST['email'] ?? '';
// $user_name = $_POST['name'] ?? '';
// $user_lastname = $_POST['lastname'] ?? '';
// var_dump($user_email);
// var_dump($user_name);
// var_dump($user_lastname);

$numbers = '0123456789';
function emailVerification($user_email)
{
        if (str_contains($user_email, '@') && str_contains($user_email, '.')) {
            // var_dump($user_email);
            ?>
        <p class='alert alert-success col-3 m-1'>Sent successfully to <br> <?php echo $user_email ?></p>
    <?php
        } elseif (str_contains($user_email, '@')) {
            ?>
        <p class='alert alert-danger col-3 m-1'>Error '.' is not present <br> <?php echo $user_email ?> <br> please try again</p>
    <?php
        } elseif (str_contains($user_email, '.')) {
            ?>
        <p class='alert alert-danger col-3 m-1'>Error '@' is not present <br> <?php echo $user_email ?> <br> please try again</p>
    <?php
        } else {
            ?>
        <p class='alert alert-danger col-3 m-1'>Invalid email <br> Please try again.</p>
<?php
        }
        ;
    }

function nameVerification($user_name)
{
    $letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

    if (preg_match('/^[' .$letters. ']+$/', $user_name)) {
        // var_dump($user_name);
    } else {
        ?>
        <p class='alert alert-danger col-3 m-1'>Invalid name <br> Please try again.</p>
    <?php    
    }
}
function lastnameVerification($user_lastname)
{
    $letters = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

    if (preg_match('/^[' . $letters . ']+$/', $user_lastname)) {
        // var_dump($user_lastname);
    } else {
        ?>
        <p class='alert alert-danger col-3 m-1'>Invalid lastname <br> Please try again.</p>
    <?php    
    }
}
function phoneNumberVerification($user_phonenumber)
{
    $numbers = '0123456789';

    if (preg_match('/^[' .$numbers. ']{10}+$/', $user_phonenumber)) {
        // var_dump($user_number);
    } else {
        ?>
        <p class='alert alert-danger col-3 m-1'>Invalid phone number <br> Please try again.</p>
    <?php    
    }
}

?>