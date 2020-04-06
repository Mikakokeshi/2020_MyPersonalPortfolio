<?php
include_once("head.php");
?>
<!-- ローディング画面 -->
<div id="loading">
<div class="spinner"></div>
</div>

<!--wrapperここから-->
<div id="wrap">
<div id="wrapper">

<?php
include_once("header.php");
?>

<!--メインエリアここから-->
<div id="main">



  <div id="main_visual">
    <!-- <div class="main_visual_img"></div> -->

    <div class="video-wrap">
      <video class="main_visual_img" controls autoplay loop muted preload onclick="this.play();">
      <source src="img/plant.mp4" />
      </video>
    </div>
        <div id="main_in">
        <div class="main_visual_txt">
          <h1 class="typ">We are shaped<br class="sp"> and fashioned<br> by what we love</h1>
        </div>


         </div>

      </div> <!-- main_visual -->

<div id="contents">

      <div id="about" class="content fadein">
        <div class="ttl fadein">#About me</div>
        <div class="img fadein"><img src="img/me.jpg" alt="me"></div>
        <div class="box fadein">
          マークアップエンジニアとしてHTML、CSS、jQuery<br>
          を中心にWeb制作行っています。

        </div>

      </div>
      <div id="skills" class="content fadein">
        <div class="ttl fadein">#Skills</div>
        <div class="box fadein">HTML5 / CSS3 / jQuery / Ruby on rails <br><br>
          LPの制作、JQueryによる動的な動きの追加、PHPからWordpressに組み込み等</div>
      </div>

       <div id="portfolio" class="content fadein">
         <div class="ttl fadein">#Portfolio</div>
         <div class="img_box fadein">
              <!-- <div class="img box fadein"><a target="_blank" href="https://github.com/Mikakokeshi/mikakokeshi.github.io">
                <span>HTML,CSS,jQuery <br>2017年制作 <br><br></span> <img src="img/Capture.png" alt="Capture"></a>
              </div> -->
              <div class="img box fadein">
                <a target="_blank" href="https://github.com/Mikakokeshi/twitter-clone">
                  <span><b> Twitter clone （2017年制作）</b><br>Ruby on rails / Cloud9<br><br></span><img src="img/twitter.png" alt="twitter"></a>
              </div>
              <div class="img box fadein">
                <a target="_blank" href="https://github.com/Mikakokeshi/cooking-app">
                  <span><b>レシピ投稿サイト （2017年制作）</b><br>Ruby on rails / Cloud9<br><br> </span>
                  <img src="img/recipe1.png" alt="recipe1"></a>
                </div>
         </div>
       </div>

       <div id="history" class="content fadein">
         <div class="ttl fadein">#History</div>
         <div class="box fadein">

            大学卒業後、2015年4月より東京都内でWebのマーケティング会社にて営業として1年5カ月勤務。<br>
            その後、5カ月間フィリピンに転勤となり新規事業のサポートに尽力。<br><br>
            2017年1月末に会社を退職後、<br>フィリピンのプログラミングスクールを経て、2018年よりウェブ制作会社に10ヶ月間勤務。<br><br>
            2019年2月よりオーストラリアにワーキングホリデーVISAで1年間滞在し、<br>現地の日系企業で新規営業としてオーストラリア国内での訪日観光支援に6ヶ月間携わる。
            <br>2020年の2月に日本に帰国。
         </div>
         </div>

       <div id="contact" class="content fadein" >
         <div class="ttl fadein">#Contact</div>
         <div class="box fadein">
           <div class="img fadein">
              <a target="_blank" href="mailto:mikakokeshi00124@icloud.com"><img src="img/mail.jpg" alt="email"></a>
           </div>
          <a target="_blank" href="mailto:mikakokeshi00124@icloud.com">Email : mikakokeshi00124@gmail.com</a>
         </div>
         <!-- <div class="main_sns">
           <div class="linkdin">
             <a class="over" target="_blank" href="https://www.linkedin.com/in/mikako-iijima/"><img src="img/link.png" alt="linkdin"></a>
           </div>
           <div class="facebook">
             <a class="over" target="_blank" href="https://www.facebook.com/mikako.iijima.9"><img src="img/fb.png" alt="fb"></a>
           </div>
           <div class="github">
             <a class="over" target="_blank" href="https://github.com/Mikakokeshi"><img src="img/github.png" alt="git"></a>
           </div>
         </div> -->

         <div class="main_sns">
           <div class="linkdin">
             <a class="over" target="_blank" href="https://www.linkedin.com/in/mikako-iijima/"><img src="img/link.png" alt="linkdin"></a>
           </div>
           <div class="facebook">
             <a class="over" target="_blank" href="https://www.facebook.com/mikako.iijima.9"><img src="img/fb.png" alt="fb"></a>
           </div>
           <div class="github">
             <a class="over" target="_blank" href="https://github.com/Mikakokeshi"><img src="img/github.png" alt="git"></a>
           </div>
         </div>


       </div>

     </div>

</div>
<!--メインエリア-->




<!-- フッターここから-->
<?php
include_once("footer.php");
?>
