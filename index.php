<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="stylesheet" href="common-files/css/bootstrap.min.css">
  <link rel="stylesheet" href="common-files/css/fonts-v3.css">
  <link rel="stylesheet" href="common-files/css/base-v4.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div id="_1"  >

   <div id="logo">
   <a href="index.php"> <img src="images/logo.png"> </a>
      </div>
   <div id="butt">
      <a href="abiturient.php"><img src="images/%D0%B0%D0%B1%D0%B8%D1%82%D1%83%D1%80%D0%B8%D0%B5%D0%BD%D1%82%D1%83.png" id="btn1" ></a>
      <a href="student.php"> <img src="images/%D1%81%D1%82%D1%83%D0%B4%D0%B5%D0%BD%D1%82%D1%83.png" id="btn2"></a>
      <a href="prepod.php"> <img src="images/%D0%BF%D1%80%D0%B5%D0%BF%D0%BE%D0%B4%D0%B0%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8E.png" id="btn3"></a>
    </div>

    <div id="menu">

        <a class="buttonk" href="about.php">
             </a><br/>
     
        <a class="buttonN" href="vectors.php">
            </a> <br/>
      
        <a class="buttonS" href="science.php">
            </a> <br/>
      
        <a class="buttonSo" href="sotrudniki.php">
        </a> <br/>
    
        <a class="buttonKo" href="contacts.php"> 
        </a><br/>
		
        <a class="buttonMp" href="mp.php">  
        </a> <br/>
      
      
      
    </div>
	<?php
	require_once('vectors.php');
	?>
	<div id="enter">
	<a href="#win1" class="login">  </a>
	<a href="#win2" class="reg"></a>
	
	</div>
	 <div id="footer">
  <img class="imgf" src="images/footer.png">
   </div>
   <!-- Окно входа -->
   <a href="#x" class="overlay" id="win1"></a>
   <div class="popup">
         <div class="textb">
		 <h1>Войти в личный кабинет</h1> </div><br>
		<br>
     <div  style="border: 0px solid blue; position:relative; top:50px; left:40px; height:200px; width:300px;">
		          
      <form action="index.php" method="post">
   
  <p><input type="text" name="login" value="" placeholder="Логин или Email"></p><br><br><br>
   
   <p><input type="password" name="password" value="" placeholder="Пароль"></p><br><br>
    
  <p><input type="submit" value="войти"><p>
</form>

</div>
    <a class="close"title="Закрыть" href="#close"></a>
   
	</div>
  </div>
 
  <script type="text/javascript" src="../common-files/js/require.min.js" data-main="../scripts/startup"></script>
</body>

</html>