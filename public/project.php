<? 
include_once('begin.php');


if (isset($_GET['id']) && $_GET['id']!='') {
	echo '<nav><a class="btn btn-primary my-3" href="/">на головну</a></nav>';
	echo '<div class="row">';	
	$path="projects";
		$dir = opendir($path);
		if((readdir($dir))!== false) {
			foreach (scandir('projects/'.$_GET['id'].'/') as $v)
		{
			if ($v == '.' || $v == '..') continue;

		echo '<div class="col-12 col-lg-6 my-2">
			<img src="projects/'.$_GET['id'].'/'.$v.'" class="img-fluid">
		</div>';

		}
		closedir($dir);
	}
	echo "</div>";
}

include_once('end.php');

?>
