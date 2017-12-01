<?

$a = '1';
$b = &$a;
$b = "2$b";
echo $b;

//$x = 2;
//echo $x . "\n";
//echo $x+++$x;
//echo '<br>';
//echo $x;
//echo '<br>';
//echo $x---$x;

$str1 = "Yebbabaddo";
$str2 = "Alagba";

if(strpos($str1, $str2) !== false) {
    echo "\"" . $str1 . "\" contain \"" . $str2 ."\"";
}
else echo "\"" .$str1 . "\" does not contain \"" . $str2 . "\"";


