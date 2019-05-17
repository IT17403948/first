<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/16/2019
 * Time: 10:00 AM
 */
?>
<html>
<body>
<?php
if (session_id() == '' || !isset($_SESSION['logeduser'])) {
    header('Location: ./index.php');
    ?>
    <?php
}
else {
echo "Hi, " . $_SESSION['logeduser'] . " | ";
?>
<form action="" method ="post">

        <input id="login-username" type="hidden" class="form-control" name="csrf_token" value="<?php  echo $_SESSION["token"];  ?>"> <!---q6,hidden input for value in token>

</form>
    <?php
    echo $display_messsge;
}
?>
<script type="text/javascript" src="./script.js"></script>
</body>
</html>
/*
******************************
q3
******************************
*/