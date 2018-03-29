<?php
		$link=$_GET['url'];
		$file=file_get_contents("http://mp3.zing.vn$link");
		$start="<embed";
		$end="\/>";
		$start2="<p class=\"_lyricContent rows4\"";
		$end2="<\/p>";
		$rule="/$start.*xmlURL=(.*)\&amp\;.*$end.*$start2.*<\/span><\/span>(.*)$end2/msU";
		preg_match($rule,$file,$result);
		/*echo "<pre>";
		print_r($result);
		echo "</pre>";*/
		$xml=simpleXML_load_file($result[1]);
		$real_url=$xml->item->source;
		
	?>
    <embed id="player" wmode="transparent" allowscriptaccess="always" allowfullscreen="true" width="640" height="100" src="<?php echo $real_url; ?>" />
    <br />
    <a href="#" id="showlyric">Lyric</a>
	<?php
		echo "<div id='lyric'>";
		echo $result[2];
		echo "</div>";
	?>