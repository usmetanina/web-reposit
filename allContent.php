<?php
class AllContent {
	static $items = array(
			1=>array('title'=>'Start',
			'class'=>'mainmenu__item',
			'content'=>'./assets/start.html'),
	
			2=>array('title'=>'About',
			'class'=>'mainmenu__item',
			'content'=>"./assets/about.html"),
	
			3=>array('title'=>'Top list',
			'class'=>'mainmenu__item',
			'content'=>'./assets/toplist.html') 
	);

	public static function getMenu($numberPage) {
		if (array_key_exists ($numberPage,self::$items))
			self::$items[$numberPage]["class"]="mainmenu__item mainmenu__item__active";
	
		$resultMenu="<ul class='mainmenu'>";
		
		$k=key(self::$items);
		foreach (self::$items as $item ){
			$resultMenu=$resultMenu."<li class = '$item[class]'> <a href=index.php?page=$k> $item[title] </a> </li>";
			$k=key(self::$items);
			next(self::$items);
		}
		return $resultMenu.'</ul>';
	}
	
	public static function getContent($numberPage) {
		if (array_key_exists ($numberPage,self::$items))
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