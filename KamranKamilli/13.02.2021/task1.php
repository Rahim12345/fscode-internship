<?php

function numOfWords ( $str )
{
	$isSeperator = TRUE;
	$count       = 0;
	$i           = 0;
	$lengthOfStr = 0;

	//length of the string
	while ( isset( $str[ $lengthOfStr ] ) )
	{
		$lengthOfStr++;
	}

	//iterates over each charachter to find seperator
	while ( $i < $lengthOfStr )
	{
		if ( $str[ $i ] == " " || $str[ $i ] == "\n" || $str[ $i ] == "\t" )
		{
			$isSeperator = TRUE;
		}
		else if ( $isSeperator )
		{
			$isSeperator = FALSE;
			$count++;
		}
		$i++;
	}

	return $count;
}

$text = "Bu cumlede tam-tamina alti soz var";
echo "Number of words = " . numOfWords( $text );

?>