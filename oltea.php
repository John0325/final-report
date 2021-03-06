
<html lang="zh-TW">
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
    background-color:#2d5363;
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
    font-size:22px;
    text-align:center;
    padding:5px 0px 0px 0px;
    background-color:#a6a9b1;
    background-image:url('../image/首頁.jfif');
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
    height:1000px;
}
/* buydrinkInfo */
div.buydrinkInfo{
    margin:15px 10px;
    border-style:outset;
    border-color:#000;
    border-width:3px;
    padding:5px;
    border-radius:3px;
    width:900px;
    height:900px;
    display: inline-block;
}
/* --Content 元素-- */
div.content h1{
    font-size:20px;
    /* color:#2d5363; */
    /* font-weight:normal; */
    letter-spacing:1px;
    margin:10px 0px 0px 0px;
    padding:3px 10px;
    background-color:#e2e5e7;
    text-shadow:0px 0px 0px #e2e5e7;
}
div.content h1 strong{
    font-size:12px;
    color:#fff;
    background-color:#2d5363;
    margin:-10px 0px 0px 0px;
    padding:2px 10px;
    float:right;
    border-radius:5px;
}
div.box-c{
    font-size:20px;
    line-height:60px;
    color:#2aa83b;
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
    margin:-20px 20px 0px 10px;
    padding:20px 30px;
    border:1px solid #c8cfe1;
    background-color:#fff;
    float:left;
}

/* drinkbox */
div.drinkBox{
    margin:15px 10px;
    border-style:outset;
    border-color:#000;
    border-width:3px;
    padding:5px;
    border-radius:3px;
    width:300px;
    height:350px;
    display: inline-block;
    cursor: pointer;
    float: left;
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
    background-color:#2d5363;

}
div.wrapper {
  min-height: 100%; /*外層高度100%*/
  margin-bottom: -50px; /*隨footer高度需做調整*/
}
div.footer b{font-weight:normal;font-size:13px;color:#a3a6a9;}
</style>
</head>
<body>
<div class="topNav">
	<span><img src='../images.png' height="30px" width="30px" ></span>
    <?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        if($cookieID=='0970768325'){
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
            echo '<a href="../index.php" style=color:#fff><span>甜資資飲料</span></a>';
            echo "<div align='right'>";
            echo "<span>歡迎管理員 $cookieID</span>";
            echo '<a href="logout.php"><font color="white">登出       </font></a>';
            echo "<a href='../adminControl.php'><font color='red'>進入管理員控制室</font></a>";
            echo "</div>";
        }
        else{
            if(isset($_COOKIE["UID"])){
                $cookieID=$_COOKIE["UID"];
                // 網頁編碼宣告
                echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
                echo '<a href="../index.php" style=color:#fff><span>甜資資飲料</span></a>';
                echo "<div align='right'>";
                echo "<a href='../checkout.php' style=color:#fff><img src='../checkout.png' height='15px' width='15px'></a>";
                echo "<a href='../checkout.php' style=color:#fff>購物車</a>";
                echo "<span>歡迎用戶 $cookieID</span>";
                echo "<a href='../userManage.php' style=color:#fff>用戶管理 </a>";
                echo '<a href="../logout.php"><font color="white">登出</font></a>';
                echo "</div>";
            }
        }
    }
        else{
            // 網頁編碼宣告
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';  
            echo '<a href="../index.php" style=color:#fff><span>甜資資飲料</span></a>';
            echo '<a href="../login.php"><span class="home">登入</span></a>';
            echo '<a href="../register.php"><span class="home">註冊</span></a>';
        }
    
    ?>
