<?php
//命名空间
namespace one;
function show(){
    echo 'a';
}
$code = 5;
echo $code.'<br/>';


if($code > 10){
    echo '我打于10'.'<br/>';
}else if($code <= 5){
    echo '我小于5'.'<br/>';
}else{
    echo '不大于10也不小于5'.'<br/>';
}

switch ($code){
    case $code == 5:
        echo '我等于5'.'<br/>';
        break;
    case $code == 10:
        echo '我等于10'.'<br/>';
        break;
}

$num = 10;
while ($num >= 1){
    echo $num;
    $num --;
}
echo '<br/>';
echo "\r\n";

for ($num=10;$num>0;$num--) {
    echo $num.'<br/>';
}

$num2=0;
while (true){
    $num2++;
    switch ($num2) {
        case $num2%2==0:
            echo $num2."<br/>";
            break;
        case $num2%15==0:
            echo $num2."<br/>";
            break 2;
    }
}

function code($len)
{
    $str = 'qwertyuiopasdfghjklzxcvbnm7894561230';
    $code = '';
    for ($i=0;$i<$len;$i++) {
        $index = mt_rand(0, strlen($str)-1);
        $code.=strtoupper($str[$index]);
    }
    return $code;
}
echo code(20)."<br/>";

//点语法   ... -不是很懂
function shows(...$arg){
    return array_sum($arg);
}
echo shows("1,2,3").'<br/>';

//默认值-不是很懂
function mobile($tel,$num=4,$fix = '*'){
    return substr($tel,0,-1*$num).str_repeat($fix,$num);
}
echo mobile('11122222121',3).'<br/>';

//设置函数允许的返回类型，没有int返回null
function make():?int
{
    return null;
}
try {
    var_dump(make());
} catch (\Throwable $th) {
    echo $th->getMessage().'<br/>';
}

//递归调用
function recursive($n)
{
    if ($n==1) {
        return $n;
    }
    return $n*recursive($n-1);
}
echo "当 N 值为 5 时,阶乘为: ".recursive(5).'<br/>';

//数组赋值给变量
$arr = [
    ["name"=>"aaa","url"=>"asfg"],
    ["name"=>"bbb","url"=>"zxcv"]
];

foreach ($arr as $key=>$aaa) {
    echo "[{$key}] 姓名:{$aaa['name']} 网址:{$aaa['url']}<br/>";
}


$users = [
    ['name'=>'向军大叔','age'=>16],
    ['name'=>'小明','age'=>22],
    ['name'=>'李四','age'=>34],
    ['name'=>'张三','age'=>19],
];
while (list('name'=>$name, 'age'=>$age) = current($users)) {
    echo "姓名: {$name} <br/>";
    next($users);
}