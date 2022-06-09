
<html lang="zh-TW">
<?php
session_start();
?>
<head>
<title>FinalReport</title>
<style type="text/css">
html{
    height:100%;
}
* html body{
    height:100%;
}
body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    min-height:100%;
    position:relative;
}
div a{
    text-decoration:none;
    color:#000000;
}

div.topNav{
    color:#fff;
    padding:5px 0px 5px 20px;
    background-color:#4d5363;
}
div.topNav span{
    padding:0px 20px;
    #e3e6e9
}
div.topNav span.home{
    font-size:11px;
    color:#c3c6c9;
    float:right;
}
div.header{
    color:#fff;
    font-size:24px;
    text-align:center;
    padding:5px 0px 0px 0px;
    background-color:#a6a9b1;
    background-image:url('image/首頁.jfif');
    height:160px;
}
/* --Wrapper-- */
/*div.wrapper{
    padding-bottom:80px;
    margin-bottom: 0 5px; 
}*/
div.content{
    margin:15px 0px 0px 60px;
    padding:5px 10px;
    border:1px solid #c8cfe1;
    overflow:hidden;
}
/* --Content 元素-- */
div.content h1{
    font-size:20px;
    /* color:#4d5363; */
    /* font-weight:normal; */
    letter-spacing:1px;
    margin:10px 0px 0px 0px;
    padding:3px 10px;
    background-color:#e4e5e7;
    text-shadow:0px 0px 0px #e4e5e7;
}
div.content h1 strong{
    font-size:12px;
    color:#fff;
    background-color:#4d5363;
    margin:-10px 0px 0px 0px;
    padding:4px 10px;
    float:right;
    border-radius:5px;
}
div.box-c{
    font-size:20px;
    line-height:60px;
    color:#4aa83b;
    background-color:#cacbd0;
    width:90px;
    height:60px;
    margin:0 auto;padding:0px 0px 0px 0px;
    text-align:center;
    border-radius:3px;
}
/* --Navigation-- */
div.leftNav{
    width:200px;
    max-width:36%;
    height: 900px;
    margin:-40px 20px 0px 10px;
    padding:20px 30px;
    border:1px solid #c8cfe1;
    background-color:#fff;
    float:left;
}
/* --Footer-- */
div.footer{
    clear:both;
    width:100%;
    position:absolute;
    bottom:0;
    height:80px;
    color:#fff;
    padding:20px 0px 0px 0px;
    text-align:center;
    background-color:#4d5363;
}
.wrapper {
  min-height: 100%; /*外層高度100%*/
  margin-bottom: -50px; /*隨footer高度需做調整*/
}
div.footer b{font-weight:normal;font-size:13px;color:#a3a6a9;}

</style>
</head>
<body>
<div class="topNav">
	<span><img src='images.png' height="30px" width="30px" ></span> 
    <?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        if($cookieID=='0970768325'){
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
            echo '<a href="index.php" style=color:#fff><span>XX飲料</span></a>';
            echo "<div align='right'>";
            echo "<span>歡迎管理員 $cookieID</span>";
            echo '<a href="logout.php"><font color="white">登出       </font></a>';
            echo "<a href='adminControl.php'><font color='red'>進入管理員控制室</font></a>";
            echo "</div>";
        }
        else{
            if(isset($_COOKIE["UID"])){
                $cookieID=$_COOKIE["UID"];
                // 網頁編碼宣告
                echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
                echo '<a href="index.php" style=color:#fff><span>甜資資飲料</span></a>';
                echo "<div align='right'>";
                echo "<a href='checkout.php' style=color:#fff><img src='checkout.png' height='15px' width='15px'></a>";
                echo "<a href='checkout.php' style=color:#fff>購物車</a>";
                echo "<span>歡迎用戶 $cookieID</span>";
                echo "<a href='userManage.php' style=color:#fff>用戶管理 </a>";
                echo '<a href="logout.php"><font color="white">登出</font></a>';
                echo "</div>";
            }
        }
    }
        else{
            // 網頁編碼宣告
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
            echo '<a href="index.php" style=color:#fff><span>甜資資飲料</span></a>';
            echo '<a href="login.php"><span class="home">登入</span></a>';
            echo '<a href="register.php"><span class="home">註冊</span></a>';
        }
    ?>
