<?php
/**
 * Create on directory and output some information
 *
 * @param string $path 
 * @return void
 * @author Justin Palmer
 */
function create_directory($path){
	if(is_dir($path)){
		print "Skipped: $path\n";
	}else{
		mkdir($path);
		print "Created: $path\n";
	}
}
/**
 * Copy a file from the source to the correct location.
 *
 * @param string $src 
 * @param string $dest 
 * @return void
 * @author Justin Palmer
 */
function create_file($src, $dest, $alt_name=''){
	$dest = $dest . '/' . $alt_name;
	if($alt_name == '')
		$dest = $dest . '/' . $src;
	$src = CUR_DIR . '/__files__/' . $src;
	if(is_file($dest)){
		print "Skipped: $dest\n";
	}else{
		copy($src, $dest);
		print "Created: $dest\n";
	}
}