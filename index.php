<?php
	session_start();
	$_SESSION['sent'] ??= '';
	if($_SESSION['sent']) {
		echo "<script type='text/javascript'>alert('Wiadomość wysłana!');</script>";
		unset($_SESSION['sent']);
	}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title></title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&family=Josefin+Sans:wght@400;700&family=Kufam:wght@400;700&family=Montserrat+Alternates:wght@400;700&family=Montserrat:wght@400;700&family=Quicksand:wght@400;700&family=Raleway:wght@400;700&family=Source+Code+Pro:wght@400;700&family=Syne:wght@400;700&display=swap" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body>
	<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light">
		<a class="navbar-brand" href="#">Paweł Graboś - Portfolio</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#navbar">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#projects">Projekty</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#aboutMe">O mnie</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto xx bigFontSize">
				<li class="nav-item mx-2">
					<a class="nav-link p-0" href="https://www.facebook.com/people/Pawe%C5%82-Grabo%C5%9B/100010269695898" target="_blank"><i class="icon-facebook"></i></a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link p-0" href="https://github.com/pawelg38" target="_blank"><i class="icon-github-circled"></i></a>
				</li>
				<li class="nav-item mx-2">
					<a class="nav-link p-0" href="#footer"><i class="icon-mail-alt"></i></a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row bg-img1">
			<div class="col bg-gradient1 animate__animated wow animate__fadeIn animate__slow">
				<div class="row">
					<div class="col h700 d-flex flex-column text-center justify-content-center justify-content-sm-center align-items-end">
						<h1 class="cytat p-3"><span class="bigFontSize">“</span><span class="purpleC">Talk is cheap.</span> Show me the code.<span class="bigFontSize">”</span></h1>
						<h1 class="white-fog p-3">― Linus Torvalds</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-12 pt-4 text-center">
				<h1 class="my-5">Witaj na moim Portfolio</h1>
				<p>Możesz się tutaj dowiedzieć kilku rzeczy o mnie, zobaczyć mój warsztat, a być może nawet podjąć decyzję o przyjęciu mojej aplikacji do Twojej firmy :). Zapraszam!</p>
				<p>Zgodnie z hasłem umieszczonym na pierwszym widoku strony, nie będę Cię zanudzał - Szanuję Twój czas! Przejdź od razu do sekcji, która Cię najbardziej interesuje :).</p>
			</div>
			<div class="col-12 pt-4 text-center">
				<h1 class="my-5">Droga samorozwoju</h1>
				<h6>Klikając w ikonkę możesz sprawdzić na jakim etapie jestem oraz do jakich dążę.</h6>
			</div>
			<div id="progressWay" class="col-12 mt-4 animate__animated wow animate__fadeInUp" data-wow-offset="100">
				<ul class="list-group list-group-horizontal justify-content-center text-center">
					<li>
						<button type="button" class="button stepBtn" data-toggle="popover" data-placement="bottom" title="Pasja" data-content="Tak, od tego wszystko się zaczęło :). Gry są nieodłącznym elementem mojego dzieciństwa. Dzięki temu, że tyle czasu spędzałem przy komputerze, narodziło się we mnie marzenie - zostać w przyszłości programistą.">
							<i class="icon-gamepad text-primary"></i>
						</button>
					</li>
					<li class="listStepperItem"></li>
					<li>
						<button type="button" class="button stepBtn" data-toggle="popover" data-placement="bottom" title="Wykształcenie" data-html="true" data-content="Kolejny etap. Jako, że bycie dobrym w grach nie czyni nikogo dobrym z informatyki, musiałem coś z tym zrobić. Najpierw profil informatyczny w liceum, a następnie dyplom inżyniera. Na szczęście oba mam już za sobą! :D">
							<i class="icon-graduation-cap text-primary"></i>
						</button>
					</li>
					<li class="listStepperItem border-dark"></li>
					<li>
						<button type="button" class="button stepBtn" data-toggle="popover" data-placement="bottom" title="Junior Frontend Dev" data-content="Studia to tylko papierek. Prawdziwych umiejętności muszę się dopiero nauczyć! Na tę chwilę myślę, że jeszcze wiele przede mną.">
							<i class="icon-baby text-muted"></i>
						</button>
					</li>
					<li class="listStepperItem border-dark"></li>
					<li>
						<button type="button" class="button stepBtn" data-toggle="popover" data-placement="bottom" title="Stanowisko Frontend Developer" data-content="Praca Frontend Developer'a - ehh co tu dużo mówić :D. Nie wiem jak to jest, ale bardzo chciałbym się przekonać.">
							<i class="icon-briefcase text-muted"></i>
						</button>
					</li>
					<li class="listStepperItem border-dark"></li>
					<li>
						<button type="button" class="button stepBtn" data-toggle="popover" data-placement="bottom" title="Senior Frontend Developer" data-content="Nie wiem czy nie postawiłem poprzeczki zbyt wosoko. Przecież może okazać się, że się do tego po prostu nie nadaję, ale uważam, że w życiu trzeba mieć cel. Poza tym mówią, że jeśli ktoś naprawdę czegoś chce to wszystko jest możliwe :)">
							<i class="icon-man text-muted"></i>
						</button>
					</li>
				</ul>
			</div>
		</div>
		<div id="projects" class="row mt-5">
			<div class="col-12 text-center">
				<h1 class="wow fadeInRight py-5">Warsztat</h1>
			</div>
			<div class="col-12 animate__animated wow animate__fadeInUp" data-wow-offset="100">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-4 col-xl-3 mx-auto mb-4">
						<div class="card card-theme-1">
							<div class="card-img-container">
								<div class="card-img-div">
								</div>
								<!-- <img src="img/angular-cms-preview.png" class="card-img-top" alt=""> -->
							</div>
							<div class="card-body">
								<div class="d-flex align-items-center p-0">
									<a href="https://angularcms-470bb.firebaseapp.com" target="_blank"><h5 class="card-title">AngularCMS</h5></a>
									<div class="col-auto p-0 ml-auto d-flex justify-content-center align-items-center">
										<a href="https://github.com/pawelg38/angular-cms" target="_blank"><span class="footerIconSize-2"><i class="icon-github-circled"></i></span></a>
									</div>
								</div>
								<p class="card-text">Wciąż rozwijany projekt - finalnie ma na celu symulować usługę CMS, pozwalającą na administrację portalem.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="aboutMe" class="row">
			<div class="col-12 text-center sectionHeader2">
				<h1>Kim jestem?</h1>
			</div>
			<div class="col-10 mx-auto pt-5 p-4 b2 text-center">
				<p class="mx-lg-5 px-lg-5 animate__animated wow animate__fadeInUp">Mam na imię Paweł. Postawiłem sobie cel w życiu i zamierzam go osiągnąć - chcę zostać Frontend Developerem. W 2020 roku ukończyłem studia inżynierskie na Uniwersytecie Mikołaja Kopernika w Toruniu. Teraz jestem w trakcie zdobywania wiedzy oraz powiekszania spectrum moich umiejętności, które mam nadzieję pomogą mi zdobyć wymarzoną pracę :). Informatyka, a w szczególności programowanie to moja pasja. To coś co chcę w życiu robić. Zawszę będę pamietał dzień, w którym dostałem pierwszy komputer - byłem wtedy jeszcze dzieckiem i nie wiedziałem jak wielki wpływ będzie miało to na całe moje życie. Do moich pobocznych zainteresowań należą również elektronika, motoryzacja oraz gry komputerowe. Jeśli masz do mnie jakieś pytania śmiało skorzystaj z formularza kontaktowego ponizej :)</p>
			</div>
		</div>
		<footer>
			<div class="row mt-5 bg-bef5ff">
				<div class="col-12 col-lg-6 p-0 blackFog c-00d4ff">
					<div class="row mx-0">
						<div class="col-12 p-3 pr-lg-0">
							<h3 class="m-0 text-center text-lg-left">Jeśli masz pytania, napisz do mnie! <i class="icon-mail-alt animate__animated wow animate__swing animate__delay-2s"></i></h3>
							<div class="col-12 px-0">
								<form class="mt-4" method="post" action="contact.php">
									<div class="form-group row no-gutters my-0">
										<div class="col-12 mx-sm-auto col-md-10 col-lg mx-lg-0">
											<div class="row no-gutters">
												<div class="col-12 col-sm col-xl mr-3">
													<input type="text" class="form-control <?= $_SESSION['nameError'] ? 'is-invalid' : '';?>" id="exampleFormControlInput1" name="fullname" placeholder="Imię i nazwisko" value="<?= $_SESSION['name'] ??= ''; unset($_SESSION['name']);?>">
													<div class="invalid-feedback">
														<?= $_SESSION['nameError'] ??= ''; unset($_SESSION['nameError']); ?>
													</div>
												</div>
												<div class="col-12 my-3 col-sm my-sm-0 col-xl">
													<input type="email" class="form-control <?= $_SESSION['emailError'] ? 'is-invalid' : '';?>" id="inputEmail1" name="email" placeholder="Adres e-mail" value="<?= $_SESSION['email'] ??= ''; unset($_SESSION['email']);?>">
													<div class="invalid-feedback">
														<?= $_SESSION['emailError'] ??= ''; unset($_SESSION['emailError']); ?>
													</div>
												</div>
												<div class="col-12 mt-sm-3 px-0">
													<textarea class="form-control <?= $_SESSION['messageError'] ? 'is-invalid' : '';?>" id="exampleFormControlTextarea1" name="message" rows="4" placeholder="Treść"><?= $_SESSION['message'] ??= ''; unset($_SESSION['message']); ?></textarea>
													<div class="invalid-feedback">
														<?= $_SESSION['messageError'] ??= ''; unset($_SESSION['messageError']); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 mt-3 col-lg-2 my-lg-0 mx-lg-2 col-xl-2 d-flex justify-content-center align-items-end">
											<input class="submitButton2 px-2 py-1" type="submit" name="submit" value="Wyślij">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="footer" class="col-12 col-lg-6 footer d-flex bg-ffffff footerTest">
					<div class="row d-flex flex-column flex-fill">
						<div class="col text-center py-4 c-00d4ff d-flex justify-content-center align-items-center"><h3>Znajdziesz mnie również tutaj</h3></div>
						<div class="col d-flex justify-content-center align-items-center">
							<div class="row c-39494c w-100 mx-0 d-flex justify-content-around">
								<div class="col-3 col-lg-3 d-flex justify-content-center align-items-center">
									<a href="https://www.facebook.com/profile.php?id=100010269695898" target="_blank">
										<span class="footerIconSize"><i class="icon-facebook"></i></span>
									</a>
								</div>
								<div class="col-3 col-lg-3 d-flex justify-content-center align-items-center">
									<a href="https://github.com/pawelg38/portfolio-v1" target="_blank">
										<span class="footerIconSize"><i class="icon-github-circled"></i></span>
									</a>
								</div>
								<div class="col-3 col-lg-3 d-flex justify-content-center align-items-center">
									<a href="https://www.linkedin.com/in/pawelgrabos96/" target="_blank">
										<span class="footerIconSize"><i class="icon-linkedin"></i></span>
									</a>
								</div>
								<div class="col-3 col-lg-3 d-flex justify-content-center align-items-center">
									<a href="../download/Paweł_Graboś_CV.pdf" download>
										<span class="footerIconSize"><i class="icon-download"></i></span>
									</a>
								</div>
							</div>
						</div>
						<div class="col py-3 d-flex justify-content-end align-items-end ccc text-right">
							<span class="fontBold">&copy;2020&nbsp;</span>Paweł Graboś
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(function () {
			$('[data-toggle="popover"]').popover()
			$('.activePopover').popover('show')
		})
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
	<script>
		new WOW().init();
	</script>
</body>
</html>