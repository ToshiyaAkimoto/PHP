<?php
//記載内容を判別しやすいように、改行は記載内容と異なる行に入力しております。通常であれば記載内容の末尾につけるのが良いと存じますが、ご了承ください。

// Q1 変数と文字列
$name = '秋元';
echo '私の名前は「'.$name.'」です。';
echo "\n";  //改行を挿入するため

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo "\n";  //改行を挿入するため

$num /= 2;
echo $num;
echo "\n";  //改行を挿入するため

// Q3 日付操作
date_default_timezone_set ('Asia/Tokyo');
$time = date ("Y年m月d日 H時i分s秒");
echo '現在時刻は、'.$time.'です。';
echo "\n";  //改行を挿入するため

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device ==='mac' ) {
  echo '使用OSは、'.$device.'です。';
} else {
  echo 'どちらでもありません。';
}
echo "\n";  //改行を挿入するため

// Q5 条件分岐-2 三項演算子
$age = 18;
if ($age < 18 ) {
  echo '未成年です。';
} else {
  echo '成年です。';
}
echo "\n";  //改行を挿入するため

// Q6 配列
$array1 = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県'];
echo $array1[2].'と'.$array1[3].'は関東地方の都道府県です。';
echo "\n";  //改行を挿入するため

// Q7 連想配列-1
$array2 = [ '東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($array2 as $key => $value) {
  echo $value."\n";  //改行を挿入するため
}

// Q8 連想配列-2
foreach ($array2 as $key => $value) {  //Q7の再利用
  if ('埼玉県' === $key) {
    echo $key.'の県庁所在地は、'.$value.'です。';
    echo "\n";  //改行を挿入するため
  }
}

// Q9 連想配列-3
$array2 += array( '愛知県' => '名古屋市', '大阪府' => '大阪市');
foreach ($array2 as $key => $value) {
  if ($key === '愛知県' || $key === '大阪府') {
    echo $key.'は関東地方ではありません。';
    echo "\n";  //改行を挿入するため
  } else {
    echo $key.'の県庁所在地は、'.$value.'です。';
    echo "\n";  //改行を挿入するため
  }
}
  //今後配列内にほかの都道府県が増えていくなら、関東地方の都道府県を指定して、一致したら件名と県庁所在地を表示、一致しなかったら関東地方ではない旨を表示するのが良いと思いました。


// Q10 関数-1
function hello ($name) {
  echo $name.'さん、こんにちは。';
}
hello('金谷');
echo "\n";  //改行を挿入するため
hello('安藤');
echo "\n";  //改行を挿入するため

// Q11 関数-2
function calcTaxInPrice ($price) {
  return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';

// Q12 関数とif文
function distinguishNum ($num) {
  if ($num % 2 === 1) {
    return $num.'は奇数です。';
  } else {
    return $num.'は偶数です。';
  }
}
$num = 5;
echo distinguishNum($num);
echo "\n";  //改行を挿入するため


// Q13 関数とswitch文
function evaluateGrade ($grade) {
  switch ($grade) {
    case 'A':
    case 'B':
      return '合格です。';

    case 'C':
      return '合格ですが追加課題があります。';

    case 'D':
      return '不合格です。';
    
    default:
      return '判定不明です。講師に問い合わせてください。';
  }
}
$grade = 'A';
echo evaluateGrade ($grade);
echo "\n";  //改行を挿入するため

$grade = 'G';
echo evaluateGrade ($grade);
echo "\n";  //改行を挿入するため

?>