<?php
    $hashopt = readline("Choose between md5 or sha1 to hash your phrase: ");
    $sentence = readline("Enter in your sentence: ");
    
    if ($hashopt == "md5") {
        echo "Your hashed value is: " . md5($sentence);
    } elseif ($hashopt == "sha1") {
        echo "Your hashed value is: " . sha1($sentence);
    }
?>