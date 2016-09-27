<?php
class AllContent {
	static $items = array(
			1=>array('id'=>1,
			'title'=>'Start',
			'href'=>'index.php?page=1',
			'class'=>'mainmenu__items',
			'content'=>'.\assets\start.html'),
	
			2=>array('id'=>2,
			'title'=>'About',
			'href'=>'index.php?page=2',
			'class'=>'mainmenu__items',
			'content'=>".\assets\about.html"),
	
			3=>array('id'=>3,
			'title'=>'Top list',
			'href'=>'index.php?page=3',
			'class'=>'mainmenu__items',
			'content'=>'.\assets\toplist.html') 
	);

	public static function getMenu($numberPage) {
		if ($numberPage>0&&$numberPage<4)
			self::$items[$numberPage]["class"]="mainmenu__items__active";
	
		$resultMenu="<ul class='mainmenu'>";

		foreach (self::$items as $item ){
			$resultMenu=$resultMenu."<li class = $item[class]> <a href= $item[href]> $item[title] </a> </li>";
		}
		return $resultMenu.'</ul>';
	}
	
	public static function getContent($numberPage) {
		if ($numberPage>0&&$numberPage<4)
		return file_get_contents(self::$items[$numberPage]["content"]);
	}
	
	static function getLogo()
	{
		return '<div class ="logo">
					<a  href="index.php"> PokemonchikGo </a>
				</div>';
	}
	
}
?>