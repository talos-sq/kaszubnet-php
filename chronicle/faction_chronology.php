<?php
session_start();
include '../lib/log_check.php';
?>

<!DOCTYPE html>
<html>

<head>
<title>KASZUBnet</title>
	<meta charset="utf8 COLLATE utf8_polish_ci" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="icon" href="logo.png" type="image/x-icon">

	<link rel="stylesheet" href="../css/style.css">

	<style>
		.box1 {
			float: left;
			width: 100%;
			border: 1px solid;
		}

		p {
			font-size: 20px;
		}

		.back {
			width: 270px;
		}

		.flex-container {
			height: 1620px;
		}
	</style>
</head>

<body>

	<div class="flex-container">
		<div class="clearfix">
			<div class="back">
				<p style="font-size: 16px"><a href="../main_menu.php">KASZUBnet</a>><a href="chronicle.php">Kronika</a>>Chronologia</p>
			</div>
			<div class="box1">
				<p id="header">Chronologia_frakcji</p>
				<div>
					<p>2116</p>
					<p>15.07.2116 - Pierwsze osoby przybywają przed Porą Przybyszów.</p>

					<p>17.07.2116 - Formuje się zalążek frakcji (Nawiązywanie znajomości pomiędzy przyszłymi założycielami Przystani)</p>

					<p>18.07.2116 - Dzięki współpracy i ciężkiej pracy powstaje obozowisko Zrzeszonych Niezrzeszonych. Formują się zalążki frakcji.</p>

					<p>19.07.2116 - Oficjalnie rozpoczyna się Pora Przybyszów roku 2116.</p>

					<p>24.07.2116 - Kończy się pora przybyszów. Talos wraz z por. Strzygoniem wychodzą z inicjatywą utworzenia frakcji. Wszyscy jednogłośnie akceptują pomysł. Talos zostaje dowódcą, ze Strzygoniem jako zastępcą. Frakcja przyjmuję nazwę Przystań.</p>

					Stan członków: Talos, Elwis, Łapa, Vladi, Por. Strzygoń, Mur, Szopen, Szambor, Hafizullah, Szakal, Samuel, Zombi.

					Wiadomo że przyjaciel Vladimir wyruszył przed zakończeniem w stronę Rosji, Katrina zaginęła, a Pielgrzym dołączył do Zakonu po czym udał się do Breslau.

					<p>25-28.07.2116 - Miejscem zjazdu Przystani zostaję obrana następna Pora Przybyszów by każdy mógł załatwić ostatnie sprawy.</p>

					Członkowie Przystani rozchodzą się w swoje strony:

					Mur niezwłocznie wyrusza do Malborka na kilka godzin przed oficjalnym zakończeniem Pory Przybyszów.
					Talos, Strzygoń, Hafi i Elwis ruszają na południe w stronę Postnania.
					Zombie oraz Szakal idą do Tricity.
					Vladi z Łapą do Koltberg (Kołobrzeg).

					<p>30.09.2116 - Por. Strzygoń powraca do swojego domu w OldTown i rozpoczyna przygotowania ku budowie bazy Przystani.</p>

					<p>03.10.2116 - Mur pada ofiarą ataku chemicznego. Następne tygodnie spędzi w Malborskim Zamku.</p>

					<p>2117</p>
					<p>16.02.2117 - Ukończywszy rehabilitację, Mur powoli wraca do swego najemnego trybu życia.</p>

					<p>17.05.2117 - Hafi po zabraniu zapasów herbaty rusza na północ gdzie spotyka Wasyla, Chmiela oraz Elephanta, proponuje dołączenie do Przystani i ruszenie w stronę Tricity.</p>

					<p>31.05.2117 - Hafi, Wasyl, Chmiel i Elephant docierają do placówki Zombiego.</p>

					<p>06.06.2117 - Do Tricity przybywa Vladimir z Shenem.</p>

					<p>11.06.2117 - W jednym z rynsztoków w Tricity zostaje znaleziony Elwis z kawałkiem noża w głowie.</p>

					<p>12.06.2117 - Członkowie Przystani w Tricity przygotowują się do podróży w stronę OldTown.</p>

					<p>28.06.2117 - W stronę OldTown wyrusza z Tricity karawana Przystani. W jej skład wchodzi Zombie, Truskawa, Hafi, Elwis, Vladimir, Shen, Tara, Elephant, Chmiel i Wasyl.</p>

					<p>10.07.2117 - W obrzeżach Mrzeżyna zostaje zauważona liczna grupa raidersów. Karawana z tricity postanawia przedrzeć się przez nadmorską neodżunglę. Zostaję odkryty wrak polskiej korwety “Kaszub”.</p>

					<p>12.07.2117 - Pierwsze osoby przybywają przed Porą Przybyszów.</p>

					<p>18.07.2117 - Oficjalnie rozpoczyna się Pora Przybyszów roku 2117.</p>

					<p>21.07.2117 - Oficjalnie kończy się Pora Przybyszów.</p>

					<p>22-23.07.2117 - Członkowie frakcji rozchodzą się po pustkowiach.</p>

					Wyrusza Ekspedycja na Kaszuba w składzie: Talos, Wasyl, Chmielu, Elephant, Pielgrzym, Szopen, Elwis, Negra.
					Mur i Wieża wracają do Malborka.
					Vladimir, Tara, Jerzy, Dimitri i Shen wyruszają szukać Moskwy
					Zombi wraca do Tricity.
					Truskawa idzie chuj wie gdzie.
					W OldTown pozostają: Chmura, szambor i Modliszka.
					Strzygoń rusza do Postnania.
				</div>

			</div>
		</div>
	</div>
	<div class="footer">
		<h5>KASZUBnet ver.<?php echo $_SESSION['version']; ?></h5>
	</div>
</body>

</html>