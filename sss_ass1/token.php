<?php
/**
 * Created by PhpStorm.
 * User: Kavi
 * Date: 5/16/2019
 * Time: 9:56 AM
 */
class Token {
    public static function generate_token($session_id){ /*creating token and session identifier q2 and q3*/
        $_SESSION['token'] = md5($session_id);
        return $_SESSION['token'];
    }

    public static function check_token($token){ //lastq checking token valid or invalid
        if(isset($_SESSION['token']) && $token === $_SESSION['token']){
            unset($_SESSION['token']);
            echo "<script>alert('valid');</script>";
            echo "<noscript>valid</noscript>";
            return true;
        }
        else{
            echo "<script>alert('valid');</script>";
            echo "<noscript>invalid</noscript>";
            return false;
        }
    }
}
?>