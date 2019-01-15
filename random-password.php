<? php
    function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2) {
    
    $pass_order = Array();
    $passWord = '';
    
    
    for 
        ($i=0; $i < $upper; $i++){
        $pass_order[] = chr(rand(65, 90));
    }
    for
        ($i=0; $i < $upper; $i++){
        $pass_order[] = chr(rand(97, 122));
    }for

        ($i=0; $i < $upper; $i++){
        $pass_order[] = chr(rand(48, 57));
    }for
       ($i=0; $i < $upper; $i++){
        $pass_order[] = chr(rand(33, 47));
    }
    
    
    shuffle($pass_order as $char){
        $password .= $char;
    }
    return $passWord;
}
echo "\n"."Generated Password :""\n";