// スライダー
$(document).on('ready', function() {
  $(".full-screen-o").slick({
    centerMode: true,
    centerPadding: '5%',
    // dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    arrow: true,
  });
});

// ハンバーガーメニュー
$(function() {
  $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
      } else {
          $('.globalMenuSp').removeClass('active');
      }
  });
});



// 時刻表示
// $(function() {
// 	var now; //タイムスタンプ用変数
// 	$.getJSON('datetime.php') // json読み込み開始（ファイルパスは適宜通してください）
// 	  .done(function(json){ // jsonの読み込みに成功した時
// 		  for(var i in json){
// 		    now = json[i] * 1000;//PHPのタイムスタンプを1000倍に
// 		  }
// 	  })
// 	  .fail(function(){ // jsonの読み込みに失敗した時
// 	    console.log('json_error');
// 	  });

// 	function showtime(){
// 	  today = new Date(now);
// 	  $weekday = ['日','月','火','水','木','金','土'];
// 	  month = today.getMonth() + 1 ;
// 	  $('#datetime').html(month + "月"+ today.getDate() + "日（" + $weekday[today.getDay()] +"） " +today.getHours() + ":" + ('0'+today.getMinutes()).slice(-2) + ":" + ('0' +today.getSeconds()).slice(-2));
// 	  now += 1000;
// 	}
// 	setInterval(showtime,1000);

// });


// アコーディオン
$(function(){
  $('.accordion_one .ac_header').click(function(){
    $(this).next('.ac_inner').slideToggle();
    $(this).toggleClass("open");
  });
});