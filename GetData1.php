<?php


$data = array(
    array
    (
      "[Country,Other] => USA
        [TotalCases] => 123,750
        [NewCases] => +172
        [TotalDeaths] => 2,227 
        [NewDeaths] => +6
        [TotalRecovered] => 3,231
        [ActiveCases] => 118,292
        [Serious,Critical] => 2,666
        [Tot Cases/1M pop] => 374
        [Deaths/1M pop] => 7
        [1stcase] => Jan 20 "
    ),
    array("
    [Country,Other] => Italy
            [TotalCases] => 92,472
            [NewCases] => 
            [TotalDeaths] => 10,023 
            [NewDeaths] => 
            [TotalRecovered] => 12,384
            [ActiveCases] => 70,065
            [Serious,Critical] => 3,856
            [Tot Cases/1M pop] => 1,529
            [Deaths/1M pop] => 166
            [1stcase] => 
Jan 29
    ")

);

function Data($index,$value,$data){

    return $data[$index][$value];

}
echo "<pre>";
print_r($data[]);
echo "<pre>";
echo Data(0,"TotalCases",$data);
?>
