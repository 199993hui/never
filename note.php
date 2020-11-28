<?php
    extract($_REQUEST);
    $filename = $title .".txt";
    $file1=fopen("storage.txt","a") or die("Failed to create file");
    fwrite($file1,"Title\n");
    fwrite($file1, $title ."\n");
    fwrite($file1,"Note : \n");
    fwrite($file1, $note ."\n\n");;
    fclose($file1);

    // $file2 = fopen("storage.txt", "a") or die ("Failed to create file");
    // fwrite($file2, $filename."\n");
    // fclose($file2);

    header("Location:Home.php");
?>
