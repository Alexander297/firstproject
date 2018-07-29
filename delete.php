<?

$file = $_POST['data'];

@unlink('files/'.substr($file,0,-1));
echo '<h3>Been delete - '.$file.'</h3>';
