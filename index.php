<?php

session_start();

if (isset($_REQUEST['method'])) {
    if ($_REQUEST['method'] == "view") {
        header("Location: ".$_REQUEST['locale'].
            "/view.php?num=".$_REQUEST['num'].
            "&valid=".$_REQUEST['valid'].
            "&name=".$_REQUEST['name'].
            "&bdate=".$_REQUEST['bdate'].
            "&pasp=".$_REQUEST['pasp']);
    }
} else {
    if (isset($_SESSION['locale'])) {
        header("Location: ".$_SESSION['locale']."/redirect.php");
    }
    header("Location: https://pornhub1.com");
}