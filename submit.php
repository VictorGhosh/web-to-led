<?php
    $myfile = fopen("/home/pi/repo/matrixDisplay/message.txt", "w") or die("Unable to open file!");
    $txt = $_POST['my_html_input_tag'];
    fwrite($myfile, $txt);
    fclose($myfile);

    // system('whoami');
    // system('python3 display.py');
    
    $command = escapeshellcmd('python3 tester.py');
    $output = shell_exec($command);
    if ($output == null) {
        echo 'shell_exec failure';
    } else {
        echo $output;
    }

    // $output = shell_exec('python3 display.py');
    // if ($output == null) {
    //     echo 'shell_exec failure';
    // } else {
    //     include('index.php');
    // }

    // $output = null;
    // $retval = null;
    // exec('python3 /home/pi/repo/matrixDisplay/display.py', $output, $retval);
    // echo "Returned with status $retval and output:\n";
    // print_r($output);
?>
