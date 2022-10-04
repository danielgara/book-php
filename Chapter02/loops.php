<?php 

#######################
### WHILE #############
#######################

$total = 0;
$i = 1;
while ($i <= 10) {
    $total += $i;
    $i++;
}

echo $total.'<br />';
echo $i;

echo '<br /><br />';

#######################
### FOR ###############
#######################

for ($counter = 0; $counter < 10; $counter++) {
    echo "Counter is $counter <br/>";
}

echo $counter;
echo '<br /><br />';
    