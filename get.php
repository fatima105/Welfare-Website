
<?php

$response = file_get_contents("http://137.184.28.231:4000/get-all-uc");
$data[] = json_decode($response, true);

$url = 'http://137.184.28.231:4000/get-all-uc';

//Use file_get_contents() function to retrieve the data
$data = file_get_contents($url);

// // Decode the JSON data
$json = json_decode($data, true);
// full daata
print_r($json);

// // Access the values in the JSON data
foreach ($json as $user) {
    echo "<br />";
    echo "name " . $user['name'];
    echo "id " . $user['_id'];
    echo "<br /> <br />";
}
