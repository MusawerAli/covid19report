<?php


$data=  array(
            [
                "Country,Other" => "Total",
                "TotalCases" => "738,457",
                "NewCases" => "+16,098",
                "TotalDeaths" => "35,005" ,
                "NewDeaths" => "+1,039",
                "TotalRecovered" => "156,308",
                "ActiveCases" => "547,144",
                "Serious,Critical" => "28,400",
                "Tot Cases/1M pop" => "94.7",
                "Deaths/1M pop" => "4.5",
                "1stcase" => "Jan 20"
            ],


            [
                "Country,Other" => "USA",
                "TotalCases" => "142,793",
                "NewCases" => "+333",
                "TotalDeaths" => "2,490" ,
                "NewDeaths" => "+6",
                "TotalRecovered" => "4,562",
                "ActiveCases" => "135,741",
                "Serious,Critical" => "2,970",
                "Tot Cases/1M pop" => "431",
                "Deaths/1M pop" => "8",
                "1stcase" => "Jan 20"
        ],

        [
            "Country,Other" => "Pakistan",
            "TotalCases" => "1,625",
            "NewCases" => "+28",
            "TotalDeaths" => "20" ,
            "NewDeaths" => "+6",
            "TotalRecovered" => "29",
            "ActiveCases" => "1,576",
            "Serious,Critical" => "11",
            "Tot Cases/1M pop" => "7",
            "Deaths/1M pop" => "0.09",
            "1stcase" => "Feb 25"
        ],

        [
            "Country,Other" => "Turkey",
            "TotalCases" => "9,217",
            "NewCases" => "+0",
            "TotalDeaths" => "131" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "105",
            "ActiveCases" => "8,981",
            "Serious,Critical" => "568",
            "Tot Cases/1M pop" => "109",
            "Deaths/1M pop" => "2",
            "1stcase" => "Mar 09"
        ],

        [
            "Country,Other" => "SaudiArabia",
            "TotalCases" => "1,203",
            "NewCases" => "+99",
            "TotalDeaths" => "4" ,
            "NewDeaths" => "+1",
            "TotalRecovered" => "37",
            "ActiveCases" => "1162",
            "Serious,Critical" => "6",
            "Tot Cases/1M pop" => "35",
            "Deaths/1M pop" => "0.1",
            "1stcase" => "Mar 01"
        ],
        [
            "Country,Other" => "Iran",
            "TotalCases" => "41,495",
            "NewCases" => "+3,186",
            "TotalDeaths" => "2,757" ,
            "NewDeaths" => "+117",
            "TotalRecovered" => "13,911",
            "ActiveCases" => "24,827",
            "Serious,Critical" => "3,511",
            "Tot Cases/1M pop" => "494",
            "Deaths/1M pop" => "33",
            "1stcase" => "Feb 18"
        ],
        [
            "Country,Other" => "Morocco",
            "TotalCases" => "516",
            "NewCases" => "+37",
            "TotalDeaths" => "29" ,
            "NewDeaths" => "+3",
            "TotalRecovered" => "14",
            "ActiveCases" => "473",
            "Serious,Critical" => "1",
            "Tot Cases/1M pop" => "14",
            "Deaths/1M pop" => "0.8",
            "1stcase" => "Mar 01"
        ],
        [
            "Country,Other" => "Afghanistan",
            "TotalCases" => "120",
            "NewCases" => "+0",
            "TotalDeaths" => "4" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "2",
            "ActiveCases" => "114",
            "Serious,Critical" => "+0",
            "Tot Cases/1M pop" => "3",
            "Deaths/1M pop" => "0.1",
            "1stcase" => "Feb 23"
        ],
        [
            "Country,Other" => "India",
            "TotalCases" => "1,071",
            "NewCases" => "+47",
            "TotalDeaths" => "29" ,
            "NewDeaths" => "+2",
            "TotalRecovered" => "100",
            "ActiveCases" => "942",
            "Serious,Critical" => "0",
            "Tot Cases/1M pop" => "0.8",
            "Deaths/1M pop" => "0.02",
            "1stcase" => "Jan 29"
        ],
        [
            "Country,Other" => "China",
            "TotalCases" => "81,470",
            "NewCases" => "+31",
            "TotalDeaths" => "3,304" ,
            "NewDeaths" => "+4",
            "TotalRecovered" => "75,700",
            "ActiveCases" => "2,466",
            "Serious,Critical" => "633",
            "Tot Cases/1M pop" => "57",
            "Deaths/1M pop" => "2",
            "1stcase" => "Jan 10"
        ],
        [
            "Country,Other" => "Australia",
            "TotalCases" => "4,245",
            "NewCases" => "+82",
            "TotalDeaths" => "18" ,
            "NewDeaths" => "+1",
            "TotalRecovered" => "244",
            "ActiveCases" => "3,983",
            "Serious,Critical" => "28",
            "Tot Cases/1M pop" => "166",
            "Deaths/1M pop" => "0.7",
            "1stcase" => "Jan 24"
        ],
        [
            "Country,Other" => "Canada",
            "TotalCases" => "6,320",
            "NewCases" => "+0",
            "TotalDeaths" => "65" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "573",
            "ActiveCases" => "5,682",
            "Serious,Critical" => "120",
            "Tot Cases/1M pop" => "167",
            "Deaths/1M pop" => "2",
            "1stcase" => "Jan 24"
        ],
        [
            "Country,Other" => "Russia",
            "TotalCases" => "1,836",
            "NewCases" => "+302",
            "TotalDeaths" => "9" ,
            "NewDeaths" => "+1",
            "TotalRecovered" => "66",
            "ActiveCases" => "1,761",
            "Serious,Critical" => "8",
            "Tot Cases/1M pop" => "13",
            "Deaths/1M pop" => "0.06",
            "1stcase" => "Jan 30"
        ],
            
)

;



function Data($index,$value,$data){

    return $data[$index][$value];

}


?>
