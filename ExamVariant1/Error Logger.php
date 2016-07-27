<?php
$text = 'Strange Exception in thread "main" here in at Java_Basics.calc(Java_Basics.java:22) what does it mean? :
Exception in thread "main" java.lang.ArrayIndexOutOfBoundsException: 1
at Java_Basics.calc(Java_Basics.java:22)
at Java_Basics.main(Java_Basics.java:13)
';
//$text = $_GET['errorLog'];
//$pattern = "/Exception in thread \".+\" java\\..*\\.(\\w+): .*\\s*at .+?\\.(.+)\\((.+\\:)([0-9]+)/";
$pattern = "/Exception in thread \".+\" java\\..*\\.(\\w+): .\\sat.+?\\.(.+)\\((.+\\:)([0-9]+)/";
preg_match_all($pattern, $text, $asd, PREG_SET_ORDER);
$line =  htmlspecialchars($asd[0][4]);
$error = htmlspecialchars($asd[0][1]);
$java = htmlspecialchars($asd[0][3]);
$method = htmlspecialchars($asd[0][2]);
echo "<ul><li>line <strong>$line</strong> - <strong>$error</strong> in <em>$java$method</em></li></ul>";