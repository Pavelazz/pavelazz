<?php
    require_once 'user.1.php';

    class student extends user {
        public $rate;
        
        public function __construct($n, $s, $a, $r) {
            $this->setinfo($n, $s, $a);
            $this->rate = $r;
        }

        public function show() {
            parent::show();
            echo 'reyting: '.$this->rate.'<br>';
        }

    }

?>