
<?php
	$_pointer = fopen('test2.txt', 'w+b');
// weg-schrijven	
	fwrite($_pointer, '<h1>deze tekst schrijven we naar test4.txt<br>en lezen we zonder "rewind"</h1>');
	
	
// uitlezen	
	echo fread($_pointer, 255);
	fclose($_pointer); 
?>	