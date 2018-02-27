<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jacob's News Report</title>
</head>
<body>
	<h1>Jacob's News Report</h1>
	<div class="content">
		
	</div>
	
	<!-- import jquery by cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
	</script>

	<script>
		$.get(
			'http://192.168.33.10/news-rest-api/news',
			// handle api response
			function(data) {
				var str = '';
				// foreach ($data as $key1 => $value1) { sth }
				$.each(data, function(key, value) {
					str = str + '<h2>' + value.title + '</h2>' + '<h5>' + value.content + '</h5>'; 
				});
				$('.content').html(str);
			}
		);
	</script>
</body>
</html>