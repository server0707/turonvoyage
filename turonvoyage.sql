-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2021 г., 13:16
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `turonvoyage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `text_uz` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `text_uz`, `text_ru`, `text_en`) VALUES
(1, 'Turonvoyage sizni o\'z veb-saytida kutib olishdan mamnun. Bizning kompaniyamiz professionallar, yuqori malakali etakchi mutaxassislar va turizm va sayohat sohasidagi haqiqiy mutaxassislardan iborat. Turizm sohasida ko\'p yillik faoliyati davomida biz sizga qiziqarli va yuqori sifatli turistik mahsulotni taklif qilish uchun noyob bilim va katta tajribani to\\\'pladik.', 'Turonvoyage рад приветствовать Вас на страницах своего сайта. Наша компания – это команда профессионалов, ведущих специалистов самой высокой квалификации и настоящих экспертов в области туризма и путешествий. За много лет работы в туризме мы накопили уникальные знания и огромный опыт для того, чтобы предложить Вам интересный и качественный турпродукт.', 'Turonvoyage is glad to welcome you on the pages of its website. Our company is a team of professionals, leading experts of the highest qualification and real experts in the field of tourism and travel. Over many years of work in tourism, we have accumulated unique knowledge and vast experience in order to offer you an interesting and high-quality tourist product.');

-- --------------------------------------------------------

--
-- Структура таблицы `aloqa`
--

CREATE TABLE `aloqa` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aloqa`
--

