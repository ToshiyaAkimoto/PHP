<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if($i % 4 === 0 && $i % 5 === 0) {
      echo 'tic-tac'."\n";
  } else if ($i % 4 === 0) {
      echo 'tic'."\n";
  } else if ($i % 5 === 0) {
      echo 'tac'."\n";
  } else if ($i === 1){
      echo '1から100までのカウントを開始します'."\n\n";
      echo $i."\n"; 
  } else {
      echo $i."\n"; 
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題1
//まずは一次元の連想配列にするか、二次元の通常配列にしたい
$personalInfos_one_dimension = array_column($personalInfos, 'tel','name'); //これで一次元の連想配列になった

$name = 'Bさん';
$tel = $personalInfos_one_dimension[$name];

echo $name.'の電話番号は'.$tel,'です。'."\n";

//問題2
foreach ($personalInfos as $index_num => $data) {
  $number = $index_num + 1;

  echo $number.'番目の'.$data['name'].'のメールアドレスは'.$data['mail'].'で、電話番号は'.$data['tel'].'です。'."\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index_num => $data) {
    $personalInfos[$index_num] = array_merge($personalInfos[$index_num], ['age' => $ageList[$index_num]]);
    var_dump($personalInfos[$index_num]);
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$id = 130;
$name = '山田';

$yamada = new Student($id,$name);
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。'."\n";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName.'は'.$class.'の授業に参加しました。学籍番号：',$this->studentId."\n";
    }
}

$id = 130;
$name = '山田';

$yamada = new Student($id,$name);
echo '学籍番号'.$yamada->studentId.'番の生徒は'.$yamada->studentName.'です。'."\n";

$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime();
echo $date->modify('-1 month')->format('Y-m-d H:i:s');


//問題2
date_default_timezone_set('Asia/Tokyo');
$date = new DateTime();
$base = new DateTime('1992/04/25 00:00:00');

$subtraction = $base-> diff($date);
echo 'あの日から'.$subtraction->days.'日経過しました。';

?>