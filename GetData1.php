<?php


$data=  array(
            [
                "Country,Other" => "Total",
                "TotalCases" => "663,079",
                "NewCases" => "+66,767",
                "TotalDeaths" => "30,857" ,
                "NewDeaths" => "+3,516",
                "TotalRecovered" => "141,476",
                "ActiveCases" => "490,746",
                "Serious,Critical" => "25,351",
                "Tot Cases/1M pop" => "85.1",
                "Deaths/1M pop" => "4.0",
                "1stcase" => "Jan 20"
            ],


            [
                "Country,Other" => "USA",
                "TotalCases" => "123,750",
                "NewCases" => "+172",
                "TotalDeaths" => "2,227" ,
                "NewDeaths" => "+6",
                "TotalRecovered" => "3,231",
                "ActiveCases" => "118,292",
                "Serious,Critical" => "2,666",
                "Tot Cases/1M pop" => "374",
                "Deaths/1M pop" => "7",
                "1stcase" => "Jan 20"
        ],

        [
            "Country,Other" => "Pakistan",
            "TotalCases" => "1,526",
            "NewCases" => "+31",
            "TotalDeaths" => "13" ,
            "NewDeaths" => "+1",
            "TotalRecovered" => "29",
            "ActiveCases" => "1,484",
            "Serious,Critical" => "11",
            "Tot Cases/1M pop" => "7",
            "Deaths/1M pop" => "0.06",
            "1stcase" => "Feb 25"
        ],

        [
            "Country,Other" => "Turkey",
            "TotalCases" => "7,402",
            "NewCases" => "+1,704",
            "TotalDeaths" => "108" ,
            "NewDeaths" => "+16",
            "TotalRecovered" => "70",
            "ActiveCases" => "7,224",
            "Serious,Critical" => "445",
            "Tot Cases/1M pop" => "88",
            "Deaths/1M pop" => "1",
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
            "TotalCases" => "35,408",
            "NewCases" => "+3,076",
            "TotalDeaths" => "2,517" ,
            "NewDeaths" => "+139",
            "TotalRecovered" => "11,679",
            "ActiveCases" => "21,212",
            "Serious,Critical" => "3,206",
            "Tot Cases/1M pop" => "422",
            "Deaths/1M pop" => "30",
            "1stcase" => "Feb 18"
        ],
        [
            "Country,Other" => "Morocco",
            "TotalCases" => "402",
            "NewCases" => "+0",
            "TotalDeaths" => "25" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "12",
            "ActiveCases" => "365",
            "Serious,Critical" => "1",
            "Tot Cases/1M pop" => "11",
            "Deaths/1M pop" => "0.7",
            "1stcase" => "Mar 01"
        ],
        [
            "Country,Other" => "Afghanistan",
            "TotalCases" => "110",
            "NewCases" => "+0",
            "TotalDeaths" => "4" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "2",
            "ActiveCases" => "104",
            "Serious,Critical" => "0",
            "Tot Cases/1M pop" => "3",
            "Deaths/1M pop" => "0.1",
            "1stcase" => "Feb 23"
        ],
        [
            "Country,Other" => "India",
            "TotalCases" => "987",
            "NewCases" => "+100",
            "TotalDeaths" => "24" ,
            "NewDeaths" => "+4",
            "TotalRecovered" => "84",
            "ActiveCases" => "879",
            "Serious,Critical" => "0",
            "Tot Cases/1M pop" => "0.7",
            "Deaths/1M pop" => "0.02",
            "1stcase" => "Jan 29"
        ],
        [
            "Country,Other" => "China",
            "TotalCases" => "81,439",
            "NewCases" => "+45",
            "TotalDeaths" => "3,300" ,
            "NewDeaths" => "+5",
            "TotalRecovered" => "75,448",
            "ActiveCases" => "2,691",
            "Serious,Critical" => "742",
            "Tot Cases/1M pop" => "57",
            "Deaths/1M pop" => "2",
            "1stcase" => "Jan 10"
        ],
        [
            "Country,Other" => "Australia",
            "TotalCases" => "3,969",
            "NewCases" => "+334",
            "TotalDeaths" => "16" ,
            "NewDeaths" => "+2",
            "TotalRecovered" => "226",
            "ActiveCases" => "3,727",
            "Serious,Critical" => "23",
            "Tot Cases/1M pop" => "156",
            "Deaths/1M pop" => "0.6",
            "1stcase" => "Jan 24"
        ],
        [
            "Country,Other" => "Canada",
            "TotalCases" => "5,655",
            "NewCases" => "+0",
            "TotalDeaths" => "60" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "508",
            "ActiveCases" => "5,087",
            "Serious,Critical" => "120",
            "Tot Cases/1M pop" => "150",
            "Deaths/1M pop" => "2",
            "1stcase" => "Jan 24"
        ],
        [
            "Country,Other" => "Russia",
            "TotalCases" => "1,264",
            "NewCases" => "+228",
            "TotalDeaths" => "4" ,
            "NewDeaths" => "+0",
            "TotalRecovered" => "49",
            "ActiveCases" => "1,211",
            "Serious,Critical" => "8",
            "Tot Cases/1M pop" => "9",
            "Deaths/1M pop" => "0.03",
            "1stcase" => "Jan 30"
        ],
            
)

;



function Data($index,$value,$data){

    return $data[$index][$value];

}


?>
