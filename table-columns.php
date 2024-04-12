<?php


$headings = ['Name', 'Age', 'City'];

$data = [
    ['Alice', 24, 'New York'],
    ['Bob', 30, 'Los Angeles'],
    ['Charlie', 45, 'Chicago'],
    ['Awnish kumar chinna swami muttu swami', 100, 'India']
];

// Calculate column widths
$columnWidths = array_map('strlen', $headings);
#print_r($columnWidths);

foreach ($data as $row) {
    #print_r($row);
    #echo PHP_EOL;
    foreach ($row as $key => $value) {
        $columnWidths[$key] = max($columnWidths[$key], strlen($value));
    }
}

// Output table
foreach ($data as $row) {
    foreach ($row as $key => $value) {
        // Adjust width of each cell to match the calculated column width
        echo str_pad($value, $columnWidths[$key] + 2);
    }
    echo PHP_EOL;
}