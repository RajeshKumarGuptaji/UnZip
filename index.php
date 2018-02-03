<?php 
$zip = new ZipArchive;
if ($zip->open('D:\electionTime.zip') === TRUE) {
    $zip->extractTo('D:\election');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}

?>