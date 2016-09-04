<?php

require_once 'smarty/libs/Smarty.class.php';

class Printer{
	
	
	public static function execute($params, $template)
	{
		$smarty = Printer::getSmarty("smarty");
		
		foreach($params as $key => $val)
		{
			$smarty->assign($key, $val);
		}
		$smarty->display($template);
	}
	
	public static function getSmarty($dir)
	{
		$smarty = new Smarty;
		$smarty->template_dir = $dir."/templates";
		$smarty->config_dir = $dir."/config";
		$smarty->cache_dir = $dir."/cache";
		$smarty->compile_dir = $dir."/templates_c";
		return $smarty;
	}
}
?>
