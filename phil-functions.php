<?php
/*
  Plugin Name: Philosophers
  Description: listen to Lao Tze, Buddha, Confucius
  Author: Chrissie Brown
  Date: 10.2024
*/

$phil_files=[
  plugin_dir_path(__FILE__) . '101buddhafortunes.txt',
  plugin_dir_path(__FILE__) . '190-lao-fortunes.txt',
  plugin_dir_path(__FILE__) . '75-confucius-fortunes.txt'
];

$phil_names=[
  "Ikkyu Sun",
  "Lao Tze",
  "Konfuzius"
];

$phil_images=[
  plugins_url("philosophers/ikkyu_sojun.jpg"),
  plugins_url("philosophers/lao-tze.jpg"),
  plugins_url("philosophers/konfuzius.jpg")
];

function phil_get_fortune() 
{
  global $phil_files, $phil_names, $phil_images;

  $fortune_who = rand(0,2);
  $fortune = new Fortune();

  $obj = new stdClass;
  $obj->text = $fortune->GetRandomQuote($phil_files[$fortune_who]);
  $obj->name = $phil_names[$fortune_who];
  $obj->image = $phil_images[$fortune_who];

  return ($obj);
}

// only one time or if new text files installed
// todo make a button in backend for this
function phil_do_index() 
{
  global $phil_files, $phil_names, $phil_images;

  $fortune = new Fortune();
  for ($i=0; $i<=2; $i++) {
        $fortune->CreateIndexFile($phil_files[$fortune_who]);
  }
}
