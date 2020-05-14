<?php
/*
  Template Name: Главная страница
 */
get_header();
?>
<!-- 	<div class="b-contactForm">
		<button type="button" class="b-butn pulse"><i class="fa fa-phone"></i></button>
			<div class="window hidden">
				<form class="decor" action="contact-form.php" method="post">
					<div class="b-close"><i class="fas fa-times"></i></div>  
					<div class="circle"></div>
					<div class="form-inner">
					<h4>Заказать обратный звонок</h4>
						<label for="name">Имя:</label>
						<input type="text"  name="name" placeholder="Введите ваше имя" required />
					
						<label for="email">Email:</label>
						<input type="email" name="email" placeholder="Введите электронный адрес" required />
					
						<label for="tel">Телефон:</label>
						<input type="tel" name="tel" placeholder="Введите номер телефона" required />
					
						<label for="message">Текст сообщения:</label><br>
						<textarea name="message" cols="40" rows="6" required ></textarea>
						<input name="bezspama" type="text" style="display:none" value="" />	
					<button class="submit" type="submit">Отправить сообщение</button>
				</div>
			</form>
    	</div>
  </div>    -->

    <section class="img_learnToSale">
        <img src="<?= get_template_directory_uri() ?>/images/photo1.png" alt="">
    </section>
	
	<section id="aboutUs" class="wrapper special">
		<hr/>
		<div class="inner">
			<header class="align-center">
				<h2>О нашем продукте</h2>
			</header>
			<div class="flex flex-2">
				<article class="b-articleAboutUs__custom">
					<header>
						<h3>CASH_FLOW - Автоматизированная программа, которая торгует на рынке валют вместо вас. Знания в торговле не нужны, за вас всё сделает робот.</h3>
					</header>
					<p>Если софт не будет работать мы вернём деньги.</p>
				</article>
				<article>
					<div class="image fit">
						<img src="<?= get_template_directory_uri() ?>/images/111.jpg" alt="Pic 02" />
					</div>
				</article>
			</div>
		</div>
		<hr/>
	</section>

	<section id="robot" class="wrapper special">
		<div class="inner">
			<div class="flex flex-2">
				<article class="b-articleAboutProgramm__custom">
					<header>
					<h2>Как работает программа?</h2>
					</header>
					<p>
						Полностью автоматизированная	программа (робот) для торговли на бирже. Нет необходимости вникать в дебри трейдинга и ежедневные тех. анализы.
					</p>
					<p>
						Всю эту работу выполняет за вас наш робот. Он разрабатывался группой профессиональных программистов и трейдеров.
					</p>
				</article>
				<article>
					<p>
						Робот использует 3 скальпинговых стратегии для определения точек входа, что увеличивает эффективность торговли. Выставленные ордера закрываются намного быстрее и их значительно больше, что обеспечивает плавный рост депозита при небольших просадках.
					</p>
					<p>
						Мультивалютная торговля используется с индивидуальными настройками по каждой паре, что обеспечивает диверсификацию торгов и уменьшение рисков, это связано с тем, что по каждой паре торгуем значительно уменьшенными лотами по сравнению с одновалютной стратегией, а периоды больших просадок у всех пар одновременно не совпадают. Благодаря использованию трех разных скальпинговых стратегий основных на принципе Мартингейла советник успешно торгует и приносит прибыль.
					</p>
				</article>
			</div>
		</div>
		<hr/>
	</section>

	<section class="wrapper">
		<div class="inner">
		<article>
			<header class="b-hatOfOurClient">
				<h2>Почему клиенты выбирают нас?</h2>
				<h3>Наши преимущества</h3>
			</header>
		</article>
			<div class="flex flex-3 b-contantOurClient">
				<article>
					<header>
						<div class="image fit">
							<img src="<?= get_template_directory_uri() ?>/images/ourClient1.png"/>
						</div>
						<h3>Система обучения</h3>
					</header>
						<p>Простая и понятная система работы с валютным советником</p>
				</article>
				<article>
					<header>
						<div class="image fit">
							<img src="<?= get_template_directory_uri() ?>/images/ourClient2.png"/>
						</div>
						<h3>Круглосуточная поддержка</h3>
					</header>
						<p>Помимо круглосуточной поддержки, мы гарантируем регулярное обновление робота.</p>
				</article>
				<article>
					<header>
						<div class="image fit">
							<img src="<?= get_template_directory_uri() ?>/images/ourClient3.png"/>
						</div>
						<h3>Высокие показатели</h3>
					</header>
						<p>Наши клиенты добиваются показателей от 10 до 40% в месяц!</p>
				</article>
			</div>
		</div>
	</section>

	<section class="b-sliderDeposit">
		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= get_template_directory_uri() ?>/images/statistic1.png" class="d-block w-80" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= get_template_directory_uri() ?>/images/statistic2.png" class="d-block w-80" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= get_template_directory_uri() ?>/images/statistic3.png" class="d-block w-80" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= get_template_directory_uri() ?>/images/statistic4.png" class="d-block w-80" alt="...">
				</div>
				<div class="carousel-item">
					<img src="<?= get_template_directory_uri() ?>/images/statistic5.png" class="d-block w-80" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<hr/>
	</section>

	<section class="b-sliderFeedback">
		<div class="inner">
			<h2>Отзывы наших клиентов</h2>
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="10"></li>
				</ol>
				<div class="carousel-inner b-sliderFeedback__customStyle">
					<div class="carousel-item active b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback1.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Отличный робот, работаю совсем немного, но всё же. Робота установили за 3 дня, <a href="http://t-do.ru/sentrade"><strong>Александр</strong></a> всё объяснил, за 14 дней работы прибыль составила почти 250$ (депозит не большой). <br/>Спасибо Саш, продолжаем работать!
								</h5>
								<p>Тимур Миннулин</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback2.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Хочется оставить отзыв об этих ребятах! Я один из тех людей, кто ко всему новому относится щепетильно. И этот робот не исключение. Когда я случайно увидел результаты одного из партнеров Cash-flow, то они меня сначала даже насторожили. Но мне захотелось во всем разобраться. Когда понял, что это крутая вещь, которая позволяет работать твоим деньгам лучше, чем они лежали бы в банке (даже трёхлитровой), то решил незамедлительно купить робот. <br/> Тех поддержка вызывает особенное уважение. Всегда ответят, подскажут и сделают так, чтобы мне было комфортно пользоваться их детищем)) <br/> Спасибо! Крутые вещи делаете! Желаю дальнейшее развитие вашему проекту!
								</h5>
								<p>Данила Бедулин</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback3.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Большое спасибо парням за качественный продукт, который еще ни разу меня не подводил. Каждый месяц в большой плюс!
								</h5>
								<p>Оксана Коваленко</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback4.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Просто супер! Благодарю ребят из Cash Flow за их детище! Спокоен за свои инвестиции и каждый раз глядя на динамику счета лишь радуюсь!
								</h5>
								<p>Роман Юрченко</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback5.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Спасибо ребятам из «CashFlow» за качественный рабочий продукт, отличный сервис и чувство спокойствия за инвестиции.
								</h5>
								<p>Антон Ходаков</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback6.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Каждый день стабильно 1% в плюс! Советую! Ребята, знают свое дело.
								</h5>
								<p>Александр Рамазанов</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback7.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Очень доволен работой робота и команды Cash Flow. Отличная тех поддержка и подход к клиентам. В декабре 2018 года пополнил депозит на 6300$. На начало февраля баланс составляет 8000$. За 2 месяца 1700$.
								</h5>
								<p>Сергей Максяков</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback8.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Очень классный робот. Не нужно вникать в основы трейдинга, сидеть целый день у компа. Робот работает как часы и приносит мне стабильный заработок каждый месяц. Отдельное спасибо команде за их техническую поддержку, помогают с любым вопросом очень быстро.
								</h5>
								<p>Мария Сюткина</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback9.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									В связи с нехваткой времени не так часто захожу в программу и все работает как надо! Спасибо ребятам что следят за моим счетом, который приносит реальный доход.
								</h5>
								<p>Лия Фаляхова</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback10.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Как и любой человек в начале сомневался, но заехал к ребятам в офис лично ознакомиться c программой. Все четко объяснили, показали. Решил попробовать и не пожалел. За пол года удвоил свои вложенные средства. Спасибо команде Cash_flow!
								</h5>
								<p>Руслан Сабиров</p>
							</div>
					</div>
					<div class="carousel-item b-carouselContent" data-interval="10000000">
							<img src="<?= get_template_directory_uri() ?>/images/feedback11.jpg" class="d-block w-100">
							<div class="carousel-caption b-flexContainer">
								<h5>
									Хочу поделиться своим отзывом! Отличный софт, работает стабильно и делает уверенный прирост депозита. Программа максимально автоматизированна, что очень удобно. Лучшая тех. поддержка, ребята молодцы!
								</h5>
								<p>Динар Хасаншин</p>
							</div>
					</div>
				</div>
				
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<a href="https://t-do.ru/sentrade" target="blank" type="button" class="btn btn-primary b-buttonFeedback">Оставить отзыв</a>
		</div>
		<hr/>
	</section>

	<section class="wrapper">
		<div class="inner">
			<div class="b-contactToUs">
				<article>
					<header>
						<h2 style="font-weight: 600">Свяжитесь</h2>
						<h2>С нами</h2>
						<br/><br/>
						<h2>Ответим на любые вопросы <br/> Оговорим условия <br/> Гарантии</h2>
					</header>
					<div class="b-socialLinks">
						<a class="b-tg__button" href="https://t-do.ru/sentrade" target="blank">Telegram</a>
						<a class="b-wp__button" href="https://wa.me/79771000807" target="blank">WhatsApp</a>
					</div>
				</article>
				<article>
					<img src="<?= get_template_directory_uri() ?>/images/7777.jpg"/>
				</article>
			</div>
		</div>
	</section>

<?php
get_footer();
