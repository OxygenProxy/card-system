<?php
if (!isset($var)) die('error');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <title>card</title>
</head>
<body>
<div class="email-paged"
     style="background-image: url();-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-position: center center;background-repeat: no-repeat;">
    <div class="email-content"
         style="opacity:0.8;width:100%;max-width:720px;text-align: left;margin: 0 auto;padding-top: 80px;padding-bottom: 40px">
        <div class="email-title"
             style="-webkit-box-shadow: 10px 10px 10px rgba(0,0,0,.13);box-shadow: 10px 10px 10px rgba(0,0,0,.13);">
            <h1 style="color:#fff;background: #51a0e3;line-height:70px;font-size:24px;font-weight:normal;padding-left:40px;margin:0">
                安装检测</h1>
            <div class="email-text" style="background:#fff;padding:20px 32px 0;">

                <p style="color: #6e6e6e;font-size:13px;line-height:24px;">正在初始化...</p>
                <p style="color: #6e6e6e;font-size:13px;line-height:24px;margin-top: 4px;"><?php echo $var['db']?></p>

                <?php if(isset($var['permission'])){ ?>
                <br/>
                <p style="color: #6e6e6e;font-size:13px;line-height:24px;">进行目录检测...
                    <span style="color: green">W</span>:可写，
                    <span style="color: green">R</span>:可读
                </p>
                <p style="color: #6e6e6e;font-size:13px;line-height:24px;margin-top: 4px;"><?php echo $var['permission']?></p>
                <p style="color: #6e6e6e;font-size:13px;line-height:24px;"></p>
                <?php }?>
                <p style="color: #6e6e6e;font-size:13px;line-height:24px;">祝您使用愉快！</p>
                <br/>
            </div>
        </div>
    </div>
</div>
</body>
</html>