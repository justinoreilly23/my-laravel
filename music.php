<?php

$song1                = (object) ['name' => "Rock Song", 'length' => "300"];
$song2                = (object) ['name' => "Jazz Song", 'length' => "300"];
$song3                = (object) ['name' => "Pop Song", 'length' => "300"];
$songs                = collect([$song1, $song2, $song3]);
$album1               = (object) ['name' => "", 'artist' => "", 'songs' => [], 'total_length' => ""];
$album1->songs        = collect([$song1, $song2, $song3])->toArray();
$album1->total_length = array_sum($songs->pluck('length')->toArray());
$album1->name         = "Song Album";
$album1->artist       = "John Doe";

foreach ($songs as $song)
{
    $song->artist = "John Doe";
};

echo $album1;
echo $songs;

return "Done";