
<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数
function double_int($i){
    return $i*2;
}
echo double_int(3);
echo "<br>";

//$aと$bを仮引数に持ち、$aと$bを足した結果を返す関数
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
}
times($array);


 ?>