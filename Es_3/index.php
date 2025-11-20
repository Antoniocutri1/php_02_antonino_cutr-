<?php

$words1 = [
  'vostro',
  67,
  'essere',
  'colle',
  'mi',
  'sempre',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
   'E'
  ],
'ritrovai',
'per'
],
'diritta'
];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => [
    'Virgilio',
    'Favore',
    'favore',
    ['fortuna']
  ],
 'fine' => '!'
];

$words2['nel']= 'Nel ' ;
$words2['di']= 'di ' ;
$words2['cammin']= 'cammin ' ;
$words2['nostra']= 'nostra ' ;
$words2['vita']= 'vita ' ;
$words2['una']= ' una ' ;
$words2['selva']= 'selva ' ;
$words2['oscura']= 'oscura, ' ;
$words2['che']= "che' " ;
$words2['la']= "la " ;
$words2['via']= " via " ;
$words2['smarrita']= " smarrita " ;

var_dump($words1[6]);
//Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita
echo($words2['nel']. $words1[6][3][0]. " ". $words2['di']. $words2['cammin'].$words2['di']
    .$words2['nostra']. $words2['vita']. $words1[4]. " ".$words1[6][4]. " ". $words1[6][5]. $words2['una']
    .$words2['selva'].$words2['oscura'].$words2['che'].$words2['la'].$words1[7].$words2['via'].$words1[6][1].$words2['smarrita']);




