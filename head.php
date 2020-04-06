<?php
//ini_set( 'display_errors', 1 );
//全URL取得
$raal_url=(empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

//hash取得
$raal_hash=$_SERVER['QUERY_STRING'];

//ユーザーエージェント取得
$ua = $_SERVER['HTTP_USER_AGENT'];


// それに伴うページ分岐と使うであろうユーザーエージェント分岐
if(strpos($raal_url,'index.php') !== false){

	}

if ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false)){}

$home_title="	Mikako Iijima (mikakokeshi) | My Personal Portfolio";//サイトタイトル
$description="";//ディスクリプション
$keyword="Mikako Iijima";//キーワード
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo($home_title);?></title>
<meta name="description" content="<?php echo($description);?>">
<meta name="keywords" content="<?php echo($keyword);?>">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="format-detection" content="telephone=no">


<link rel="stylesheet" type="text/css" href="common/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="common/css/each.css" media="all" />
<link rel="stylesheet" type="text/css" href="common/css/each_pc.css" media="all" />
<link rel="stylesheet" type="text/css" href="common/css/each_sp.css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Cinzel|Kaushan+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="common/js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="common/js/ic.js"></script>


<script type="text/javascript">
//fixedの崩れ防止
if(navigator.platform == 'iPad' || navigator.platform == 'iPhone' || navigator.platform == 'iPod');
</script>
</head>

<body >
