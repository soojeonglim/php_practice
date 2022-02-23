<?php
    $title ='home';
    include_once('inc/header.php');
?>

<!-- 사용자의 입력을 받아서 데이터베이스에 전송 및 DB 조회 가능 -->
<!-- 사용자가 입력한 데이터로 request.php에서 검사 할 수 있음 -->
<!-- <form action="request.php" method="get"> -->
<form action="request.php" method="post">
    <p>
        <label for="userName">Name</label>
        <input type="text" name="username" id="userName">  
                    <!-- name : 필드명 -->
    <p>
        <label for="userEmail">Email</label>
        <input type="email" name="useremail" id="userEmail">
    </p>
    <p>
        <input type="submit" value="로그인">
    </p>
</form>  

<?php
    include('inc/footer.php');
?>