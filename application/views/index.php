<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>王春雪</title>
	<base href="<?php echo site_url();?>" >
	
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/swipebox.css">
</head>
<body>
  <div id="contain">
  	<div id="header">
  		<img src="img/banner.jpg" alt="" id="photo_a">
  		<ul class="adress">
  		    <h1>about me</h1>
		  	<li>name</li>
		  	<li>wang chun xue </li>
		  	<li>telephone</li>
		  	<li>13904810484</li>
		  	<li>github</li>
		  	<li>wangchunxue</li>
	  	    <li>email</li>
	  	    <li>10124747352qq.com</li>
	  	    <li>character</li>
	  	    <li> sunshine active green</li>
	  	    <li>habbit</li>
	  	    <li>read book , watch movie , study</li>
	    </ul> 			
  	</div>
  	<div id="me">
  	<h1>about me</h1>
  	</div>
  	<div id="education" class="education">
		<div class="container">
			<h3 class="title">Education</h3>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>Undergraduate Degree - 2014</h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-education"> </span> Freshman</h5>
					<p>HTML：能熟练掌握html常用标签的使用及该标签的常用属性，了解html语义化，熟悉页面布局和架构
                    <p>CSS：能熟练使用css为html结构添加样式，并熟悉css常见的兼容性问题</p>
                    <p>bootstrap结合了bootstrap编写了个人网站，能熟练的使用。
响应式设计：可对网页进行响应式设计</p>
<p>Photoshop：熟练精通前端的切图操作，及个别简单的P图功能 。</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>Diploma in Design - 2010</h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> University Name <span class="glyphicon glyphicon-education"></span></h5>
					<p>Javascript：能用js进行DOM操作，并进行特效的处理 </p>
                    <p>jQuery：简洁的javaScript类库，能较熟练使用，在网页制作中有较多的应用</p>
                    <p>Angular js：前端MVC框架，熟悉大部分语法并做过相关练习</p> 。
                    <p>Require js：代码模块化开发，了解，可进行简单的操作</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>Web Design - 2008</h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-education"> </span> University Name</h5>
					<p>CI框架：熟练掌握各项基本语句操作，及MVC操作</p>
					<p>PHP：网站后台代码编写全部使用php语言结合CI框架结合mysql数据库写成</p>
					<p>Node js：能结合nodejs+express+mongodb进行页面基础的制作，以简单的个人博客为例做过相关的练习</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div id="skills" class="skills">
		<div class="container">
			<h3 class="title">Skills</h3>
			<div class="skills-info">
				<div class="col-md-6 bar-grids">
					<h6>WEB DESIGN  <span> 80% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 80%">
						</div>
					</div>
					<h6> javascript & jq<span> 80% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 70%">
						</div>
					</div>
					<h6>HTML/CSS<span>90% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 90%">
						</div>
					</div>
					<h6>PHOTOSHOP <span> 75% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 75%">
						</div>
					</div>
				</div>
				<div class="col-md-6 bar-grids">
					<h6> CI<span> 85% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 85%">
						</div>
					</div>
					<h6>Angular js & Require js<span> 95% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 95%">
						</div>
					</div>
					<h6>Bootstrap & 响应式设计<span>80% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 80%">
						</div>
					</div>
					<h6>PHP DESIGN<span> 60% </span></h6>
					<div class="progress">
						<div class="progress-bar progress-bar-striped active" style="width: 60%">
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
  	<div></div>
    <div id="blog">
     <div class="wrapper">
       <div id="blog-top">
    	<h2>LAST WORKS</h2>
    	<ul id="blog-list">
    		<li><a href="#" class="active">ALL</a></li>
    	 <?php
    		    foreach ($category as $val) {
    	 ?>
    		    <li><a href="blog/check_blogs?id=<?php echo $val->cate_id; ?>"><?php echo $val->cate_name ;?></a></li>
    		 <?php
    		    }
    		  ?> 
    	</ul>
       </div>
    	<div id="blog-caro">
    		<ul class="blog-works">
    		<?php
                foreach($blog as $aa){
            ?><li>
    			  <a href="#">
    				<img src="<?php echo $aa->img ;?>" alt="">
    				<div class="blog-desc">
    					<span><?php echo $aa->title ;?></span>
    					<h4><?php echo $aa->clicked ;?></h4>
    				</div>
    				<div class="mask">
    					<h3 class="mask-title">PHOTO</h3>
    					<span class="mask-btn">VIEW</span>
    				</div>
    		      </a>
    			</li>
            <?php
                }
    		?>
    		</ul>
    	</div>
      </div>
    </div>
  	<div class="design">
		<div class="col-md-4 design-left">
			<h3>This Webpage Is <span>Designed By<span></h3>
			<img src="img/img11.jpg" alt=""/>
			<span class="my" >My</span>
			<lable>Graphic Designer</lable>
		</div>
		<div class="col-md-8 design-right">
			<h3>Say <span> 'Hello'<span></h3>
			 <form action="message/index" method="post">
				<input type="text" class="message" name='username' value="Your Name" required="">
				<input type="email" class="message" name='useremail' value="Your Email" required="">
				<textarea type="text" class="message" name='usertext' required="">Your Message Here ...</textarea>
				<input type="submit" id='but'value="Submit" >
			</form>
			<p>Stay Connnected With Us...</p>
			<div class="social-icons">
				<ul>
					<li><a href="http://user.qzone.qq.com/1012474735?ptlang=2052"> </a></li>
					<li><a href="http://weibo.com/5274115128/profile?rightmod=1&wvr=6&mod=personnumber&is_all=1" class="drbl"> </a></li>
					<li><a href="https://github.com/wangchunxue" class="twit"> </a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
  </div>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script>
  	$(function(){
  	    $message=$('.message');
  	    $but=$("#but");
  	    $message.on("focus",function(){
  	    	if(this.value == this.defaultValue){
               $(this).val('');
  	    	}
  	    });
  	    $message.on('blur',function(){
  	    	if (this.value == '')
  	    	{
  	    		this.value = this.defaultValue;//defaultValue原声js表单的默认值
  	    	}
  	    });
  	    $("#but").click(function(e){
  		  function stopDefault(e){
  		  	if(e&&e.preventDefault){
  		  		e.preventDefault();
  		  	}else{
  		  		window.event.returnValue=false;
  		  	}
  		  	return false;
  		  }//服务器阻止默认行为
  		  stopDefault(e);//调用函数
  	      $.post("message/index",//ajax的第一参数（后台服务器）
  	      {
  	      	username:$("[name ='username']").val(),//$("[href='#']")，所有 href 属性的值等于 "#" 的元素，即所有name属性的值等于username；
  	      	useremail:$("[name='useremail']").val(),
  	        usertext:$("[name='usertext']").val()
  	      },//第二参数，传递值，是个对象
  	      function(data){//callback，data是服务器的返回值
  	        if(data){
  	        	alert("留言成功");
  	        }else{
  	        	alert('留言失败');
  	        }
  	      });
  	    });
  	    var $a = $(".blog-works a");
  	   	$a.hover(function(){
  	   		$(this).children(".mask").css({
  	   			left: 0,
  	   			background: "rgba(39,159,124,0.6)"
  	   		});
  	   	},function(){
  	   		$(this).children(".mask").css({
  	   			left: "-100%",
  	   			background: "rgba(39,159,124,0.6)"
  	   		});
		});
  		/*onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" */
  	});
  </script>
</body>
</html>