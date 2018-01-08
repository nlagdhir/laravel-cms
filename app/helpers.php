<?php 

use App\Page;

if(!function_exists('getPagesList'))
{
	function getPagesList($id='')
	{
		$pages = Page::lists('page_title','id');
		$pages->prepend('select','');
		if($id!=''){
			$pages->forget($id);	
		}
		return $pages;
	}
}

if(!function_exists('getTemplates'))
{
	function getTemplates()
	{
		$dir =base_path().'/resources/views/Templates';
		if (is_dir($dir)){
  			if ($dh = opendir($dir)){
			$templates = array(''=>'Default');
			while (($file = readdir($dh)) !== false){
        		if ($file != "." && $file != "..") {
            		if(preg_match( '|Template Name:(.*)$|mi', file_get_contents($dir.'/'.$file),$match) === 1)
            		{
                		$templates[basename($file,'.blade.php')] = $match[1];
            		}
        		}
    		}
			closedir($dh);

    		return $templates;
  			}
		}
	}
}