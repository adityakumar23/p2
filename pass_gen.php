<?php
/* this is the php file for generating the
xkcd password*/
#echo "WE ARE JUST GETTING STARTED";
#var_dump($_GET);
#echo $_GET["passwd"];
#echo $_GET["number"];
#echo $_GET["symbol"];
$nwords='';
$numbornot='';
$symbornot='';
$finpasswd='';

$wordlist=array("able","bumble","cucum","dumber","euler","fumble");
$number=array("1","2","3","4","5");
$symb = array("#","@","&","%","!");


#loop over the _GET array to archive the user's inputs
foreach($_GET as $userinput => $inputvalue):
    if($userinput == 'passwd'){
        $nwords=$inputvalue;

        #echo "Number of words is".$inputvalue;
    }
    elseif ($userinput == 'numberoption'){
        $numbornot=$inputvalue;
        #echo 'you selected the numb opt';
    }
    elseif ($userinput == 'symboloption'){
        $symbornot = $inputvalue;
        #echo 'you selected the symb opt';
    }

endforeach;

#check for type of input number of words
$posswordnum = array("0","1","2","3","4","5","6","7","8");

if (!(in_array($nwords,$posswordnum))){
    echo "invalid number of words value";
    $nwords='5';
}

#now generate the password (word part)
for ($i=0;$i<$nwords;$i++){
    $j=rand(0,5);

    if ($i == 0){
            $finpasswd = $finpasswd . $wordlist[$j];
    } else {
            $finpasswd = $finpasswd . '-'. $wordlist[$j];
    }

}

#now add the numbers and symbols if required

if ($numbornot == 'yes'){
    $k=rand(0,4);
    $finpasswd = $finpasswd . $number[$k];
}
if ($symbornot == 'yes'){
    $l=rand(0,4);
    $finpasswd = $finpasswd . $symb[$l];
}

?>
