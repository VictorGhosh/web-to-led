<?php
    echo $_POST['my_html_input_tag'];
    $myfile = fopen("/home/pi/repo/matrixDisplay/message.txt", "w") or die("Unable to open file!");
    $txt = $_POST['my_html_input_tag'];
    fwrite($myfile, $txt);
    fclose($myfile);
?>
