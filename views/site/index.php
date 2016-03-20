<?php

$this->title = Yii::t('constants', 'Welcome to signvote')
?>
<div id="header"><?php Yii::t('constants', 'Welcome to signvote')?></div>

<div id="fullpage">
	<div class="section " id="section0">
		<div class="intro">
			<h1>Fixed elements</h1>
			<p>Create your own headers and footers</p>
		</div>
	</div>
	<div class="section" id="section1">
	    <div class="slide" id="slide1">
			<div class="intro">
				<h1>How to do it</h1>
				<p>
					You will need to place your header and footer outside the plugin's wrapper. 
					This way it won't move on scrolling. Take a look at the source code of this page.
				</p>
			</div>
		</div>

	    <div class="slide" id="slide2">
			<h1>Slide 2</h1>
			<img src="imgs/iphone-blue.png" alt="iphone" id="iphone-two" />
		</div>

	</div>
	<div class="section" id="section2">
		<div class="intro">
			<h1>Enjoy it</h1>
		</div>
	</div>
</div>

<div id="footer">Footer</div>