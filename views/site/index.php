<?php
$this->title = Yii::t('constants', 'Welcome to signvote');
?>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
	<div class="ui container">
		<a class="active item" href="http://www.signvote.cn"><?php echo Yii::t('constants', 'Sign Vote');?></a>
		<div class="right menu">
			<div class="item">
				<a class="ui button"><?php echo Yii::t('constants', 'Log in');?></a>
			</div>
			<div class="item">
				<a class="ui primary button"><?php echo Yii::t('constants', 'Sign Up');?></a>
			</div>
		</div>
	</div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
	<a class="active item" href="http://www.signvote.cn"><?php echo Yii::t('constants', 'Sign Vote');?></a>
	<a class="item"><?php echo Yii::t('constants', 'Log in');?></a> <a
		class="item"><?php echo Yii::t('constants', 'Sign Up');?></a>
</div>


<!-- Page Contents -->
<div class="pusher">
	<div class="ui inverted vertical masthead center aligned segment">

		<div class="ui container">
			<div class="ui large secondary inverted pointing menu">
				<a class="toc item"> <i class="sidebar icon"></i>
				</a> <a class="active item" href="http://www.signvote.cn"><?php echo Yii::t('constants', 'Sign Vote');?></a>
				<div class="right item">
					<a class="ui inverted button"><?php echo Yii::t('constants', 'Log in');?></a>
					<a class="ui inverted button"><?php echo Yii::t('constants', 'Sign Up');?></a>
				</div>
			</div>
		</div>

		<div class="ui text container">
			<h1 class="ui inverted header">支持你所支持的，反对你所反对的，用签名的方式</h1>
			<h2>向世界表达你的看法</h2>
			<div class="ui huge primary button">
				去投票<i class="right arrow icon"></i>
			</div>
		</div>

	</div>

	<div class="ui vertical stripe segment">
		<div class="ui middle aligned stackable grid container">
			<div class="row">
				<div class="eight wide column">
					<h3 class="ui header">寻找伙伴</h3>
					<p>无论你支持抑或是反对，总有和你志同道合的伙伴</p>
					<h3 class="ui header">查找朋友</h3>
					<p>人写字的方式体现出一个人的性格，从签名来找志趣相投的朋友</p>
				</div>
				<div class="six wide right floated column">
					<img src="/images/xf/xianfeng_1365993585_93.jpg" class="ui large bordered rounded image">
				</div>
			</div>
			<div class="row">
				<div class="center aligned column">
					<a class="ui huge primary button">去投票<i class="right arrow icon"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="ui inverted vertical footer segment">
		<div class="ui container">
			<div class="ui stackable inverted divided equal height stackable grid">
				<div class="three wide column">
					<h4 class="ui inverted header">感谢</h4>
					<div class="ui inverted link list">
						<a href="http://www.yiiframework.com/" class="item" target="_blank">Yii Framework</a> 
						<a href="http://semantic-ui.com/" class="item" target="_blank">Semantic UI</a> 
						<a href="#" class="item">And all tech my loved</a> 
					</div>
				</div>
				<div class="three wide column">
					<h4 class="ui inverted header">&copy;王显锋</h4>
					<div class="ui inverted link list">
						<a href="http://www.miitbeian.gov.cn/" class="item" target="_blank">皖ICP备16004269号</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
