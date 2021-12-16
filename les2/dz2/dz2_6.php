<?php


function power($val,$pow)
{
	if ($pow == 0)
	{
		return 1;
	}
		return $val * power ($val, $pow - 1);
}
echo power(2, 3). '<br>';

echo   power(2, 4);