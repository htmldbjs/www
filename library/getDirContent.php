<?php

/**
 * getDirContent - returns directory structure
 * 
 * @param dir [String][in]: Directory Path
 * 
 * @return returns the directory structure in a multidimensional array
 */
function getDirContent($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
		$path = realpath($dir.DIRECTORY_SEPARATOR.$value);
		
        if(!is_dir($path)) {

			$results[] = $path;
			
        } else if($value != "." && $value != "..") {

            getDirContent($path, $results[$path]);
			$results[] = $path;
			
        }
    }

    return $results;
}

?>