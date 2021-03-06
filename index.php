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

				<div class="mainPartHeader">
					<h1 class="mainTitle">Российский центр Розен-метода</h1>
					<button class="mainHButton"><span>Запись на</span><br>индивидуальную сессию</button>
				</div>		

				<div class="maincontentSlider">
					<img src="img/ms1.jpg" alt="">
					<img src="img/ms2.jpg" alt="">
					<img src="img/ms3.jpg" alt="">
				</div>	

				<div class="mainText">
					<p>Добро пожаловать на сайт Российской школы Розен-метода!
					На сайте вы найдете информацию об истории создания метода, условия обучения, статьи, отзывы и список практикующих специалистов.</p>
					<p>«Розен-метод - это способ обращения к чувствам и опыту через тело. Через дыхание и мускулатуру тело показывает наши действительные чувства. При помощи мышечного напряжения тело подавля-ет чувства и опыт, с которыми мы были не в состоянии справиться в момент их возникновения. Таким образом, мы часто забываем все когда-то случившееся. Но, эти чувства и опыт, сохраненные в теле, все еще с нами, и приходится прибегать к очень большим усилиям, чтобы сдерживать их в бессозна-тельном. </p>
					<p>Эти напряжения подобны рюкзакам, наполненным непереработанными чувствами, которые делают людей заблокированными. Когда подобный «рюкзак» одного человека встречается с «рюкзаком» другого, они никогда не смогут по-настоящему сблизиться, пока они их не снимут. Терапевты несут своим пациентам сообщение, суть которого в раскрытии нового измерения жизни. Вместо того, что бы использовать свою энергию на подавление и защиту некоторых «частей» себя, человек может позволить себе проявиться, стать видимым и осознавать богатство своего существования».</p>
					<p class ="last">Мэрион Розен</p>
				</div>	
				<div class="mainTextCover"></div>

				<div class="mainOrderForm">
					<div class="mOFLeft">
						<p class="formBoldText">ПИШИТЕ НАМ!</p>
						<p class="formSlimText">НАШИ СПЕЦИАЛИСТЫ<br> ОПЕРАТИВНО ОТВЕТЯТ НА ВСЕ <br> ВАШИ ВОПРОСЫ</p>
					</div>
					<div class="mOFRight">
						<form action="form.php" method="POST">

							<div class="formLeft">
								<input type="text" name="name" id="name" placeholder="Ваше имя"> <br>
								<input type="email" name="email" id="email" placeholder="E-mail"> <br>
								<input type="text" name="phone" id="phone" placeholder="Телефон">
							</div>
						
							<div class="formRight">
						
								<textarea name="text" id="text" placeholder="Текст сообщения"></textarea><br>
								<button>Отправить</button>
							</div>
							
						</form>
					</div>

				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div><!-- CONTENT MAIN PART -->

	<?php 
				include 'footer.php';
			?>