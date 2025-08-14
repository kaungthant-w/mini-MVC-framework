<?php

function view($file_name, $data=null) {
	if($data) {
		extract($data);
	}
	require_once(__DIR__."/src/views/".$file_name);
}

function notFound() {
	echo "not found page";
}