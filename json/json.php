<!Doctype html>
<html>
	<head>
		<title>Dữ liệu json</title>
		<script>
			Json = {
				"name" : "nguyen",
				"email" : "nguyen@gamil.com"
			}
			document.write(Json.name+'</br>');
			Json2 = {
				"book": [
					{"name": "php"},
					{"name": "javascript"}
				]
			}
			document.write(Json2.book[1].name+'</br>');
			
			Json3 = {
				"book": [
					{"name": [
						{"name": "php 1"},
						{"author": "huunv"}
					]},
					{"name": [
						{"name": "Javarscript"},
						{"author": "huunv"}
					]}
				]
			}
			document.write(Json3.book[0].name[1].author+'</br>');
			
			for(i=0; i<=Json3.book.length; i++) {
				name = Json3.book[i].name[0].name;
				document.write(name+'</br>');
			}
		</script>
	</head>
	<body>
		<hr>
		<?php 
			$data = array(
				'name' => 'huunv',
				'job'  => 'dev',
				'web' => 'http://storestroller.com'
			);
			$str = json_encode($data);
			echo $str.'</br>';
			print_r(json_decode($str)); echo '</br>';
			print_r(json_decode($str, true)); echo '</br>';
		?>
	</body>
</html>