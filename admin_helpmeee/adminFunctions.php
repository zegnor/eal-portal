<?php

function getPages ()
{
	$data = file_get_contents("data.json");
	return json_decode($data, 1);
}

function setPages ($pages)
{
	$data = json_encode($pages);
	file_put_contents("data.json", $data);
}


   /*function savePage()
{
	$pages = getPages ();

	$pages[] = [
		"title" => $_POST["title"],
		"content" => $_POST["content"],
		"participants" => $_POST ["participants"],
		"lectures" => $_POST ["lectures"],
		"period" => $_POST ["period"],
		"link1" => $_POST ["link1"],
		"link2" => $_POST ["link2"],
	];

	setPages($pages);
}
function updatePage()
{
	$pages = getPages ();
	$pageId = $_GET ["page"];

	$pages [$pageId] = [
		"title" => $_POST["title"],
		"content" => $_POST["content"],
		"participants" => $_POST ["participants"],
		"lectures" => $_POST ["lectures"],
		"period" => $_POST ["period"],
		"link1" => $_POST ["link1"],
		"link2" => $_POST ["link2"],
	];

	setPages ($pages); */
}