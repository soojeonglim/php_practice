<?php
    $title ='home';
    include_once('inc/header.php');
?>
<!-- 사용자가 입력한 것을 화면에 출력 -->
    <?php
        // $_GET : 최상위 super global 배열, get으로 사용자가 넘겨준 변수값을 어디에서든 사용가능함
        // $name = $_GET["username"];
        // $email = $_GET["useremail"];

        $name = $_POST["username"];
        $email = $_POST["useremail"];
            echo $name.'님의 입력한 이메일은'.$email.'입니다.';
            // get방식은 url주소에 데이터가 그대로 노출됨. (문자열의 쿼리방식으로 보냄)
            // post방식은 url에 기록이 남지 않음. (내부적으로 암호화되어 데이터가 보내짐)
    ?>

<?php
    include('inc/footer.php');
?>