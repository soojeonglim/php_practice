<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1> function </h1>
    <pre>
        function 함수이름(매개변수1, 매개변수2){
            to do...
        }
        함수이름();
        function class_total(){

        }
        함수 입력 -> 할일 -> 출력
    </pre>
    <?php
        function sum($x, $y){
            $result = $x + $y;  // 지역변수(local variable), 해당 함수 내에서만 사용 가능한 변수
            return $result;
        }
        $result = sum(10, 20);  // 전역변수(global variable), 어디에서든 사용가능
        echo $result;
    ?>
    <hr/>
    <h2>배열 출력</h2>
    <?php
        $fruits = [
            'apple',
            'mango',
            'banana',
            'orange'
        ];
        print_r($fruits);    // 출력물 : Array( [0] => apple [1] => mango [2] => banana )

        # html에 쓴 그대로 출력
	    echo '<pre>';
	    print_r($fruits);
	    echo '</pre>';

	    # 위의 내용 함수로 만들기
	    function output($value){
		    echo '<pre>';
		    print_r($value);
		    echo '</pre>' ;
	    }
	    output($fruits);
    ?>
    <hr/>
    <h2>지역변수 vs. 전역변수</h2>
    <?php
        function myfunc(){
            $var = 10;  // 지역변수로써, 함수 외부에서 출력X
            echo "{$var}";
        }
        myfunc();
    ?>
    <hr/>
    <?php
        $var2 = 20;
        $var3 = 30;
        function myfunc2(){
            global $var2;   // 전역변수 선언 후
            echo $var2.'<br/>'; // 함수내에서 출력 가능해짐

            echo "{$GLOBALS['var3']}";  // GLOBALS라는 배열에 var3변수가 인덱스명으로 들어가서 출력됨
        }
        myfunc2();
    ?>
    <hr/>
    <h2>정적 변수</h2>
    <?php
        // 함수 내부에서 정적변수를 출력하면 함수 호출이 종료 되어도 함수 내부의 메모리 상에 남아있어서 출력가능함
        function increment(){
            static $count = 0;
            echo "{$count}<br/>";
            $count++;
        }
        increment();
        increment();
        increment();
    ?>
</body>
</html>