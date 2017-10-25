<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case '1nyala':
            Lampu1Nyala();
            break;
        case '1mati':
            Lampu1Mati();
            break;
        case '2nyala':
            Lampu2Nyala();
            break;
        case '2mati':
            Lampu2Mati();
            break;
        case '3nyala':
            Lampu3Nyala();
            break;
        case '3mati':
            Lampu3Mati();
            break;
        case '4nyala':
            Lampu4Nyala();
            break;
        case '4mati':
            Lampu4Mati();
            break;
        case '5nyala':
            Lampu5Nyala();
            break;
        case '5mati':
            Lampu5Mati();
            break;
        case '6nyala':
            Lampu6Nyala();
            break;
        case '6mati':
            Lampu6Mati();
            break;
        case '7nyala':
            Lampu7Nyala();
            break;
        case '7mati':
            Lampu7Mati();
            break;
        case '8nyala':
            Lampu8Nyala();
            break;
        case '8mati':
            Lampu8Mati();
            break;
        case '9nyala':
            Lampu9Nyala();
            break;
        case '9mati':
            Lampu9Mati();
            break;
        case '10nyala':
            Lampu10Nyala();
            break;
        case '10mati':
            Lampu10Mati();
            break;
    }
}

function Lampu1Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S001&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu1Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S001&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu2Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S002&001ELampu2Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu2Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S002&000ELampu2Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu3Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S003&001ELampu3Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu3Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S003&000ELampu3Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu4Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S004&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu4Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S004&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu5Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S005&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu5Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S005&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu6Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S006&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu6Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S006&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu7Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S007&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu7Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S007&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu8Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S008&000ELampu1Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu8Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S008&001ELampu1Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu9Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S009&000ELampu9Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu9Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S009&001ELampu9Nyala\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu10Mati() {
    echo "The insert function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S010&000ELampu9Mati\" > /dev/ttyUSB0 ");
    exit;
}

function Lampu10Nyala() {
    echo "The select function is called.";
	system("stty -F /dev/ttyUSB0 115200");
	echo system("echo \"S010&001ELampu9Nyala\" > /dev/ttyUSB0 ");
    exit;
}
?>