INSERT INTO `aloqa` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(14, 'Eric Jones', 'ericjonesonline@outlook.com', '555-555-1212', 'My name’s Eric and I just came across your website - turonvoyage.com - in the search results.\r\n\r\nHere’s what that means to me…\r\n\r\nYour SEO’s working.\r\n\r\nYou’re getting eyeballs – mine at least.\r\n\r\nYour content’s pretty good, wouldn’t change a thing.\r\n\r\nBUT…\r\n\r\nEyeballs don’t pay the bills.\r\n\r\nCUSTOMERS do.\r\n\r\nAnd studies show that 7 out of 10 visitors to a site like turonvoyage.com will drop by, take a gander, and then head for the hills without doing anything else.\r\n\r\nIt’s like they never were even there.\r\n\r\nYou can fix this.\r\n\r\nYou can make it super-simple for them to raise their hand, say, “okay, let’s talk” without requiring them to even pull their cell phone from their pocket… thanks to Talk With Web Visitor.\r\n\r\nTalk With Web Visitor is a software widget that sits on your site, ready and waiting to capture any visitor’s Name, Email address and Phone Number.  It lets you know immediately – so you can talk to that lead immediately… without delay… BEFORE they head for those hills.\r\n  \r\nCLICK HERE http://www.talkwithcustomer.com to try out a Live Demo with Talk With Web Visitor now to see exactly how it works.\r\n\r\nNow it’s also true that when reaching out to hot leads, you MUST act fast – the difference between contacting someone within 5 minutes versus 30 minutes later is huge – like 100 times better!\r\n\r\nThat’s what makes our new SMS Text With Lead feature so powerful… you’ve got their phone number, so now you can start a text message (SMS) conversation with them… so even if they don’t take you up on your offer right away, you continue to text them new offers, new content, and new reasons to do business with you.\r\n\r\nThis could change everything for you and your business.\r\n\r\nCLICK HERE http://www.talkwithcustomer.com to learn more about everything Talk With Web Visitor can do and start turing eyeballs into money.\r\n\r\nEric\r\nPS: Talk With Web Visitor offers a FREE 14 days trial – you could be converting up to 100x more leads immediately!   \r\nIt even includes International Long Distance Calling. \r\nPaying customers are out there waiting. \r\nStarting connecting today by CLICKING HERE http://www.talkwithcustomer.com to try Talk With Web Visitor now.\r\n\r\nIf you\'d like to unsubscribe click here http://talkwithcustomer.com/unsubscribe.aspx?d=turonvoyage.com', '2020-11-22 03:01'),
(15, 'Doctor of science', 'musobekgtd@gmail.com', '999999999', 'hghghgh', '2020-11-27 04:09'),
(16, 'Alfonso Babbidge', 'babbidge.alfonso@gmail.com', '078 1628 2095', 'Good Afternoon.\r\nWe\'ll help stop spending your focus on Spam Emails. We\'d like to provide to you our services, the following is our project:\r\nhttps://bogazicitente.com/antispam393379\r\nRegards,\r\n\r\n\r\n\r\n', '2020-12-16 12:24');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `summ` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name_uz`, `name_ru`, `name_en`, `summ`, `img`) VALUES
(1, 'Barcha ekskursiyalar', 'Все Туры', 'All tours', '930', '1582219963.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `text_uz` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL,
  `addres_uz` varchar(255) NOT NULL,
  `addres_ru` varchar(255) NOT NULL,
  `addres_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id`, `name_uz`, `name_ru`, `name_en`, `img`, `text_uz`, `text_ru`, `text_en`, `addres_uz`, `addres_ru`, `addres_en`) VALUES
(5, 'Shuxratbek', 'Шухратбек', 'Shukhratbek', '1605865495.jpg', 'Salom. Men barchaga TuronVoyage bilan bog\'lanishni maslahat beraman, ular tez va samarali ishlaydi.  Balki O\'zbekistondagi eng yaxshi sayyohlik agentligidir!', 'Всем привет. Всем рекомендую обращаться в TuronVoyage, они работают быстро и качественно. Наверное, лучшее туристическое агентство Узбекистана!', 'Hi there. I recommend everyone to contact TuronVoyage, they work fast and efficiently. Probably the best travel agency in Uzbekistan!', 'Xorazm', 'Хорезм', ' Khorezm'),
(6, 'Sanjar aka', 'Санжар', 'Sanjar', '1605865696.jpg', 'Samarqandda ajoyib ta\'til uchun TuronVoyage mutaxassislarining ajoyib guruhiga rahmat! Aniq tashkilot, tezkor hujjatlar va viza olish.', 'Спасибо замечательной команде специалистов TuronVoyage за прекрасный отдых в Самарканде! Четкая организация, оперативные документы и визы.', 'Thanks to a wonderful team of TuronVoyage specialists for a wonderful holiday in Samarkand! Clear organization, prompt documents and visas.', 'Xorazm', 'Хорезм', ' Khorezm'),
(7, 'Saida', 'Саида', 'Saida', '1605865917.jpg', 'Biz Toshkent,Buxoro,Samarqandni ziyorat qilib keldik Bunda bizga TuronVoyage yordam berdi.TuronVoyageni tanlasangiz adashmaysiz !', 'Побывали в Ташкенте, Бухаре, Самарканде. TuronVoyage нам помог. Если вы выберете TuranVoyage, вы не ошибетесь!\r\n', 'We visited Tashkent, Bukhara, Samarkand. TuronVoyage helped us. If you choose TuranVoyage, you will not go wrong!', 'Xorazm', 'Хорезм', ' Khorezm');

-- --------------------------------------------------------

--
-- Структура таблицы `otel`
--

CREATE TABLE `otel` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otel`
--

INSERT INTO `otel` (`id`, `img`, `cate`) VALUES
(29, '99380719.jpg', '34'),
(30, 'amulet-hotel.jpg', '34'),
(31, 'unnamed (1).jpg', '34'),
(32, '6443954.webp', '33'),
(33, '172085981.jpg', '33'),
(34, 'caption.jpg', '33'),
(35, '176420461.jpg', '29'),
(36, 'International-Hotel-Tashkent-photos-Exterior-International-Hotel-Tashkent.jfif', '29'),
(37, 'unnamed (4).jpg', '29');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `img`, `cate`) VALUES
(2, '5ef4bd0bf34d057e5d1999e6.jfif', 34),
(3, 'FI_Kalyon-Minaret-1078x640.jpg', 34),
(4, 'po-i-kalyan-complex-bukhara-uzbekistan-4-1024x683.jpg', 34),
(5, 'photo2jpg.jpg', 33),
(6, 'unnamed (2).jpg', 33),
(7, 'unnamed.jpg', 33),
(8, '3.jpg', 29),
(9, '-Kr8uDps3R1IADmSr1GTeu9ydub__cTm.jpg', 29),
(10, 'unnamed (3).jpg', 29);

