<?php

if (isset($_POST['submit'])) {
    $onload="";
    if (isset($_POST['height']) && is_numeric($_POST['height']) &&
        isset($_POST['width']) && is_numeric($_POST['width']) &&
        isset($_POST['hfov']) && is_numeric($_POST['hfov'])
    ) {
        $height = intval($_POST['height']);
        $width  = intval($_POST['width']);
        $hfov   = intval($_POST['hfov']);

        // convert to radians
        $hfovRad = deg2rad($hfov);

        // calculate vfov
        $vfovRad = 2*atan(tan($hfovRad/2)*($height/$width));

        // convert back to degrees
        $vfov    = rad2deg($vfovRad);

        // round up
        $vfov = ceil($vfov);
        $message = 'Calculated vertical FOV setting: <span id="vfov">' . $vfov . '</span>';
    }
    else {
        $message = '<span class="error">You must complete all fields!</span>';
    }
}
else {
    $onload = ' onload="init();"';
}

?>