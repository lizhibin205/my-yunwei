<?php
/* 用于快速检查某个项目下代码是否有语法错误
 * Usage: php php7check.php [codeDir]
 */
if (!isset($argv[1])) {
    exit("please input dir.");
}
$dir = $argv[1];
if (!is_dir($dir)) {
    exit("{$dir} is not dir.");
}
foreach (scanf_dir_php($dir) as $file) {
    //echo $file, PHP_EOL;
    exec("php -l {$file}", $output);
    if (isset($output[0]) && preg_match("/^No syntax errors detected in/", $output[0]) === 0) {
        foreach ($output as $line) {
            echo $line, PHP_EOL;
        }
    }
}

function scanf_dir_php($dir)
{
    $result = [];
    $dirHandle = opendir($dir);
    while($file = readdir($dirHandle)) {
        if ($file === '.' || $file === '..') {
            continue;
        } else if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
            $result = array_merge($result, scanf_dir_php($dir . DIRECTORY_SEPARATOR . $file)); 
        } else {
            //is file
            if (preg_match("/\.php$/", $file) === 1) {
                $result[] = $dir . DIRECTORY_SEPARATOR . $file;
            }
        }
    }
    return $result;
}
