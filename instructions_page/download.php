
<?php
$file = $_GET["file"] . ".pdf";

header("Content-Type: application/octet-stream");
header('Content-Disposition: atttachment; filename="downloaded.pdf"');
$imgpdf = file_put_contents($image, file_get_contents($file));
header('Content-length: ' . filesize("download.pdf"));
readfie('original.pdf');

echo $imagepdf;
?>