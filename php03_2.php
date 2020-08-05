<?php
//1.引数に税抜きの数値を指定して実行すると、税込み(消費税10%)の数値を返す関数を作成してください
function zeikomi($price){
    return $price*1.1;

}
echo zeikomi(1000);
echo "\n";


//2.$name と $age を仮引数に持ち $age が20以上の場合は $nameを返し、それ以外は「未成年」と返す関数を作成してください
function miseinen($name,$age){
    if($age>=20){
        return $name;
    }else{
        return "未成年";
    }
}

echo miseinen("佐藤",12);
echo miseinen("鈴木",20);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素の中央値を返す関数を作成してください。
function tyuuouti(array $arr){
    sort($arr);
    if (count($arr) % 2 == 0){
			return (($arr[(count($arr)/2)-1]+$arr[((count($arr)/2))])/2);
		}else{
			return ($arr[floor(count($arr)/2)]);
		}

}
$arr=[1,2,3,4,5,6];
echo tyuuouti($arr);
echo "\n";

//4.$price と $amount という配列の仮引数を持ち、$price * $amount が1万以上なら20%引きの値を返す関数を作成してください
function nebiki($price,$amount){
    if($price*$amount>=10000){
        return $price*$amount*0.8;
    }
}
echo nebiki(1000,10);
echo "\n";
//5.【応用】次のプログラムは、配列の中で1番大きい値を返す min_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr) {
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


?>