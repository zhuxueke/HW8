	<?php
	if($_GET['id']==""||$_GET['pwd']==""){
		?>
		<p>注册</p>
    	姓名<label><input id="username" class="boxInset" type="text" name="username"></label><br>
    	密码<label><input  id="password" class="boxInset" type="text" name="password" ></label><br>
    	<input type="button" class="boxButton"  onclick="showUser('myDiv')" name="提交" value="提交">
	<?php 
}else{
	?>
		<p>登陆</p>
    	姓名<label><input id="username" class="boxInset" type="text" name="username"></label><br>
    	密码<label><input  id="password" class="boxInset" type="text" name="password" ></label><br>
    	<input type="button" class="boxButton"  onclick="show()" name="提交" value="提交">
	<?php
}
	?>	