<!DOCTYPE html">
<html>
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1" />
		<link href="css/viewer.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		
		
		<div id="listarea">
			<ul>
			<?php
					$globsonglist = glob("songs/*mp3");
				if(!isset($_REQUEST["playlist"])){
					$songlist = $globsonglist;
					$playlistlist = glob("songs/*txt");
				}else{
					$filepath = "songs/".$_REQUEST["playlist"];
					$f = fopen($filepath,"r");
					$songlist = fread($f,filesize($filepath));
					$songlist = explode("\n",$songlist);	
					fclose($f);
				}

					foreach($songlist as $filename){
						$filename = basename($filename);
				?>
					<li class="mp3item">
					<a href="songs/<?= $filename?>"><?= $filename?></a>
					(<?= songsize("songs/".$filename)?>)
					</li>
				<?php
					}
					foreach($playlistlist as $filename){
						$filename = basename($filename);
				?>
					<li class="playlistitem">
					<a href="music.php?playlist=<?=$filename?>"><?= $filename?></a>
					(<?= songsize("songs/".$filename)?>)
					</li>
			<?php
					}
			?>

			</ul>
		</div>
	</body>
</html>

<?php
function songsize($path)
{
	$size = filesize($path);
	$unit = "b";
	if($size > 1024){
		$size = round($size / 1024,2,PHP_ROUND_HALF_UP);
		$unit = "kb";
	}
	if($size > 1024){
		$size = round($size / 1024,2,PHP_ROUND_HALF_UP);
		$unit = "mb";
	}
	if($size > 1024){
		$size = round($size / 1024,2,PHP_ROUND_HALF_UP);
		$unit = "gb";
	}

    return $size." ".$unit;
}
?>

