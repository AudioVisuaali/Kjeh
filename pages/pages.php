<?php
// Require library
require_once("../core/library.php");

$errorcode = $post->getErrorCode();

switch ($errorcode) {
    case "404":
        $errortext = "404";
        break;

    case "403":
        $errortext = "403";
        break;

    case "500":
        $errortext = "500";
        break;

    default:
        $errortext = "ei tietoa";
        break;
}

?>


<!DOCTYPE html>
<html>
<head>
    <?php echo $web->getHtmlHead(); ?>
</head>
<body>
    <?php echo $web->getGoogleAnalytics(); ?>
    <?php echo $errortext; ?>
</body>
</html>