-- --------------------------------------------------------

--
-- Структура таблицы `populyar`
--

CREATE TABLE `populyar` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title_uz` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `text_uz` varchar(255) NOT NULL,
  `text_ru` varchar(255) NOT NULL,
  `text_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `img`, `title_uz`, `title_ru`, `title_en`, `text_uz`, `text_ru`, `text_en`) VALUES
(2, '1583902056.jpg', 'Har qanday byudjet bo\'yicha dunyo bo\'ylab sayohat', 'Тур по всему миру на любой бюджет', 'Tour around the world on any budget', 'Fikrlashni to\'xtating, tanlang va dam olishga uching!', 'Хватит думать, выбирай свой тур и лети отдыхать!', 'Stop thinking, choose your tour and fly to rest!'),
(18, '1583902145.jpg', 'Har qanday byudjet bo\'yicha dunyo bo\'ylab sayohat', 'Тур по всему миру на любой бюджет', 'Tour around the world on any budget', 'Fikrlashni to\'xtating, tanlang va dam olishga uching!', 'Хватит думать, выбирай свой тур и лети отдыхать!', 'Stop thinking, choose your tour and fly to rest!'),
(19, '1583386323.jpg', 'O\'zbekiston bo\'ylab sayohat', 'Путешествие по Узбекистану', 'Journey across Uzbekistan', 'Fikrlashni to\'xtating, tanlang va dam olishga uching!', 'Хватит думать, выбирай свой тур и лети отдыхать!', 'Stop thinking, choose your tour and fly to have a rest!'),
(20, '1583902746.jpg', 'O\'zbekiston bo\'ylab sayohat', 'Путешествие по Узбекистану', 'Journey across Uzbekistan', 'Fikrlashni to\'xtating, tanlang va dam olishga uching!', 'Хватит думать, выбирай свой тур и лети отдыхать!', 'Stop thinking, choose your tour and fly to have a rest!');

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `lavozim_uz` varchar(255) NOT NULL,
  `lavozim_ru` varchar(255) NOT NULL,
  `lavozim_en` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name_uz`, `name_ru`, `name_en`, `lavozim_uz`, `lavozim_ru`, `lavozim_en`, `img`) VALUES
(2, 'QURONBOYEVA LOBAR O\'TKIROVNA', 'КУРОНБОЕВА ЛОБАР УТКИРОВНА', 'QURONBAEVA LOBAR UTKIROVNA', 'TUROPERATOR', 'ТУРОПЕРАТОР', 'TOUR OPERATOR', '1582704170.jpg'),
(5, 'TAJIYEV AKBAR', 'ТАДЖИЕВ АКБАР', 'TADJIEV AKBAR', 'TUROPERATOR', 'ТУРОПЕРАТОР', 'TOUR OPERATOR', '1584000186.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `day_uz` varchar(255) NOT NULL,
  `day_ru` varchar(255) NOT NULL,
  `day_en` varchar(255) NOT NULL,
  `reyting` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cate` int(11) DEFAULT NULL,
  `text_uz` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `travels`
--

