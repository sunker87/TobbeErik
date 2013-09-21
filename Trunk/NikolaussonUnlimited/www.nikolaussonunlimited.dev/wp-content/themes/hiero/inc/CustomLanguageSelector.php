<?php
    $baseUrl = "http://" . $_SERVER['HTTP_HOST'];// . $_SERVER['REQUEST_URI'];
    $currentUrl = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $en = str_replace($baseUrl, $baseUrl . '/en', $currentUrl);
    $pt = str_replace($baseUrl, $baseUrl . '/pt', $currentUrl);
    $se = $currentUrl;
    echo "<a href='$se'><img class='imageLink' src='/wp-content/themes/hiero/Flags/Dirty Flag Folders Sweden.png'></img></a>";
    echo "<a href='$en'><img class='imageLink' src='/wp-content/themes/hiero/Flags/Dirty Flag Folders Uk.png'></img></a>";
    echo "<a href='$pt'><img class='imageLink' src='/wp-content/themes/hiero/Flags/Dirty Flag Folders Brazil.png'></img></a>";
?>