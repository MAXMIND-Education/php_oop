<?php

$data = [
    'name' => 'Dilsha',
    'age' => 35,
    'email' => 'dilshan@maxmind.lk',
];

// Serialize the data
$serializedData = serialize($data);

echo "Serialized Data:\n";
echo $serializedData . "\n";

// Unserialize the data
$unserializedData = unserialize($serializedData);

echo "Unserialized Data:\n";
print_r($unserializedData);