</div>
<div class="header">
</div>
<div class="wrapper">
	<div class="leftNav">
   
     <a href='../tea.php'><b><font size="4">茶類</font></b></a>   <br />
        <a href='../buyDrink/blacktea.php'><font size="2">精選紅茶</font></a>   <br />
        <a href='../buyDrink/bluetea.php'><font size="2">精選青茶</font></a>   <br />
        <a href='../buyDrink/greentea.php'><font size="2">精選綠茶</font></a>   <br />
        <a href='../buyDrink/oltea.php'><font size="2">精選高山烏龍茶</font></a>   <br />
        <a href='../buyDrink/milktea.php'><font size="2">精選奶茶</font></a>   <br /><br />
     <a href='../special.php'><b><font size="4">特調</font></b></a>   <br />
        <a href='../buyDrink/aht.php'><font size="2">阿華田脆酷繽紛樂</font></a>   <br />
        <a href='../buyDrink/star.php'><font size="2">夜空中最亮的星</font></a>   <br />
        <a href='../buyDrink/summer.php'><font size="2">暑假酷心涼</font></a>   <br />
        <a href='../buyDrink/pink.php'><font size="2">粉色奇蹟</font></a>   <br />
        <a href='../buyDrink/lemon.php'><font size="2">不要以為只是雪碧加檸檬</font></a>   <br /><br />
     <a href='../fruit.php'><b><font size="4">水果茶</font></b></a>  <br />
        <a href='../buyDrink/nf.php'><font size="2">一般的水果茶</font></a>  <br />
        <a href='../buyDrink/nnf.php'><font size="2">不一般的水果茶</font></a>  <br /><br />
     <a href='../coffee.php'><b><font size="4">咖啡</font></b></a>    <br />
        <a href='../buyDrink/Acoffee.php'><font size="2">美式冰咖啡</font></a>   <br />
        <a href='../buyDrink/cb.php'><font size="2">冰DER卡布奇諾</font></a>  <br />
        <a href='../buyDrink/nt.php'><font size="2">冰DER拿鐵</font></a>  <br />
        <a href='../buyDrink/mjd.php'><font size="2">焦糖瑪奇朵</font></a>  <br /><br />
     <a href='../ice.php'><b><font size="4">冰沙</font></b></a>    <br />
        <a href='../buyDrink/mengo.php'><font size="2">透心涼芒果冰沙</font></a>  <br />
        <a href='../buyDrink/fire.php'><font size="2">透心涼火龍果加上芒果冰沙</font></a>  <br />
        <a href='../buyDrink/barry.php'><font size="2">透心涼草莓冰沙</font></a>  <br />
        <a href='../buyDrink/melon.php'><font size="2">透心涼哈蜜瓜冰沙</font></a>  <br />
        <a href='../buyDrink/choco.php'><font size="2">透心涼巧克力佐奶油冰沙</font></a>  <br />
            <br />
            <br />
            <br />
	</div>
	<!--[Element Center Layout]-->
	<div class="content">
    <span><h1><a href='../index.php'>瀏覽飲料 </a><a href='../makeDrink.php'>客製化製作 </a><a href='../QA.php'>常見問題</a></h1></span>
		<div class=>

       </div>
       <div class="drinkBox">
       <img src='../商品圖/茶/800x.png' height="350px" width="300px"></img>
       <center>
       <span><h1>精選高山烏龍茶 $40</h1></span>
        </center>
        </div>
        
        <div class="buydrinkInfo">
            <center>
            請填寫你想要的甜度和冰量！<br>  
            <form action="../shopCar.php" method="post" enctype="multipart/form-data">
            <table style = 'left;background-color:#F0EDF7;' border = '1'>
                <tr><td>
                <b>請選擇甜度！(沒勾選的話默認全糖)</b><br>    
                        <input type="radio" name="sweet" value="全糖">全糖 
                        <input type="radio" name="sweet" value="7分糖">7分糖 
                        <input type="radio" name="sweet" value="半糖">半糖
                        <input type="radio" name="sweet" value="三分糖">三分糖
                        <input type="radio" name="sweet" value="無糖">無糖
                        <br>    
                    <b>請選擇含冰量！(沒勾選的話默認全冰)</b><br>
                        <input type="radio" name="ice" value="全冰">全冰
                        <input type="radio" name="ice" value="7分冰">7分冰
                        <input type="radio" name="ice" value="5分冰">5分冰
                        <input type="radio" name="ice" value="3分冰">3分冰
                        <input type="radio" name="ice" value="去冰">去冰
                    <br>若您有其他的需求，請在下方留言：<br><textarea name = 'comment'></textarea><br>
                <center>
                <br><input type = 'submit' value = '加入購物車！'>
                </center>
                </td></tr>
            </table>
            <input type="hidden" name="drink" value="精選高山烏龍茶">
                <input type="hidden" name="price" value="40">
        </form>
            </center>
        </div>
		<!--[Element Center Layout]-->
	</div>
    </div>
<div class="wrapper">
    <div class="footer" style = bottom: 0>
    甜資資飲料<br />
	    <a href='../index.php'><b>回到首頁
        </b></a><br />
        <a href="#top">回頂端</a>
    </div>
</div>
</body>
</html>