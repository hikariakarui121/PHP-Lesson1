<?php

// 演習1
// ブラウザを更新してリロードできるか確認
echo "php勉強をしています";
echo "<br>";

// 演習2 
echo "5+7";
echo "<br>";
echo 5+7;
echo "<p>"."5+7"."</p>";


// 変数をつくる
$name ="変数をつくる";
echo $name;
echo "<br>";

// 演習3
$apple ="りんご";
$num =10+10;

echo $apple;
echo "<br>";
echo $num;
echo "<br>";


// 演習4
$a =1;
$b =2;

if(1===$a){
  echo "1が表示されました";
}
echo "<br>";

if(2===$b){
  echo "2が表示されました"."<br>";
}



// 演習5
echo mt_rand(1,6);
// mt_rand();



//  課題 
//  画像を表示させる
// 4パターン以上の結果を表示させる
// おみくじができた人はじゃんけんを作ってみよう 


// echo mt_rand(0,3);
$n = mt_rand(1,3);


if($n===1){
echo "<img src='image/1.png' width='400px' >";
}

if($n===2){
echo "<img src='image/2.png' width='400px'>";
  }
  
if($n===3){
echo "<img src='image/3.png' width='400px'>";
    }

if($n===4){
 echo "<img src='image/4.png' width='400px'>";
      }
?>




