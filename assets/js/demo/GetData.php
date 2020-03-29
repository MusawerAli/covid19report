<?php
include('simple_html_dom.php');

$dom = new DomDocument;
$dom->loadHtmlFile('https://www.worldometers.info/coronavirus/');

$xpath = new DomXPath($dom);

// collect header names
$headerNames = array();
foreach ($xpath->query('//table[@id="main_table_countries_today"]//th') as $node) {
    $headerNames[] = $node->nodeValue;
}

// collect data
$data = array();
foreach ($xpath->query('//tbody/tr') as $node) {
    $rowData = array();
    foreach ($xpath->query('td', $node) as $cell) {
        $rowData[] = $cell->nodeValue;
    }

    $data[] = array_combine($headerNames, $rowData);
}
function Data($index,$value,$data){

    return $data[$index][$value];

}



?>