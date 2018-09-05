<?php

require_once(__DIR__ . '/Parsedown/Parsedown.php');
require_once(__DIR__ . '/getDirContent.php');
$Parsedown = new Parsedown();


$directoryList = getDirContent(__DIR__ . '/repo/htmldbjs/docs');
$listCount = count($directoryList) / 2;

$docStartTemplate = fopen(__DIR__ . '/../templates/docStart.php', 'r');
$docEndTemplate = fopen(__DIR__ . '/../templates/docEnd.php', 'r');

$docStartContent = fread($docStartTemplate, filesize(__DIR__ . '/../templates/docStart.php'));
$docEndContent = fread($docEndTemplate, filesize(__DIR__ . '/../templates/docEnd.php'));

for ( $i = 0; $i < $listCount; $i++) { 

    $item = $directoryList[$i];
    $docName = explode('/', $item);
    $docName = end($docName);
    echo $i;
    $newDocFile = fopen(__DIR__ . '/../docs/' . $docName . '.php', 'w');

    $mdFilesCount = count($directoryList[$item]);

    $newDocContent = '';
    for ( $j = 0; $j < $mdFilesCount; $j++ ) { 
        $mdFilePath = $directoryList[$item][$j];

        $mdFile = fopen($mdFilePath, 'r');
        $mdContent = fread($mdFile, filesize($mdFilePath));

        $newDocContent .= '<div class="container scrollspy" id="divUnderstandTheSystem">'
                            . $Parsedown->text($mdContent)
                            . '</div>';

        fclose($mdFile);
    }

    fwrite($newDocFile, $docStartContent . $newDocContent . $docEndContent);
    fclose($newDocFile);
    
}

?>