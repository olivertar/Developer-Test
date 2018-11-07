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

<p>-------------------------------------------------------------------------------------</p>

<h3>TEST 3</h3>
<p><small>Without using any built in functions, only a for loop, return the next binary number in a string or as an array</small></p>

<?php
function next_binary_number($input, $type='array'){
    $out = $outrev = array();
    $outstring = '';
    $carry = 0;
    
    $positions = count($input);
    
    for ($i = $positions; $i>0; $i--) {
        if($i == $positions):
            if($input[$i-1] == 1):
                $carry = 1;
                $outrev[] = 0;
            else:
                $outrev[] = 1;
            endif;
        else:
            if($carry == 1 && $input[$i-1] == 0):
                $outrev[] = 1;
                $carry = 0;
            elseif($carry == 1 && $input[$i-1] == 1):
                $outrev[] = 0;
            else:
                $outrev[] = $input[$i-1];
                $carry = 0;
            endif;
        endif;
    }
    
    if($carry == 1):
        $outrev[] = 1;
    endif;

    $pos = count($outrev);
    for ($j = 0; $j < $pos; $j++) {
        $out[$j] = $outrev[$pos-$j-1];
        $outstring.= $outrev[$pos-$j-1];
    }
    
    if($type == 'array'):
        return $out;
    else:
        return $outstring;
    endif;
    
}

/* TEST CASES */

$testinput = array(1,0);
//$testinput = array(1,1);
//$testinput = array(1,1,0);
//$testinput = array(1,0,0,0,0,0,0,0,0,1);

/* TEST CASES END */
?>
<h5><u>In:</u> <?php print_r($testinput);?></h5>
<h5><u>Out:</u> <?php print_r(next_binary_number($testinput));?></h5>
<h5><u>Out as String:</u> <?php print_r(next_binary_number($testinput, 'string'));?></h5>
