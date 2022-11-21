<?php
    require_once 'user.2.php';
    require_once 'class.php';
   
    $i04 = new Group('И-04');
   $x1 = new student('Pavel ', 'zasasd ', 17, 4.0);
   $x2 = new student('Kovas ', 'Zet ', 12, 4.1);

    $i04->addStudent($x1);
    $i04->addStudent($x2);
    $i04->addStudent(new student('Ekaterina ', 'Baxman ', 10, 4.3));
    $i04->addStudent(new student( 'Peeter ', 'Blood ', 12, 4.1));
    
    
    $i04->display();
    
?>