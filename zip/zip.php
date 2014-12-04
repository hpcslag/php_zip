$file = tempnam("tmp", "zip");
$zip = new ZipArchive();
$zip->open($file, ZipArchive::OVERWRITE);

// Stuff with content
$zip->addFromString('file_name_within_archive.ext', $your_string_data);
$zip->addFile('file_on_server.ext', 'second_file_name_within_archive.ext');

// Close and send to users
$zip->close();
header('Content-Type: application/zip');
header('Content-Length: ' . filesize($file));
header('Content-Disposition: attachment; filename="file.zip"');
readfile($file);
unlink($file); 