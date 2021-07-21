<?php

function bubblesort($num_array )
{
	do
	{
		$swapped = false;
		for( $i = 0, $c = count( $num_array ) - 1; $i < $c; $i++ )
		{
			if( $num_array[$i] > $num_array[$i + 1] )
			{
				list( $num_array[$i + 1], $num_array[$i] ) =
						array( $num_array[$i], $num_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $num_array;
}
 $array1 = array(4,2,100,143,94,7,10,55,9,48,36);
echo "Angka Acak :";
echo implode(', ',$array1 ) . "<br />\n";
echo "urutan angka dari kecil ke besar:";
echo implode(', ',bubblesort($array1));
?>

