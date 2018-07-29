<div id='block'>
<?
	
	foreach(scandir(__DIR__.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR) as $value){
		if($value=='.'||$value=='..')continue;
		?>
		<li class='files'><?=$value?><button>X</button></li>
		<?
	}


	$file = $_POST['filename'];

	@file_put_contents('files/'.$file,'');

	echo '<h3>Been create - '.$file.'</h3>';

	?>
</div>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<br>
<form action="" method="post">
	<input type="text" name="filename">
	<input type="submit" value='create file'>
</form>

<div id="result"></div>
<script>

window.onload = function(){
			var files = document.getElementsByClassName('files');

			for(var x=0; x<files.length;x++){
				files[x].childNodes[1].onclick = function(){
				var data = 'data='+this.parentNode.innerText;
				this.parentNode.style.display = 'none';
				ajaxPost(data);
			}

			var request = new XMLHttpRequest();

			function ajaxPost(data){
				request.open('POST','delete.php');

				request.onreadystatechange = function(){
						result.innerHTML = this.responseText;
					
				}
			request.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); // без кодировки данные не прочтутся сервером
			request.send(data);
 			}
			}
}
</script>

</body>
