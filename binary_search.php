<?php
function binarySearch($coll, $item)
{
	$low = 0;
	$high = sizeof($coll) - 1;
	$mid = floor(($low + $high) / 2);

	while ($low <= $high) {
		$mid = floor(($low + $high) / 2);
		if ($coll[$mid] === $item) {
			return $mid;
		} elseif ($coll[$mid] > $item) {
			$high = $mid - 1;
		} elseif ($coll[$mid] < $item) {
			$low = $mid + 1;
		}
	}
	return null;
}
