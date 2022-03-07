<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditions</title>
</head>
<body>
    <h2> 조건식 </h2>
    <?php
        $result = 1 < 3; // true : 1, false : (아무것도 출력 안함) 
        echo $result;

        $fruit = 'apple';

        // 조건문 ==, &&, and, ||, or, xor 사용 가능
        if($fruit == 'Apple'){  
            echo '조건은 참이다.';
        } else{
            echo '조건은 거짓이다.';
        }
    ?>
    <hr/>
    <h2>isset(변수명, 변수명) 함수</h2>
    <?php
        $fruit = array();   // 배열 선언
	    $fruit[0] = 'apple';
	    $fruit[1] = 'banana';

        if(isset($fruit[3])){
            echo $fruit[3];
        } else{
            echo '과일 배열에 세번째 값이 없습니다.';
        }
    ?>
</body>
</html>