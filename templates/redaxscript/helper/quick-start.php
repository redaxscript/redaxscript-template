<?php
namespace Redaxscript;

use DOMDocument;

$doc = new DOMDocument();
$doc->loadHTML(Db::forTablePrefix('articles')->where('alias', 'quick-start-1001')->findOne()->text);
foreach ($doc->getElementsByTagName('a') as $element)
{
	$element->parentNode->removeChild($element);
}
return $doc->saveHTML();
