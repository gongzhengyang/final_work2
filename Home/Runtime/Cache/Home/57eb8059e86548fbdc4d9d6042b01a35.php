<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>前台</title>
</head>
<body>
<p>用户收藏信息展示</p>
<table border="1">
    <tr>
    <td>歌手</td>
    <td>歌曲</td>
    <td>专辑名称</td>
    <td>用户名</td>
    </tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["man"]); ?></td>
            <td><?php echo ($vo["song"]); ?></td>
            <td><?php echo ($vo["zuanji"]); ?></td>
            <td><?php echo ($vo["user"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<HR style="FILTER: progid:DXImageTransform.Microsoft.Shadow(color:#987cb9,direction:145,strength:15)" width="100%" color=#987cb9 SIZE=1>
<p>输入搜索框，可以输入歌手，歌曲，专辑名查询</p>
<form action="/final_work2/index.php?s=/Home/Index/search" method="post">
    <input type="text" name="search">
    <input type="submit" value="搜索">
</form>
</body>
</html>