<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>歌手</title>
</head>
<body>
<p>歌手信息</p>
<table border="1">

    <tr>
        <td>歌手编号</td>
        <td>歌手名</td>
        <td>性别</td>
        <td>歌手地区</td>
        <td> 所属公司</td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["sex"]); ?></td>
            <td><?php echo ($vo["area"]); ?></td>
            <td><?php echo ($vo["company"]); ?></td>
            <td><a href="<?php echo U('collect','key=man&value='.$vo['name']);?>">收藏</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

</body>
</html>