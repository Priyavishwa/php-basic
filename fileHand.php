<?php
//File Open/Read

// r means open a file for read only mode
$myfile = fopen("demo.txt","r");

//The fread() function reads from an open file
//echo fread($myfile,filesize("demo.txt"));

//to read a single line from a file
//echo fgets($myfile);

// Output one line until end-of-file
//output line by line 
/*while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
*/

//Output one character until end-of-file
/*while(!feof($myfile)) {
    echo fgetc($myfile);
}*/

//create a new file 
$myfile2 = fopen("demo2.txt","w");
$txt = "HELLO Welcome to php file session\n";
fwrite($myfile2,$txt);


//to close the file
fclose($myfile);
fclose($myfile2);






?>