<?php
    // String
    $city = "Dhaka";
    var_dump($city);
    // var_dump "I love Bangladesh";

    echo "<br>";

    //integer
    var_dump(123);

    echo "<br>";

    //float
    var_dump(12.4);

    echo "<br>";

    // boolean
    var_dump(true); // true or false

    echo "<br>";

    // array
    var_dump (["apple", "banana", "cherry"]);
    
     echo "<br>";

     // object
     class myinfo
     {
        public $name = "Tamim";
     }

     $myInfo = new myInfo;
     var_dump($myInfo);

      echo "<br>";

      //Null
      var_dump(null);

       echo "<br>";

     // resource
     $myfile = fopen("test.txt", "r");
      var_dump($myfile);
     
     ?>