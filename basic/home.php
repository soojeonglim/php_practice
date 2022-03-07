<!-- 외부에서 공통으로 사용하는 파일들을 불러올 수 있음.
     functions.php를 다른 이름으로 저장해서 home.php로 만들기.
     header.php 파일 안에 있는 코드 불러오기. -->
<?php
    $title ='home';
    include('inc/header.php');  // include('불러올 파일 이름');
    // include()는 오류가 나도 아래 내용이 실행되지만
    // require()는 오류가 나면 전체 오류가 생김
    require('inc/functions.php');
?>
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
        
        increment();
        increment();
        increment();
    ?>
<?php
    include('inc/footer.php');
?>