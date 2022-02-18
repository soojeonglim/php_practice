<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> 배열 </h2>
    <?php
	    $fruit = array();   // 배열 선언
	    $fruit[0] = 'apple';
	    $fruit[1] = 'banana';

        $fruits = array('apple','banana','mango');

        if(isset($fruits[2])){
            echo $fruits[2];
        } else{
            echo '과일 배열에는 세번째 값이 없습니다.';
        }

	    # 연관 배열 Associative Array
	    $prices = array();
	    $prices['apple'] = 1000;
	    $prices['banana'] = 2000;
    ?>
    <hr/>
    <?php
        // 'apple' : $key, 1000 : $price
	    foreach($prices as $key => $price){
		    echo $key. " : ".$price.'<br/>';
        }
	    $prices = array('apple'=>1000, 'banana'=>2000);

        $fruits = array();   // 배열 선언
	    $fruits[0] = 'apple';
	    $fruits[1] = 'banana';

	    # for 반복문
	    for($i = 0; $i < count($fruits); $i++){
		    echo $fruits[$i].'<br/>';
	    }

	    # foreach 반복문
	    foreach($fruits as $item){   // fruits배열의 내용을 item으로 하나씩 읽어옴
		    echo $item.'<br/>';
	    }
    ?>
</body>
</html>