INSERT INTO `travels` (`id`, `name_uz`, `name_ru`, `name_en`, `day_uz`, `day_ru`, `day_en`, `reyting`, `star`, `summa`, `count`, `img`, `cate`, `text_uz`, `text_ru`, `text_en`) VALUES
(29, 'Toshkent', 'Ташкент', 'Ташкент', '4 kecha 3 kunduz', ' 4 ночи 3 дня', '4 nights 3 days', 212, 3, 40, 1, '1605864562.jpg', 1, 'Toshkent — Markaziy Osiyoning yirik qadimiy shaharlaridan biri, Oʻzbekiston Respublikasining poytaxti. Oʻrta Osiyoning ulkan sanoat-transport chorraxasi va madaniyat markazlaridan biri.Mamlakatning shimoli-sharqiy qismida,Tyanshan togʻlari etaklarida, 440-480 m tepalikda, Chirchiq daryosi vodiysida joylashgan.Aholisi 2 485 900 kishini tashkil etadi (2020).Shahar Qozogʻistonning chegarasiga yaqin joylashgan. Maydoni 334,8 km².2007-yili Toshkent Islom madaniyati markazi, deb eʼlon qilindi. Bunga sabab sifatida shaharda koʻplab tarixiy islomiy inshootlar va Toshkent Islom Universiteti borligi, shahar madaniy tarixi islomiy anʼanalar bilan bogʻlanganligidir.', 'Ташкент - один из крупнейших древних городов Средней Азии, столица Республики Узбекистан. Это один из крупнейших промышленных и транспортных перекрестков и культурных центров Центральной Азии, расположенный в северо-восточной части страны, у подножия гор Тянь-Шань, 440-480 м, в долине реки Чирчик. Его площадь составляет 334,8 км2. В 2007 году Ташкент был объявлен центром исламской культуры. Это связано с тем, что в городе много исторических исламских зданий и Ташкентский исламский университет, а культурная история города связана с исламскими традициями.', 'Tashkent is one of the largest ancient cities in Central Asia, the capital of the Republic of Uzbekistan. It is one of the largest industrial and transport crossroads and cultural centers of Central Asia. It is located in the northeastern part of the country, at the foot of the Tianshan Mountains, 440-480 m, in the Chirchik River Valley. The area is 334.8 km2. In 2007, Tashkent was declared the center of Islamic culture. This is due to the fact that the city has many historical Islamic buildings and the Tashkent Islamic University, and the city\'s cultural history is linked to Islamic traditions.'),
(33, 'Samarqand', 'Самарканд', 'Samarkand', '4 kecha 3 kunduz', ' 4 ночи 3 дня', '4 nights 3 days', 219, 4, 40, 1, '1605864938.jpg', 1, 'Qadimiy va hamisha navqiron Samarqand ta’rifiga til ojiz. Azim shahar haqida yaxlit tasavvurga ega bo’lish uchun bu erga, albatta, tashrif buyurish lozim. Bejizga bu ko’hna kent borib ko’rish shart bo’lgan dunyodagi 50 ta shahardan biri sifatida e’tirof etilgani yo’q.Samarqandning Registon maydonida ikki yilda bir marta o’tkaziladigan “Sharq taronalari” musiqiy festivaliga tashrif buyurgan xorijlik mehmonlar nafaqat Samarqand shahri, balki viloyatning Pastdarg’om, Payariq, Jomboy, Urgut, Toyloq, Samarqand kabi tumanlariga ham kelib, hududlarning o’ziga xos jihatlari bilan tanishish baxtiga musharraf bo’lmoqdalar.', 'Нет языка, чтобы описать древний и вечно молодой Самарканд. Чтобы получить полное представление о великом городе, вам обязательно стоит побывать здесь. Неслучайно этот древний город признан одним из 50 самых посещаемых городов мира.Иностранные гости, посетившие раз в два года музыкальный фестиваль «Шарк тароналари» на площади Регистан в Самарканде, посетили не только Самарканд, но и Пастдаргом, Паярик, Джамбай, Ургут, Тайлак, Самаркандские районы области. повезло встретиться.', 'There is no language to describe the ancient and eternally young Samarkand. To get a complete picture of the great city, you should definitely visit here. It is no coincidence that this ancient city is recognized as one of the 50 most visited cities in the world.\r\nForeign guests visiting the biennial Sharq Taronalari music festival in Samarkand\'s Registan Square have visited not only the city of Samarkand, but also Pastdargom, Payariq, Jambay, Urgut, Taylak, Samarkand districts of the region. are fortunate enough to meet.'),
(34, 'Buxoro', 'Бухара', 'Bukhara', '4 kecha 3 kunduz', '4 ночи 3 дня', '4 nights 3 days', 250, 4, 20, 1, '1605865169.jpg', 1, 'Buxoro shahrini arxeologik jihatdan faol oʻrganish ishlari 70-80-yillarga toʻgʻri keladi. Oʻzbekiston Fanlar akademiyasi Arxeologiya institutitining maxsus arxeologik jamoasi (A. R. Muhammadjonov, I. Ahrorov, J. Mirzaahmedov, Sh. Odilov) va Oʻzbekiston Madaniyat vazirligining Meʼmoriy yodgorliklarni taʼmirlash va asrash instituti otryadi (Ye. G. Nekrasova boshchiligida) tomonidan olib borilgan tadqiqotlar natijasida hozirgi Buxuro viloyati hududida miloddan avvalgi 4-3-ming yilliklardayoq ovchilik va baliqchilik bilan shugʻullangan, toshdan turli qurol va buyumlar yasash mahoratlari yuksak darajaga yetgan neolit davriga mansub qabilalar yashagani aniqlandi. Milolddan avvalgi 2-ming yillikning 2-yarmida Zarafshon daryosi oʻzaniga yaqin yerlarga, ayniqsa uning qad. tarmoqlari (Vobkentdaryo, Mohondaryo, Gujayli va boshqalar) havzalariga chorvadordehqon qabilalar kelib joylashib, ular botqoq yerlarda dehqonchilik qilish bilan birga yaylovlarda chorvachilik bilan ham mashgʻul boʻlganlar. Arxeologlar Qorakoʻl tumanidagi Zamonbobo degan joydan mazkur qabilalar manzilgohlaridan birining qoldiqlarini topib oʻrgandilar. Shu bois bu madaniyat fanda Zamonbobo madaniyati deb ataldi. Miloddan avvalgi 1-ming yillikda Buxoro vohasida astasekin sunʼiy sugʻorish tarmoqlari va mustahkamlangan qishloqlar vujudga kela boshlaydi.', 'Археологические раскопки Бухары относятся к 70-80 годам. В результате исследований, проведенных специальной археологической группой Института археологии Академии наук Узбекистана (А.Р. Мухаммаджанов, И. Ахроров, Ж. Мирзаахмедов, Ш. Одилов) и Института архитектурных памятников Министерства культуры Узбекистана (руководитель Е. Г. Некрасова) На территории области проживали неолитические племена, которые в IV-III тысячелетиях до нашей эры занимались охотой и рыболовством и обладали высоким уровнем мастерства в изготовлении различного оружия и предметов из камня. Во второй половине 2-го тысячелетия до нашей эры река Зарафшан распространилась на близлежащие районы, особенно на ее притоки. Племена скота селились в бассейнах ветвей (Вобкентдарья, Мохондарья, Гуджайли и др.) И занимались не только водно-болотным хозяйством, но и пастбищным скотоводством. Археологи нашли останки одного из племенных поселений в Замонбобо Каракульского района. Именно поэтому в науке эта культура получила название культуры Замонбобо. В I тысячелетии до н.э. в Бухарском оазисе стали появляться астасекинские сети искусственного орошения и укрепленные поселки.', 'Archaeological excavations of Bukhara date back to the 70s and 80s. As a result of research conducted by a special archeological team of the Institute of Archeology of the Academy of Sciences of Uzbekistan (AR Muhammadjanov, I. Akhrorov, J. Mirzaakhmedov, Sh. Odilov) and the Institute of Architectural Monuments of the Ministry of Culture of Uzbekistan (led by Ye. G. Nekrasova) The Neolithic tribes, which were engaged in hunting and fishing in the 4th-3rd millennia BC and had a high level of skill in making various weapons and objects from stone, lived in the territory of the region. In the second half of the 2nd millennium BC, the Zarafshan River spread to nearby areas, especially its tributaries. Livestock tribes settled in the basins of the branches (Vobkentdarya, Mohondarya, Gujayli, etc.) and were engaged in farming in wetlands as well as in pasture. Archaeologists have found the remains of one of the settlements of these tribes in Zamonbobo, Karakul district. That is why this culture was called Zamonbobo culture in science. In the 1st millennium BC in the Bukhara oasis began to appear astasekin artificial irrigation networks and fortified villages.');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `status`, `created_at`, `updated_at`) VALUES
(28, 'admin', 'BUHlaar6cH5i-GmDsQmZX9gOXqeAUBwi', '$2y$13$xU4P.G4HaPHoVjIlQDiK/.4A4.wHk6yM7t0SZQv103DcXWUenDJDu', NULL, 10, 1582390059, 1582390059),
(29, 'abdulla', '', '$2y$13$mqag4ceNeE6i9i5bSjy8neAZgBO2oXZI6vB1iQrQiqNCn0n/p6ubi', NULL, 10, 1231231, 1231312);

