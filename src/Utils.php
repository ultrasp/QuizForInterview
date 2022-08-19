<?php
final class Utils
{
	public static function getMaxReapeatedWords(string $inText,int $repeats_count = 5):array{
		$inText = preg_replace('/\s{2,}/m',' ',$inText);
		$wordArray = explode(' ',$inText);
		$wordCountArray = array_count_values($wordArray);
		return array_filter($wordCountArray,function($v){ return $v >= 3;});
	}
}
