<?php
    use Symfony\Component\Templating\Loader\FilesystemLoader;
    use Symfony\Component\Templating\PhpEngine;
    use Symfony\Component\Templating\Helper\SlotsHelper;
    use Symfony\Component\Templating\TemplateNameParser;
    use Symfony\Component\HttpFoundation\Response;


	function view($file_name, $data = [], $code = 200) {
		$filesystemLoader = new FilesystemLoader(__DIR__.'/src/views/%name%');
		$templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
		$templating->set(new SlotsHelper());

		return new response(
			$templating->render($file_name, $data), $code);
}

function redirect($path) {
	return new Response("", 301,[
		'Location' => $path
	]);
}

function notFound() {
	echo "not found page";
}