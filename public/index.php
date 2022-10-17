<?
include_once('begin.php');

if (isset($_GET['id']) && $_GET['id']!='') {
	echo '<nav><a href="/">на головну</a></nav>';
		$path="/projects";
		$dir = opendir($path);
		if((readdir($dir))!== false) {
			foreach (scandir('projects/'.$_GET['id'].'/') as $v)
		{
			if ($v == '.' || $v == '..') continue;
			echo '<img src="projects/'.$_GET['id'].'/'.$v.'">';
		}
		closedir($dir);
	}
}
else {
	echo '<div class="row">';
	$projects = [240, 20, 130, 30, 50, 140, 250, 120, 150, 210, 40, 160, 60, 170, 200, 180, 220, 230, 70, 190, 100, 110, 80, 90];
	for ($i=0; $i<=count($projects)-1; $i++ ) {
		echo '<div class="col-12 col-sm-6 col-md-4 my-2">
			<a href="project.php?id='.$projects[$i].'"><img src="projects/'.$projects[$i].'/z1.jpg" class="img-fluid"></a>
		</div>';
	}
	echo '</div>';
}

include_once('end.php');

?>

