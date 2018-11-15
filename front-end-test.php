<!doctype html>
<html lang="en">
<head >
    <meta charset="utf-8"/>
    <meta name="description" content="Frontend Limesharp Test"/>
    <meta name="keywords" content="test, frontend, limesharp"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <title>Limesharp |  Frontend Test</title>
    <link  rel="stylesheet" type="text/css"  media="all" href="./css/reset.css" />
    <link  rel="stylesheet" type="text/css"  media="all" href="./css/styles.css" />
    <link  rel="stylesheet" type="text/css"  media="all" href="./css/fonts.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script  type="text/javascript"  src="./js/app.js"></script>
    <link  rel="icon" type="image/x-icon" href="favicon.png" />
</head>
<body class="">
<?php
$data['title'] = 'Block';
$data['body'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum eros nisi, eu sagittis nisl feugiat quis.';
?>
<div class="wrapper">

    <div class="header">
    	<h1 class="title">Experienced & <span>Multi-Talented</span></h1>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tortor leo, porttitor vel dictum at, aliquam et augue. Duis vel molestie risus, ut lobortis felis.</p>
    </div>
    
    <div class="main">
    	<ul class="grid">
    		<?php for ($i = 1; $i <= 8; $i++):?>
    		<li class="item">
    			<div class="item-top">
    				<img src="images/info.png" alt="info" />
    			</div>
    			<div class="item-bottom">
    				<h4 class="sub-title"><?php echo $data['title'];?></h4>
    				<div class="expand"><?php echo $data['body'];?></div>
    				<span class="control"></span>
    			</div>
    		</li>
    		<?php endfor;?>
    	</ul>
    </div>

</div>

</body>
</html>