

---------- Forwarded message ---------
From: Allemar Tubongbanua <tubongbanuaallemar@gmail.com>
Date: Tue, Jan 15, 2019 at 2:48 PM
Subject: Hi babe
To: <janmarkballados@gmail.com>


<?php
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
                "Belgium"=>"Brussels", "Denmark"=>"Copenhagen",
                "Findland"=>"Helsinki", "France"=>"Paris",
                "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
                "Germany"=>"Berlin", "Greece"=>"Athens",
                "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                "Portugal"=>"Lisbon", "Spain"=>"Madrid",
                "Sweden"=>"Stockholm", "United Kingdom"=>"London",
                "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
                "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
                "Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
                "Austria"=>"Vienna", "Poland"=>"Warsaw") ;

asort($seu) ;

foreach($ceu as $country => $capital)
{
    echo "The capital of $country is $capital"."<br>" ;
}
?>