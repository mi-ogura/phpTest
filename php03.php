
<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数
function double_int($i){
    return $i*2;
}
echo double_int(3);
echo "<br>";

//2.$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数
function sum($a, $b){
    return $a + $b;
}
echo sum(2,1);
echo "<br>";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$array = [1, 3, 5 ,7, 9];
function times($arr){
    $result = 1;
    foreach ($arr as $t){
    
        $result *= $t;
    }
    echo $result;
    echo "<br>";
}
times($array);

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number = $a;
        }
    }
    return $max_number;

}
$tech = [1, 4, 9, 5];
echo max_array($tech);
echo "<br>";

//string_tags
$str_0 = "<h1>strip_tags関数</h1>"
  . "<p>タグを取り除く</p>";

$str = "<h1>strip_tags関数</h1>"
  . "<p>タグを取り除く</p>";
echo strip_tags($str) ."\n";
echo ($str_0)."\n";


//array_push:要素を追加しても、配列$fruitsには値は追加されない
$fruits = ['apple', 'orange', 'melon'];
 
array_push($fruits, 'banana', 'pineapple');
 
var_dump($fruits);
echo "<br>";


//array_merge：ひとつまたは複数の配列を結合するとき
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);
 
var_dump($array);
echo "<br>";


//time,date, mktime:UNIXタイムスタンプを取得する事ができる関数
//mkdir ・現在の日時を取得
echo date('Y/m/d', time());
 echo "<br>";
 
//・3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
 
//・3日後の日時を取得
echo date('Y/m/d', $nweek);
echo "<br>";

//mktime ・指定した日時のタイムスタンプを取得
//int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]]・・
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;


 ?>