<?php 
	require_once('Hotel.php');

	$hotels = [];

	$hotels['345'] = new Hotel(true, 'Premier Hotel Odessa');
	$hotels['345']->setShortDescription('В самом сердце Одессы на тихой улице Еврейской, наискосок от главной синагоги, расположился уютный Premier Geneva Hotel . Он находится на одной из первых одесских улиц, где в прежние времена селились почтенные еврейские фамилии. Местоположение отеля идеально для путешественников – будь-то деловая поездка, продолжительный отдых или же экскурсия в Одессу на выходные. Здесь всё способствует комфортному пребыванию.');
	$hotels['345']->setDescription('В самом сердце Одессы на тихой улице Еврейской, наискосок от главной синагоги, расположился уютный Premier Geneva Hotel . Он находится на одной из первых одесских улиц, где в прежние времена селились почтенные еврейские фамилии. Местоположение отеля идеально для путешественников – будь-то деловая поездка, продолжительный отдых или же экскурсия в Одессу на выходные. Здесь всё способствует комфортному пребыванию. 
		Premier Hotel Geneva расположен в историческом центре города в 5 минутах ходьбы от знаменитой улицы Дерибасовской. Вход в отель спрятан в удивительном дворике, внутри которого находится новая достопримечательность Одессы - Geneva Art Wall. На стене изображены выдающиеся одесские персонажи, среди которых граф Ланжерон, Леонид Утесов и Екатерина II. В этом дворике начинаются экскурсии для знакомства с колоритом и духом Одессы, а гости отеля прямо с балкона могут знакомиться с легендарными героями города.');
	// -----------------------------------------------------------------------------------------------------------------------
	$hotels['134'] = new Hotel(false, 'Mozard');
	$hotels['134']->setShortDescription('Этот гранд-отель находится напротив Одесского театра оперы и балета. К услугам гостей бесплатный Wi-Fi, бесплатная частная парковка и летняя терраса с видом на здание театра. Пользуется спросом! За последние 24 часа забронировано 1 раз Последнее бронирование: 5 часов назад.');
	$hotels['134']->setDescription('Отель Моцарт был построен в 1810 году и является не только визитной карточкой Одессы, но и предметом гордости каждого одессита. Он расположился в историческом центре Одессы, в непосредственной близости к архитектурному и историческому достоянию города - Театру Оперы и Балета, который по праву считается одним из красивейших архитектурных творений Европы и был чудом спасён во время Второй Мировой войны. 
	Здание отеля «Моцарт» не уступает в своей исторической ценности знаменитому театру. В ходе реконструкции по старым фотографиям и планам гостиницы, располагавшейся в этом же здании в начале XIX в., были восстановлены фасад и интерьер помещений. 
	Сегодня отель Моцарт - это отель европейского уровня, отвечающий высоким современным стандартам, но сохранивший при этом аутентичность своей архитектуры. 
	Добро пожаловать в отель Моцарт! Отель Моцарт расположен в самом сердце Одессы на пересечении улиц Ришельевская и Ланжероновская, в 12-ти км от Международного одесского аэропорта и в 2-х км от вокзала. В нескольких минутах ходьбы в непосредственной близости от отеля находятся музеи, исторические достопримечательности, старые улочки, бутики и развлекательные заведения, что способствует полному погружению в жизнь города.  
	В отеле 80 номеров площадью от 18 до 60 кв.м. Интерьер номеров соединяет в себе классический и современный стили. Окна номеров выходят на улицы Ланжероновскую и Ришельевскую, а также в тихий внутренний дворик отеля. Часть номеров имеют  великолепный вид на знаменитый Оперный театр. Номера оснащены всем необходимым для комфортного пребывания наших гостей. 
	В отеле есть ресторан европейской и одесской кухни, в также залы  для проведения различных мероприятий, вместимостью от 20 до 80 человек.  
	Отель Моцарт подойдёт как для бизнес поездки, так и для продолжительного отдыха в Одессе.');
	// -----------------------------------------------------------------------------------------------------------------------
	$hotels['543'] = new Hotel(true, 'Premier Compass Hotel Odessa');
	$hotels['543']->setShortDescription('Уже более четверти века мы теплом и радушием встречаем гостей Одессы. Premier Compass Hotel Odessa (бывший Юность Аккорд Отель) расположен в одном из живописнейших уголков Одессы — на тенистом Французском бульваре. Из окон отеля открывается прекрасная панорама города и морского побережья, а вокруг гостиницы раскинулся Ботанический сад. Неподалеку вдоль морского побережья расположены пляж «Чкаловский» и знаменитая «Аркадия» Premier Compass Hotel Odessa  — идеальное сочетание бизнеса и отдыха. Мы сделаем все, чтобы Вы захотели вернуться сюда снова!');
	$hotels['543']->setDescription('Уже более четверти века мы теплом и радушием встречаем гостей Одессы. Premier Compass Hotel Odessa (бывший Юность Аккорд Отель) расположен в одном из живописнейших уголков Одессы — на тенистом Французском бульваре. Из окон отеля открывается прекрасная панорама города и морского побережья, а вокруг гостиницы раскинулся Ботанический сад. Неподалеку вдоль морского побережья расположены пляж «Чкаловский» и знаменитая «Аркадия» Premier Compass Hotel Odessa  — идеальное сочетание бизнеса и отдыха. Мы сделаем все, чтобы Вы захотели вернуться сюда снова! Premier Hotel Odesa Одесса — город, в котором просто обязан побывать каждый, а удачный выбор отеля на период поездки – залог приятных впечатлений от всего мероприятия. Вы ищете гостиницы в Одессе, радующие безупречным сервисом при весьма умеренных ценах? К Вашим услугам Premier Compass Hotel Odessa (бывший Юность Аккорд Отель), уже более четверти века пользующийся славой наиболее уютной гостиницы, расположенной на тенистом Французском бульваре – в одном из живописнейших уголков Южной Пальмиры. Немногие отели в Одессе могут похвастаться таким великолепным видом из окон на панораму побережья, а Premier Compass Hotel Odessa, вдобавок, еще и окружена Ботаническим садом, дарящим прохладу и необычайную свежесть. В нашем отеле Вы получите полноценный отдых!');
	// -----------------------------------------------------------------------------------------------------------------------
	$hotels['445'] = new Hotel(true, 'Premier Palace Hotel Kharkiv');
	$hotels['445']->setShortDescription('Premier Palace Hotel Kharkiv – первый отель в Харькове класса luxury+, воплощающий идею сдержанной роскоши третьего тысячелетия. Отель спроектирован в характерном для города стиле конструктивизма и органично вписывается в ансамбль центральной площади Харькова – площади Свободы. В гостинице гармонично сочетаются изысканность современной классики с функциональностью и ультрасовременным комфортом, созданным новыми технологиями. Premier Palace Hotel Kharkiv – современное видение концепции гранд-отелей, которые со временем становятся настоящими легендами.');
	$hotels['445']->setDescription('Premier Palace Hotel Kharkiv – первый отель в Харькове класса luxury+, воплощающий идею сдержанной роскоши третьего тысячелетия. Отель спроектирован в характерном для города стиле конструктивизма и органично вписывается в ансамбль центральной площади Харькова – площади Свободы. В гостинице гармонично сочетаются изысканность современной классики с функциональностью и ультрасовременным комфортом, созданным новыми технологиями. Premier Palace Hotel Kharkiv – современное видение концепции гранд-отелей, которые со временем становятся настоящими легендами. Об отеле
	Premier Palace Hotel Kharkiv – гранд-отель третьего тысячелетия, объединивший сдержанную роскошь прошлого и ультрасовременный комфорт настоящего. Premier Palace Hotel Kharkiv расположен в самом сердце города, на огромной центральной площади Харькова. Благодаря своей современной архитектуре он гармонично вписывается в ансамбль площади Свободы и является ее неотъемлемой частью. Великолепие внешней стилистики отеля не уступает внутреннему содержанию: утонченная классика стала идеальным дополнением функциональности и уюту. 
	Сердцем отеля являются рестораны, каждый из четырех уникален по-своему. Аппетитные стейки гриль-ресторана, свежие блюда японской и молекулярной кухни в дополнение к классическому меню, изысканные десерты и венские пирожные - новизна гастрономических идей гарантирована! 
	На 11 этаже создан особый мир гармонии и истинного наслаждения – это SPA-центр отеля. Панорамные окна бассейна открывают потрясающий вид на город с высоты птичьего полета. 
	Все что может предложить современный отель класса люкс – есть в Premier Palace Hotel Kharkiv, и кроме этого, мы предлагаем гостям нечто большее – искреннее славянское гостеприимство в сочетании с лучшими традициями безукоризненного сервиса.
	Если вы приедете с детьми – добро пожаловать в Premier Kids Club. Малышей в отеле ждут подарки, особое детское меню в ресторане, коллекции мультфильмов и другие сюрпризы.');
	// -----------------------------------------------------------------------------------------------------------------------
	$hotels['442'] = new Hotel(true, 'Premier Hotel Dnister');
	$hotels['442']->setShortDescription('Cовременный Premier Hotel Dnister расположен в самом сердце Львова – древнего города, музея под открытым небом. Теплая атмосфера, комфорт во всем, завтрак в лучших традициях национальной кухни и прекрасный вид на Старый Город, внесенный ЮНЕСКО в список мирового наследия, делают отель прекрасным местом для любого события – романтического викенда, семейного отдыха или деловой поездки.');
	$hotels['442']->setDescription('Cовременный Premier Hotel Dnister расположен в самом сердце Львова – древнего города, музея под открытым небом. Теплая атмосфера, комфорт во всем, завтрак в лучших традициях национальной кухни и прекрасный вид на Старый Город, внесенный ЮНЕСКО в список мирового наследия, делают отель прекрасным местом для любого события – романтического викенда, семейного отдыха или деловой поездки. Об отеле
	Premier Hotel Dnister - самый гостеприимный отель Львова с красивейшей панорамой Старого Города, открывающейся из его окон. 
	Удачно расположившись на холме напротив живописного парка, отель находится на расстоянии пешей прогулки к Старому Городу, внесенному в список Всемирного наследия ЮНЕСКО, и главным достопримечательностям Львова. 
	Номера отеля недавно полностью отреставрированы: сейчас это современные интерьеры, комбинирующие модернизм с классикой, продуманная система освещения и климат-контроля, потрясающий вид из окон.
	В Premier Hotel Dnister мы сохраняем теплую атмосферу и гостеприимство Львова - музея под открытым небом!
	Если вы приедете с детьми – добро пожаловать в Premier Kids Club. Маленького гостя в отеле ждет подарок, специальное детское меню в ресторане и другие сюрпризы.');