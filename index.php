<h3>TEST 1</h3>
<p><small>Repeat 3 times the contents of an array</small></p>

<?php
function repeat($input, $times=3){
    $out = implode('',$input);
    $out = str_repeat($out, $times);
    return str_split($out);
}
?>

<h5><u>In:</u> <?php print_r(array(1,2,3));?></h5>
<h5><u>Out:</u> <?php print_r(repeat(array(1,2,3)));?></h5>