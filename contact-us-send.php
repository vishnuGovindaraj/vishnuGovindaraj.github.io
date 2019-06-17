<?php



if(isset($_POST['submit']) and $_POST["message"]){
    
    $msg = 'Name: ' .$_POST['name'] ."\n"
            .'Email: ' .$_POST['email'] ."\n"
            .'Comment: ' .$_POST['message'];

    mail('flaminhindu@gmail.com','Message from website',$msg);
    echo '<script language="javascript">';
    echo 'alert("Message has been sent. Thank you")';
    echo '</script>';
} else{
    echo '<script language="javascript">';
    echo 'alert("Message was not able to be sent.")';
    echo '</script>';
    exit(0);
}

?>