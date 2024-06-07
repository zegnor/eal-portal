<?php

function getPages2 ()
{
	$data = file_get_contents("data.json");
	return json_decode($data, 1);
}