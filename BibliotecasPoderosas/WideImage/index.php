<?php 
    include('lib/WideImage.php');

    // New File 
    // WideImage::load('imagem.jpg')->resize(50,30)->saveToFile('small_image.jpg');

    // Show in Browser
    WideImage::load('imagem.jpg')->crop('center', 'center', 90, 50)->output('png');


    // $image = WideImage::load('imagem.jpg');

    // $canvas = $image->getCanvas();

    // $canvas->useFont('arial.ttf', 16, $image->allocateColor(255, 255, 255));
    // $canvas->writeText('right – 1', 'bottom – 1', 'Hello, world!');


    // $image->output('jpg');
?>