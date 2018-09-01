<?php
//loops execute code set number of times

//for
for ($i=0; $i < 10 ; $i++) {
  // code...
  echo 'number' . ' '.$i;
  echo '<br>';
}
//white loop
$x=0;
while($x<10){
  echo $x;
  echo '<br />';
  $x++;
}

//do while
//params - condition
$y=0;
do{
  echo $y;
  echo '<br />';
  $y++;
}
while($y <10);

//for each
$people=['Brad', 'Bob', 'Shaun'];

foreach($people as $person){
  echo $person;
  echo '<br />';
}

$persons=['bob'=>'bob@gmail.com','brad'=>'brad@gmail.com', 'shaun'=>'shaun@gmail.com'];
  foreach($persons as $person =>$email){
    echo $person. ' : '.$email ;
    echo '<br />';
  }


?>
