<?php


// $page = $_GET['p'];
$delivery_location = 'includes/d';
$file_extension = '.php';

if(isset($page)) {


    switch ($page) {
        case 1:
            include($delivery_location . "1" . $file_extension);
            break;
        case 2:
            include($delivery_location . "2" . $file_extension);
            break;
        case 3:
            include($delivery_location . "3" . $file_extension);
            break;
        case 4:
            include($delivery_location . "4" . $file_extension);
            break;
        case 5:
            include($delivery_location . "5" . $file_extension);
            break;
        case 6:
            include($delivery_location . "6" . $file_extension);
            break;
        case 7:
            include($delivery_location . "7" . $file_extension);
            break;
        case 8:
            include($delivery_location . "8" . $file_extension);
            break;
        case 9:
            include($delivery_location . "9" . $file_extension);
            break;
        case 10:
            include($delivery_location . "10" . $file_extension);
            break;
        case 11:
            include($delivery_location . "11" . $file_extension);
            break;
        case 12:
            include($delivery_location . "12" . $file_extension);
            break;
        case 13:
            include($delivery_location . "13" . $file_extension);
            break;
        case 14:
            include($delivery_location . "14" . $file_extension);
            break;
        case 15:
            include($delivery_location . "15" . $file_extension);
            break;
        case 16:
            include($delivery_location . "16" . $file_extension);
            break;
        case 17:
            include($delivery_location . "17" . $file_extension);
            break;
        case 18:
            include($delivery_location . "18" . $file_extension);
            break;
        case 19:
            include($delivery_location . "19" . $file_extension);
            break;
        case 20:
            include($delivery_location . "20" . $file_extension);
            break;
        case 21:
            include($delivery_location . "21" . $file_extension);
            break;
        case 22:
            include($delivery_location . "22" . $file_extension);
            break;
        default:
            include($delivery_location . "1" . $file_extension);
            break;
    }
}
else {
    include ($delivery_location . "1" . $file_extension);
};

?>