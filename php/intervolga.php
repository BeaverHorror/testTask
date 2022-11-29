<?php

$a = 1000000; 		// Включаемое
$arrLength = 100; 	// Размерность массива
$min = 0;			// Минимальное значение массива
$max = 100;			// Максимальное значение массива
$count = 0; 		// Кол-во включений искомого в массиве

// Функция заполнения массива
function array_fill_rand($limit, $min=false, $max=false)
{
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}

// Создаём массив
$array = array_fill_rand($arrLength, $min, $max);

// Вывод начального массива 
echo '<pre>';
print_r($array);
echo '</pre>';

for($i = 0; $i < $arrLength; $i++){
	if(preg_match('/2/', $array[$i])){
      $count++;
    }
}

// Включаем значения в массив
for($i = 0; $i < $arrLength + $count; $i++){
  	if(preg_match('/2/', $array[$i])){
      	for($j = count($array)-1; $j > $i; $j--){
			$array[$j+1] = $array[$j];
      	}
      	$array[$i+1] = $a;
    }
}

// Вывод конечного массива
echo '<pre>';
print_r($array);
echo '</pre>';

?>