-- --------------------------------------------------------

--
-- Структура таблицы `uzb`
--

CREATE TABLE `uzb` (
  `id` int(11) NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `text_uz` text NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uzb`
--

INSERT INTO `uzb` (`id`, `name_uz`, `name_ru`, `name_en`, `text_uz`, `text_ru`, `text_en`) VALUES
(1, 'Madaniyat', 'Культура', 'Culture', 'O’zbekiston madaniyati Sharqning eng yorqin va o’ziga xos madaniyatidan biridir. Bu-beqiyos xalq ijodiyoti, raqsi va rassomchilik, betakror milliy oshxona va kiyimkechagidir.\r\nO’zbek xalq ijodiyotining san’ati ko’pqirrali tematika va xilma xil janri bilan tafsiflaydi. O’z vazifalari va shakllariga muvofiq ashula va cholg’u asbob kuylari ikki quruhdan iborat: belgilangan vaqt va vaziyatlarda ijro etuvchi va har qanday vaqtda ijro etuvchi. Birinchi guruhga urf-odat, mehnat jarayoni, turli marosimlar, sahnalashtirilgan tomosha namoyishlar va o’yinlarga tegishli bo’lgan ashulalar kiradi.', 'Культура Узбекистана - одна из самых ярких и уникальных на Востоке. Это уникальное народное искусство, танец и живопись, уникальная национальная кухня и уникальный костюм.\r\nИскусство узбекского народного искусства отличается широким тематическим разнообразием и разнообразием жанров. По функциям и формам певческие и инструментальные мелодии делятся на две группы: исполнение в определенное время и в определенных ситуациях и исполнение в любое время. В первую группу входят песни, связанные с традициями, трудовым процессом, различными обрядами, постановками и играми.', 'The culture of Uzbekistan is one of the brightest and most unique in the East. This is a unique folk art, dance and painting, a unique national cuisine and a unique costume.\r\nThe art of Uzbek folk art is distinguished by a wide thematic variety and a variety of genres. According to their functions and forms, singing and instrumental melodies are divided into two groups: performance at a specific time and in specific situations, and performance at any time. The first group includes songs related to traditions, labor process, various rituals, performances and games.');

-- --------------------------------------------------------

--
-- Структура таблицы `uzbimg`
--

CREATE TABLE `uzbimg` (
  `id` int(11) NOT NULL,
  `cate` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uzbimg`
--

INSERT INTO `uzbimg` (`id`, `cate`, `img`) VALUES
(1, 1, '1605861327.jpg'),
(2, 1, '1605861354.jpg'),
(3, 1, '1605861359.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aloqa`
--
ALTER TABLE `aloqa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `otel`
--
ALTER TABLE `otel`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `populyar`
--
ALTER TABLE `populyar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `uzb`
--
ALTER TABLE `uzb`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uzbimg`
--
ALTER TABLE `uzbimg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `aloqa`
--
ALTER TABLE `aloqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `otel`
--
ALTER TABLE `otel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `populyar`
--
ALTER TABLE `populyar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `uzb`
--
ALTER TABLE `uzb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `uzbimg`
--
ALTER TABLE `uzbimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
