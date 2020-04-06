
//ローディング
window.onload = function() {
  const spinner = document.getElementById('loading');
  spinner.classList.add('loaded');
}


//一文字ずつアニメーション
$(window).on('load',function(){
// ここから文字を<span></span>で囲む記述
$('.typ').children().addBack().contents().each(function() {
if (this.nodeType == 3)
{
$(this).replaceWith($(this).text().replace(/(\S)/gi, '<span>$1</span>'));
}
});
// ここから一文字ずつフェードインさせる記述
$('.typ').css({'opacity':1});
for (var i = 0; i <= $('.typ').children().size(); i++)

{
$('.typ').children('span:eq('+i+')').delay(50*i).animate({'opacity':1}, 1500);
};

});


//fadein
$(function(){
    $(window).scroll(function (){  /*スクロールしたら*/
        $('.fadein').each(function(){  /*fadein のクラスそれぞれに　以下を実行*/
            var position = $(this).offset().top;　/*ページの最上部から「.fadein」が付いた要素までの距離を取得*/
            var scroll = $(window).scrollTop();　/*スクロール量*/
            var windowHeight = $(window).height();　/*ウインドウの高さ*/
            if (scroll > position - windowHeight ){　
              /*スクロール量が、「ページ最上部から要素までの距離」-「ウィンドウの高さ」を超えた時、つまりスクロール量が要素の位置を過ぎた瞬間*/
              $(this).addClass('active');
            }
        });
    });
});


//画像ロールオーバー
//
// $(function(){
// 　　$(".img_hover a").hover(function(){
// 　　　　$(this).stop().animate({opacity:0,duration: "slow", easing: "linear"});
// 　　}, function(){
//        $(this).stop().animate({opacity:1,duration: "slow", easing: "linear"});
//    });
// });
//画像ロールオーバーここまで


//オンマウス透過処理
// $(function() {
// $('.over').opOver();
//   alert("hello");
//
// });

//overクラスのhoverが1秒後に元に戻る処理。
$(function() {

if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
 //hover 一秒後に戻る
$('.over').click(function(){
$(this).delay(1000).animate({ opacity: "1.0"}, 300);
});
//hover 一秒後に戻る
}

});

//スムーススクロール
$(function(){
	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").stop().animate({scrollTop:position}, speed, "swing");
		return false;
	});
});
//スムーススクロールここまで


  //ipad分岐
  $(function(){
    var ua = navigator.userAgent;

    if((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)){
        $('head').prepend('<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1, minimum-scale=1" />');
    } else {
        $('head').prepend('<meta name="viewport" content="width=device-width">');

        if(ua.indexOf('iPad') > 0){
           $("html").addClass("ipad");//ipadの時だけクラス追加
        }else{
          $("html").addClass("pc_window");
        }

    }
});
