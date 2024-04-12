<?php
function generateTable($data, $Headings = [])
{   // Calculate column widths
    $columnWidths = array_map('strlen', $Headings);
    foreach ($data as $row) {
        foreach ($row as $key => $value) {
            $columnWidths[$key] = max($columnWidths[$key], strlen($value));
        }
    }
    // Output top border
    echo '+';
    foreach ($columnWidths as $width) {
        echo str_repeat('-', $width + 2) . '+';
    }
    echo PHP_EOL;
    // Output table content
    foreach ($data as $row) {
        echo '|';
        foreach ($row as $key => $value) {
            // Adjust width of each cell to match the calculated column width
            echo ' ' . str_pad($value, $columnWidths[$key], ' ') . ' |';
        }
        echo PHP_EOL;
        // Output row separator
        echo '+';
        foreach ($columnWidths as $width) {
            echo str_repeat('-', $width + 2) . '+';
        }
        echo PHP_EOL;
    }
}

// Example data
$data = [
    ['Alice', 24, 'New York'],
    ['Bob', 30, 'Los Angeles'],
    ['Charlie', 45, 'Chicago'],
    ['Awnish kumar chinna swami muttu swami', 100, 'India']
];

// Generate table
generateTable($data, ['Name', 'Age', 'City']);