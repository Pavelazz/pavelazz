<?php
    require_once 'test1.php';
    $x = new car;
    $x->marka = 'Nissan';
    $x->color = 'Красный';
    
    echo $x->marka.' '.$x->color.'<br>';
    $x->go();
    $x->turn();
    $x->stop();
?>