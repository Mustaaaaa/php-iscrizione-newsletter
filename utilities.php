<?php
$user_email = $_POST['email'] ?? '';
// var_dump($user_email);

if (str_contains($user_email, '@') && str_contains($user_email, '.')) {
    // var_dump($user_email);
?>
    <p class='alert alert-success'>Sent successfully to <br> <?php echo $user_email ?></p>
<?php
} elseif (str_contains($user_email, '@')) {
?>
    <p class='alert alert-danger'>Error '.' is not present <br> <?php echo $user_email ?> <br> please try again</p>
<?php
} elseif (str_contains($user_email, '.')) {
?>
    <p class='alert alert-danger'>Error '@' is not present <br> <?php echo $user_email ?> <br> please try again</p>
<?php
} else {
?>
    <p class='alert alert-danger'>Error '.' and '@' are not present <br> <?php echo $user_email ?> <br> please try again</p>
<?php
};
?>