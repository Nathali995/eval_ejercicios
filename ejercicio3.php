<?php
class Palindrome
{
public static function isPalindrome($word)
{$cadena= strtolower($word);

$size=strlen($cadena);
$j=$size-1;

for($i=0;$i<$size;$i++,$j--){ 
    
	    if($cadena[$i]==$cadena[$j])
	    {
	    	$result='TRUE';
	    }else
	    {
	    	$result='FALSE';
	    	$i=$size;
	    }
	
}

return $result;
}
}

echo Palindrome::isPalindrome('Deleveled');
?>