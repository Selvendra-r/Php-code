<?php
$a=(int)readline("Enter the line :: ");

    for($i=0;$i<$a*$a;$i++){
        if($i%$a==0){
            echo "\n";
        }
        echo "*";
    }
?>