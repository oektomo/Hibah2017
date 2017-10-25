
<?php
echo exec('whoami');
?>


<?php
	system("stty -F /dev/ttyUSB0 57600");
	echo system("echo \"hello\" > /dev/ttyUSB0 ");
?>
