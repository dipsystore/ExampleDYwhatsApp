<?php


$DYwhatsAppService = new DYwhatsAppService();

//example send text
$DYwhatsAppService->line('Hello, this is a regular line of text.')
    ->bold('This line of text is bold.')
    ->italic('This line of text is italic.')
    ->code('This line of text is code.')
    ->separator()->to('xxxx')->send();
// example send media image
$DYwhatsAppService->media('http://example.com/path/to/image.jpg')
    ->mediaType('image')->to('xxxx')->send();

// example send pdf
$DYwhatsAppService->media('http://example.com/path/to/document.pdf')
    ->mediaType('document')->to('xxxx')->send();

// example send media video
$DYwhatsAppService->media('http://example.com/path/to/video.mp4')
    ->mediaType('video')->to('xxxx')->send();