</div>
<div class="header">   
</div>
<div class="wrapper">
<div class="leftNav">
   
<a href='tea.php'><b><font size="4">茶類</font></b></a>   <br />
      <a href='buyDrink/blacktea.php'><font size="2">精選紅茶</font></a>   <br />
      <a href='buyDrink/bluetea.php'><font size="2">精選青茶</font></a>   <br />
      <a href='buyDrink/greentea.php'><font size="2">精選綠茶</font></a>   <br />
      <a href='buyDrink/oltea.php'><font size="2">精選高山烏龍茶</font></a>   <br />
      <a href='buyDrink/milktea.php'><font size="2">精選奶茶</font></a>   <br /><br />
   <a href='special.php'><b><font size="4">特調</font></b></a>   <br />
      <a href='buyDrink/aht.php'><font size="2">阿華田脆酷繽紛樂</font></a>   <br />
      <a href='buyDrink/star.php'><font size="2">夜空中最亮的星</font></a>   <br />
      <a href='buyDrink/summer.php'><font size="2">暑假酷心涼</font></a>   <br />
      <a href='buyDrink/pink.php'><font size="2">粉色奇蹟</font></a>   <br />
      <a href='buyDrink/lemon.php'><font size="2">不要以為只是雪碧加檸檬</font></a>   <br /><br />
   <a href='fruit.php'><b><font size="4">水果茶</font></b></a>  <br />
      <a href='buyDrink/nf.php'><font size="2">一般的水果茶</font></a>  <br />
      <a href='buyDrink/nnf.php'><font size="2">不一般的水果茶</font></a>  <br /><br />
   <a href='coffee.php'><b><font size="4">咖啡</font></b></a>    <br />
      <a href='buyDrink/Acoffe.php'><font size="2">美式冰咖啡</font></a>   <br />
      <a href='buyDrink/cb.php'><font size="2">冰DER卡布奇諾</font></a>  <br />
      <a href='buyDrink/nt.php'><font size="2">冰DER拿鐵</font></a>  <br />
      <a href='buyDrink/mjd.php'><font size="2">焦糖瑪奇朵</font></a>  <br /><br />
   <a href='ice.php'><b><font size="4">冰沙</font></b></a>    <br />
      <a href='buyDrink/mango.php'><font size="2">透心涼芒果冰沙</font></a>  <br />
      <a href='buyDrink/fire.php'><font size="2">透心涼火龍果加上芒果冰沙</font></a>  <br />
      <a href='buyDrink/barry.php'><font size="2">透心涼草莓冰沙</font></a>  <br />
      <a href='buyDrink/melon.php'><font size="2">透心涼哈蜜瓜冰沙</font></a>  <br />
      <a href='buyDrink/choco.php'><font size="2">透心涼巧克力佐奶油冰沙</font></a>  <br />
          <br />
          <br />
          <br />
  </div>
	<!--[Element Center Layout]-->
	<div class="content">
    <span><h1><a href='index.php'>瀏覽飲料 </a><a href='makeDrink.php'>客製化製作 </a><a href='QA.php'>常見問題</a></h1></span>
		<br />

        <center>
        <div style="background-color:#80bfff;border-width:3px;border-style:double;border-color:#fff;width: 500px;padding:5px;">
		<?php
$tea=@$_POST["tea"];
$material=@$_POST["material"];
$teasize=@count($tea);
$materialsize=@count($material);

$sweet=@$_POST["sweet"];
$ice=@$_POST["ice"];
$comment=@$_POST["comment"];
$comment=strip_tags($comment);  //去掉文字塊的超連結(避免被駭)
$comment=nl2br($comment);     //new line to br 文字塊按enter時可自動分行
$sumprice=30;
$mixd="";
$mixm="";

echo "<b>您勾選的混合飲: </b>";
//echo $foodsize;
    for($i=0;$i<$teasize;$i++){
            echo $tea[$i]." ";
            switch ($tea[$i]) {
                case '紅茶':
                    $sumprice=$sumprice+0;
                    break;
                case '綠茶':
                    $sumprice=$sumprice+0;
                    break;
                case '青茶':
                    $sumprice=$sumprice+0;
                    break;
                case '牛奶':
                    $sumprice=$sumprice+10;
                    break;
                case '咖啡':
                    $sumprice=$sumprice+10;
                    break;
                case '養樂多':
                    $sumprice=$sumprice+5;
                    break;
                case '檸檬汁':
                    $sumprice=$sumprice+5;
                    break;
            }
            $mixd = $mixd.$tea[$i]." ";
        }
   
