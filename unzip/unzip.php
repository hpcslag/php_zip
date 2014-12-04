<?php
$zip = new ZipArchive;
$res = $zip->open('file.zip');
if ($res === TRUE) {
  $zip->extractTo('./');
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
?>