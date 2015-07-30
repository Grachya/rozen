<?php 
	include 'header.php';
?>

	<div class="mainContent">
		<div class="maincontentWrap">
			<div class="contetntSideBat">
				<ul class="leftSideBar">
					<li class="liItem" id="li1"><a href="#">О Мэрион Розен</a></li>
					<li class="liItem" id="li2"><a href="#">О методе</a>
						<ul class="aboutMethod">
							<li><a href="#">История метода</a></li>
							<li><a href="#">Отзывы</a></li>
							<li><a href="#">Мерион Розен о розен методе</a></li>
						</ul>
					</li>
					<li class="liItem" id="li3"><a href="#">Российский центр Розен-метода</a></li>
					<li class="liItem" id="li4"><a href="#">Чем вы интересуетесь?</a></li>
					<li class="liItem" id="li5"><a href="#">Розен институт и международные сообщества</a></li>
				</ul>
				<div id="datepicker"></div>
				<div class="oldNewsWrap">
					<a href="#" class="oldNews">Новости и Архив</a>
				</div>
				<div class="sidebarSlider">
					<div class="slide">
						<img src="img/sbi1.jpg" alt="">
						<p>Обучающие события на ноябрь-декабрь 2014 г.</p>
					</div>
					<div class="slide">
						<img src="img/sbi2.jpg" alt="">
						<p>Обучающие события на ноябрь-декабрь 2014 г.</p>
					</div>
					<div class="slide">
						<img src="img/sbi3.jpg" alt="">
						<p>Обучающие события на ноябрь-декабрь 2014 г.</p>
					</div>					
				</div>				
			</div>

			<div class="contentMainPart">
				
				<h1>Обратная связь</h1>
			
				<div class="formBlockWrap">

					<p class="formTitle">Задать вопрос</p>
					<p class="afterFormTitle">Розен-метод - это способ обращения к чувствам и опыту через тело. Через дыхание и мускулатуру тело показывает наши 
					действительные чувства. При помощи мышечного напряжения тело подавляет чувства и опыт, с которыми мы были не в 
					состоянии справиться в момент их  возникновения. Таким образом, мы часто забываем все когда-то случившееся. Но, эти 
					чувства и опыт, сохраненные в теле, все еще с нами, и приходится </p>

					<div class="formBlock">
						<div class="formLogo"><img src="img/logo2.png" alt=""></div>
						<form action="sendform.php" method="get" id="mainForm">
							<label for="name">Представьтесь, пожалуйста</label> <br>
							<input type="text" name="name" id="name"><br>
							<label for="contact">
								Каким образом с Вами связаться?*
								<div class="tel">
									<input type="checkbox" id="phone">
									<label for="phone">По телефону</label>
									<input type="text" name="phoneinp" id="phoneinp">
									<br>
									<input type="checkbox" id="email">
									<label for="email">По эл. почте</label>
									<input type="text" name="emailinp" id="emailinp">
								</div>
							</label>
							<br>
							<label for="text">Ваш комментарий</label>
							<textarea name="" id="text"></textarea>
							<!-- <input type="text" name="text" id="text"> -->
							<p>Поля отмеченные * обязательны для заполнения.</p>
							<button>Отправить <img id="sendButImg" src="img/sendBut.png" alt=""></button>								
						</form>
					</div>
				</div>

			</div><!-- CONTENT MAIN PART -->
			<div class="clear"></div>
		</div>
	</div>
			<?php 
				include 'footet.php';
			?>