if($tea==null){
echo "<b>您選擇了寂寞~</b>";
}
echo "<br/>";
echo "<br/>";

echo "<b>您勾選的混合料: </b>";
//echo $materialsize;
    for($i=0;$i<$materialsize;$i++){
            // echo $material[$i]." ";
            switch ($material[$i]) {
                case '波霸':
                    $sumprice=$sumprice+10;
                    break;
                case '珍珠':
                    $sumprice=$sumprice+8;
                    break;
                case '椰果':
                    $sumprice=$sumprice+8;
                    break;
                case '杏仁凍':
                    $sumprice=$sumprice+8;
                    break;
                case '布丁':
                    $sumprice=$sumprice+5;
                    break;
                case '御園':
                    $sumprice=$sumprice+5;
                    break;
                case '愛玉':
                    $sumprice=$sumprice+5;
                    break;
            }
            
            $mixm = $mixm.$material[$i].",";
            echo $material[$i]." ";
        }
        
if($material==null){
    echo "<b>您選擇了寂寞~</b>";
}
echo "<br/>";
echo "<br/>";
    if($sweet=='全糖'){
        echo "<b>您選擇的甜度: </b>全糖<br/>";
    }else if($sweet=='7分糖'){
        echo "<b>您選擇的甜度: </b>7分糖<br/>";
    }else if($sweet=='半糖'){
        echo "<b>您選擇的甜度: </b>半糖<br/>";
    }else if($sweet=='3分糖'){
        echo "<b>您選擇的甜度: </b>3分糖<br/>";
    }else if($sweet=='無糖'){
        echo "<b>您選擇的甜度: </b>無糖<br/>";
    }
    if($sweet==null){
    echo "<b>您的默認選擇是全糖~</b>";
    echo "<br/>";
    echo "<br/>";
}

echo "<br/>";
    if($ice=='全冰'){
        echo "<b>您選擇的冰量: </b>全冰<br/>";
    }else if($ice=='7分冰'){
        echo "<b>您選擇的冰量: </b>7分冰<br/>";
    }else if($ice=='5分冰'){
        echo "<b>您選擇的冰量: </b>5分冰<br/>";
    }else if($ice=='3分冰'){
        echo "<b>您選擇的冰量: </b>3分冰<br/>";
    }else if($ice=='去冰'){
        echo "<b>您選擇的冰量: </b>去冰<br/>";
    }

if($ice==null){
    echo "<b>您的默認選擇是全冰~</b>";
    echo "<br/>";
    echo "<br/>";
}

echo "<br/>";

if($comment==null){
    echo "<b>您的其他意見: </b><br/>"."無<p>";
}
else{
    echo "<b>您的其他意見: </b><br/>".$comment."<p>";
}
echo "您勾選的總額為：".$sumprice;
echo "<br/>";
echo "<br/>";
// echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
// echo "<div style='border-width:3px;border-style:ridge;border-color:#000;width: 120px;padding:5px;'>";

// echo "<input type = 'submit' href='inede' value = '加入到購物車！'>";
// echo '</div>';
$name='客製化';
$mixd=$mixd.$sweet.$ice.$comment;
$_SESSION["price"]=$sumprice;
$_SESSION["mixd"]=$mixd;
$_SESSION["mixm"]=$mixm;
$_SESSION["drink"]=$name;


?>
<form action="test.php" method="post">
<input type="radio" name="choose" value="外帶">外帶<input type="radio" name="choose" value="外送">外送<input type="text" name="address" placeholder='外送請填地址'></br>
<input type="submit" value="下單">
</form>

</div>
<form action="makeDrink.php" method="post">
<input type="submit" value="重新選擇">
</form>
</center>
</div>


		<!--[Element Center Layout]--><br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	</div>
</div>
<div class="wrapper">
    <div class="footer" style = bottom: 0>
    甜資資飲料<br />
	    <a href='index.php'><b>回到首頁
        </b></a><br />
        <a href="#top">回頂端</a>
    </div>
</div>
</body>
</html>