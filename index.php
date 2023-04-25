<?php

if (isset($_GET['hash'])) {
    if ($_GET['hash'] === "aaK1STfY") {
        die('Use a different word! Try again!');
    }

    $hash = sha1($_GET['hash']);
    $target = sha1("aaK1STfY");
    if($hash == $target) {
        include('flag.php');
        print $flag;
    } else {
        print "Try again!";
    }
} else {
    show_source(__FILE__);
}

?>
