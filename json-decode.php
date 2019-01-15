<?php

function w3rfunction($value,$key)
{
    echo "$key : $value"."<br>";
}


$json = '{
"Title": "The Cuckoos Calling"
"Author:" "Robert Galbraith"
"Detail":
{
"Publisher": "Little Brown"
}
}';

$j1 = json_decode($json,true);

array_walk_recursive($jl,"w3rfunctions")
    ?>