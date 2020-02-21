<?php
class linoIt {
    //variables declared with var keyword is public by default
    //Control Variables from limit the start and end of numbers
    var $ini = 1;
    var $end = 100;

    // Getter Setter method for variable initialization
    function getInit() {
        return $this->ini;
    }

    function getEnd() {
        return $this->end;
    }

    function setInit($ini) {
        $this->ini =  $ini;
    }

    function setEnd($end) {
        $this->end = $end;
    }

    function checkLino() {
        $dispVal = array('15'=>'Linianos', '5'=>'IT', '3'=>'Linio');
        for ($i=$this->ini; $i<=$this->end; $i++) {
            echo $this->checkValNum($i, $dispVal);
        }
        return true;
    }

    function checkValNum($number, $dispVal) {
        foreach ($dispVal AS $key => $value) {
            if ($number%$key == 0) {
                return $value."<br>";
            }
        }
        return $number."<br>";
    }
}
?>