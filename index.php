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

<p>-------------------------------------------------------------------------------------</p>

<h3>TEST 2</h3>
<p><small>No vowels, lowercase except the first letter</small></p>
<?php
function reformat($string){
    $vowels = array('a','e','i','o','u');
    $string = strtolower('liMeSHArp DeveLoper TEST');
    $string = str_replace($vowels, '', $string);
    $string = ucfirst($string);
    return $string;
}

?>
<h5><u>In:</u> <?php echo 'liMeSHArp DeveLoper TEST';?></h5>
<h5><u>Out:</u> <?php echo reformat('liMeSHArp DeveLoper TEST');?></h5>