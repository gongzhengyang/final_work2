<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.2.min.js"></script>
    <script>
        $(document).ready(function(){
            //设置一开始的时候的表单隐藏
            $("tr.formUpdate").css('display','none');
            $("#update").click(function () {
                $("tr.formUpdate").toggle();
            });

            // $("tr.formDelete").css('display','none');


            $("tr.formInsert").css('display','none');
            $("#insert").click(function () {
                $("tr.formInsert").toggle();
            });

            //表单按钮跳转
            $("#updateSubmit").click(function () {
                //var name=document.getElementById("name").value;
                $.ajax({url:"/final_work2/admin.php?s=/Home/CURD/update",
                    data:{table:"search_man",
                        id:document.getElementById("idUpdate").value,
                        name:document.getElementById("nameUpdate").value,
                        sex:document.getElementById("sexUpdate").value,
                        area:document.getElementById("areaUpdate").value,
                        company:document.getElementById("companyUpdate").value},
                    type:"POST",
                    datatype:"JSON",
                    success:function(result){
                        $("#show").html(result);
                    }
                });
            });
            $("#insertSubmit").click(function () {
                //var name=document.getElementById("name").value;
                $.ajax({url:"/final_work2/admin.php?s=/Home/CURD/insert",
                    data:{table:"search_man",
                        name:document.getElementById("nameInsert").value,
                        sex:document.getElementById("sexInsert").value,
                        area:document.getElementById("areaInsert").value,
                        company:document.getElementById("companyInsert").value},
                    type:"POST",
                    datatype:"JSON",
                    success:function(result){
                        $("#show").html(result);
                    }
                });
            });
            $("button.delete").click(function () {
                var $str=$('button.delete').val();
                alert($str);
            });
        });
        function deleteId(id) {

            $.ajax({
                    url:"/final_work2/admin.php?s=/Home/CURD/delete",
                    data:{id:id,
                        table:'search_man'},
                    type:"POST",
                    datatype:"JSON",
                    success:function(result){
                        $("#show").html(result);
                    }
                }
            )
        }

    </script>
</head>
<body>
<table border="1">
<tr>
    <td>id</td>
    <td>姓名</td>
    <td>性别</td>
    <td>地区</td>
    <td>公司</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($vo["id"]); ?></td>
        <td><?php echo ($vo["name"]); ?></td>
        <td><?php echo ($vo["sex"]); ?></td>
        <td><?php echo ($vo["area"]); ?></td>
        <td><?php echo ($vo["company"]); ?></td>
        <td>
            <button onclick="deleteId(<?php echo ($vo['id']); ?>)">删除</button>
        </td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<table>
    <tr>
        <td><button id="insert">插入</button></td>
        <td><button id="update">更新</button></td>
    </tr>
</table>
<table>
    <tr class="formUpdate"><td>本表更新</td></tr>
    <tr class="formUpdate">
        <td >
            id：<input type="text" id="idUpdate">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            姓名：<input type="text" id="nameUpdate">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            性别：<input type="text" id="sexUpdate">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            地区：<input type="text" id="areaUpdate">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            公司：<input type="text" id="companyUpdate">
        </td>
    </tr>
    <tr class="formUpdate">
        <td><button id="updateSubmit">提交</button></td>
    </tr>


    <tr class="formInsert"><td>数据插入</td></tr>
    <tr class="formInsert">
    <tr class="formInsert">
        <td >
            姓名：<input type="text" id="nameInsert">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            性别：<input type="text" id="sexInsert">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            地区：<input type="text" id="areaInsert">
        </td>
    </tr>
    <tr class="formUpdate">
        <td >
            公司：<input type="text" id="companyInsert">
        </td>
    </tr>
    <tr class="formInsert">
        <td><button id="insertSubmit">提交</button></td>
    </tr>
</table>
</body>
</html>