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
				<?php include 'events.php';	?>
				<div class="oldNewsWrap">
					<a href="news.php" class="oldNews">Новости и Архив</a>
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
				
				<p class="contactHeaderText">Розен-метод - это способ обращения к чувствам и опыту через тело. Через дыхание и мускулатуру тело показывает наши 
				действительные чувства. При помощи мышечного напряжения тело подавляет чувства и опыт, с которыми мы были не в 
				состоянии справиться в момент их  возникновения. Таким образом, мы часто забываем все когда-то случившееся. Но, эти 
				чувства и опыт, сохраненные в теле, все еще с нами, и приходится </p>
				
				<div class="contactMap">
					<img src="img/contactMap.png" alt="">
				</div>

				<div class="contactAdress">
					<div class="contaxtLeftPart">
						<p>г. Ростов <br> ул. Нижний Волочок, д. 1, оф. 2</p>
					</div>
					<div class="contaxtRightPart">					
						<div class="workTimeWrap">
							<div class="workTime">
								<p>Время работы</p>
								<p>Пн-Пт: 10-19 часов</p>
								<p>Сб-Вс: 10-16 часов</p> 
							</div>
							<div class="contactUsBut">
								<button>Связаться</button>
							</div>
						</div>	
						<div class="workTimeWrap">
							<div class="workTime">
								<p>Время работы</p>
								<p>Пн-Пт: 10-19 часов</p>
								<p>Сб-Вс: 10-16 часов</p> 
							</div>
							<div class="contactUsBut">
								<button>Связаться</button>
							</div>
						</div>
						<div class="workTimeWrap">
							<div class="workTime">
								<p>Время работы</p>
								<p>Пн-Пт: 10-19 часов</p>
								<p>Сб-Вс: 10-16 часов</p> 
							</div>
							<div class="contactUsBut">
								<button>Связаться</button>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="metroMap">
					<img src="img/metromap.jpg" alt="">
				</div>


			</div><!-- CONTENT MAIN PART -->
			<div class="clear"></div>
		</div>
	</div>

	<?php 
				include 'footer.php';
			?>