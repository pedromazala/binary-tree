<?php
/**
 * Created by PhpStorm.
 * User: pedromazala
 * Date: 06/04/18
 * Time: 09:56
 */

function getBinaryTree(array $arr): array {
	sort($arr);

	return getBinaryTreeRecursive($arr);
}

function getBinaryTreeRecursive(array $array): array {
	$middle = (round(count($array) / 2) - 1);
	$left = array_slice($array, 0, $middle);
	$right = array_slice($array, $middle + 1);

	$result['root'] = $array[ $middle ];
	$result['left'] = count($left) > 0 ? getBinaryTreeRecursive($left) : null;
	$result['right'] = count($right) > 0 ? getBinaryTreeRecursive($right) : null;

	return $result;
}
