<?php
if (isset($_GET['a'], $_GET['b'], $_GET['c'], $_GET['d'], $_GET['e'])) {
    $a = escapeshellarg($_GET['a']);
    $b = escapeshellarg($_GET['b']);
    $c = escapeshellarg($_GET['c']);
    $d = escapeshellarg($_GET['d']);
    $e = escapeshellarg($_GET['e']);

    $command = "python3 data_management.py $a $b $c $d $e";
    $output = shell_exec($command);


    $json_start = strpos($output, '{'); 
    if ($json_start !== false) {
        $output = substr($output, $json_start);
    }
    
    $result = json_decode($output, true);
    

    if (isset($result['error'])) {
        echo "<h2>Error:</h2><p>{$result['error']}</p>";
        exit();
    }

    $original_values = isset($result['original']) ? $result['original'] : [];
    $sorted_values = isset($result['sorted']) ? $result['sorted'] : [];

    echo "<h2>Results:</h2>";
    echo "<p>Original Values: " . (!empty($original_values) ? implode(", ", $original_values) : "N/A") . "</p>";
    echo "<p>Sorted Values (Greater than 10): " . (!empty($sorted_values) ? implode(", ", $sorted_values) : "N/A") . "</p>";
    echo "<p>{$result['negative_message']}</p>";
    echo "<p>{$result['avg_message']}</p>";
    echo "<p>{$result['positive_count_message']}</p>";

} else {
    echo "<h2>Error:</h2><p>Missing input values.</p>";
}
?>
