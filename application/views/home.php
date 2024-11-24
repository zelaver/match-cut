<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Match-Cut Barber</title>

	<!-- FONTS  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@700;800;900&family=Work+Sans:ital,wght@0,500;1,500&display=swap" rel="stylesheet">

	<!-- STYLES -->
	<link rel='stylesheet' href='<?= base_url() ?>assets/css/home.css'>
	<!-- <link rel='stylesheet' href='<?= base_url() ?>assets/css/home.css?v=1.0'> -->
</head>

<body>

	<div class="header">
		<div class="header-text">
			<h1>THE ULTIMATE CONVENIENCE</h1>
			<H1>FOR BUSY PEOPLE</H1>
			<p>Experience the Convenience of In-Home Barber Services</p>
		</div>
		<div class="header-button">
			<button>BOOK AN APPOINTMENT</button>
			<button>BROWSE SERVICES</button>
		</div>
		<div class="info-box">
			<div class="address">
				<img src="<?= base_url() ?>/assets/icons/address.png" alt="">
				<h3>ADDRESS</h3>
				<div class="divider"></div>
				<p>Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat</p>
			</div>
			<div class="phone">
				<img src="<?= base_url() ?>/assets/icons/phone.png" alt="">
				<h3>PHONE</h3>
				<div class="divider"></div>
				<p>+62(123)-456-7890</p>
				<p>+62(123)-456-7890</p>
			</div>
			<div class="hours">
				<img src="<?= base_url() ?>/assets/icons/hours.png" alt="">
				<h3>HOURS</h3>
				<div class="divider"></div>
				<p>Mon - Sat: 9AM - 8PM</p>
				<p>Sun: 9AM - 6PM</p>
			</div>
		</div>
	</div>
	<div class="services">
		<div class="personal-barber">
			<div class="personal-barber-text">
				<h2>YOUR PERSONAL BARBER SERVICE AT YOUR HOME</h2>
				<p>Experience ultimate ease and comfort with our professional haircut services brought right to the convenience of your home. Say goodbye to long waits and the hassle of traveling to a salon. With us, you can enjoy the luxury of personalized care in your own space, tailored to your preferences. No lines, no stress—just top-quality results that leave you looking and feeling your best.</p>
				<div class="satisfaction-experience">
					<div class="customer-satisfaction">
						<h3>99</h3>
						<h4>CUSTOMER</h4>
						<h4>SATISFACTION</h4>
					</div>
					<div class="years-of-experience">
						<h3>10</h3>
						<h4>YEARS OF</h4>
						<h4>EXPERIENCE</h4>
					</div>
				</div>
			</div>
			<!-- <div class="personal-barber-image"></div> -->
			<img src="<?= base_url() ?>/assets/img/personal-sigma.png" alt="">

		</div>
		<div class="catalog">
			<h2>BROWSE OUR SERVICES</h2>
			<p>Discover our premium barber services designed to keep you looking sharp and stylish. From classic haircuts to modern grooming techniques, we offer tailored solutions to suit your unique style. Let us help you achieve the perfect look with precision and care.</p>
			<div class="catalog-list">
				<div class="adult-haircut">
					<img src="<?= base_url() ?>/assets/icons/adult-haircut.png" alt="Adult Haircut">
					<div class="catalog-list-text">
						<h3>ADULT HAIRCUT</h3>
						<p>Experience a stylish and precise haircut designed to complement your personal style and enhance your professional appearance.</p>
						<h3>Rp30k</h3>
					</div>
				</div>
				<div class="kids-haircut">
					<img src="<?= base_url() ?>/assets/icons/kids-haircut.png" alt="Kids Haircut">
					<div class="catalog-list-text">
						<h3>KIDS HAIRCUT</h3>
						<p>Fun and friendly haircut services for children, ensuring a comfortable experience while keeping their look fresh and trendy.</p>
						<h3>Rp15k</h3>
					</div>
				</div>
				<div class="beard-trim">
					<img src="<?= base_url() ?>/assets/icons/beard-trim.png" alt="Beard Trim">
					<div class="catalog-list-text">
						<h3>BEARD TRIM</h3>
						<p>Maintain a sharp and well-groomed beard with our expert trimming services, tailored to suit your facial features.</p>
						<h3>Rp20k</h3>
					</div>
				</div>
				<div class="neck-shave">
					<img src="<?= base_url() ?>/assets/icons/neck-shave.png" alt="Neck Shave">
					<div class="catalog-list-text">
						<h3>NECK SHAVE</h3>
						<p>Achieve a clean and smooth neckline with our precise shaving techniques, enhancing the overall look of your hairstyle.</p>
						<h3>Rp14k</h3>
					</div>
				</div>
				<div class="scalp-moisturizing">
					<img src="<?= base_url() ?>/assets/icons/scalp-moisturizing.png" alt="Scalp Moisturizing">
					<div class="catalog-list-text">
						<h3>SCALP MOISTURIZING</h3>
						<p>Rejuvenate your scalp with our moisturizing treatment, promoting healthy hair growth and relieving dryness.</p>
						<h3>Rp40k</h3>
					</div>
				</div>
				<div class="beard-grooming">
					<img src="<?= base_url() ?>/assets/icons/beard-grooming.png" alt="Beard Grooming">
					<div class="catalog-list-text">
						<h3>BEARD GROOMING</h3>
						<p>Comprehensive beard grooming services that include shaping, conditioning, and styling for a polished and refined appearance.</p>
						<h3>Rp50k</h3>
					</div>
				</div>
			</div>
			<button>BOOK AN APPOINTMENT</button>

		</div>
		<div class="match-cut">
			<h2>EXPERIENCE THE FUTURE OF PERSONALIZED STYLE WITH OUR AI-POWERED FACE RECOGNITION SERVICE</h2>
			<button>TRY NOW</button>
		</div>
	</div>
	<div class="why-us">
		<h2>WHY CHOOSE US</h2>
		<p>Our services combine precision, expertise, and care to deliver outstanding results tailored to your needs. With a focus on quality and satisfaction, we ensure a seamless experience that prioritizes your preferences and creates a lasting impression you can trust.</p>
		<div class="why">
			<div class="licensed">
				<img src="<?= base_url() ?>/assets/icons/licensed.png" alt="">
				<h3>LICENSED</h3>
				<div class="divider"></div>
				<p>Our team of licensed and insured barbers follow strict cleanliness and sanitation guidelines for a safe and comfortable experience. </p>
			</div>
			<div class="masters">
				<img src="<?= base_url() ?>/assets/icons/masters.png" alt="">
				<h3>MASTERS</h3>
				<div class="divider"></div>
				<p>Our barbers are passionate about their craft and aim to provide high-quality haircuts for every client. </p>
			</div>
			<div class="trusted">
				<img src="<?= base_url() ?>/assets/icons/trusted.png" alt="">
				<h3>TRUSTED</h3>
				<div class="divider"></div>
				<p>We have a strong online reputation with a 5-star rating from over 100 thousand satisfied clients.</p>
			</div>
		</div>
		<div class="us">
			<div class="google">
				<img src="<?= base_url() ?>/assets/icons/google.png" alt="">
				<h3>GOOGLE</h3>
				<h2>4.9</h2>
				<img class="stars" src="<?= base_url() ?>/assets/icons/stars.png" alt="">
				<p>196 reviews</p>
			</div>
			<div class="review">
				<img src="<?= base_url() ?>/assets/icons/review.png" alt="">
				<img class="stars" src="<?= base_url() ?>/assets/icons/stars.png" alt="">
				<h3>THE BEST BARBER SERVICES</h3>
				<p>And so, into the depths of meaning we venture, embracing the harmony of thoughts and actions, like the rhythm of waves upon the ocean's shore. Each step reveals a story, weaving connections between simplicity and profoundness, crafting an intricate dance of clarity and understanding.</p>
				<h3>KAI CENAT</h3>
			</div>
			<div class="tripadvisor">
				<img src="<?= base_url() ?>/assets/icons/tripadvisor.png" alt="">
				<h3>TRIPADVISOR</h3>
				<h2>5.0</h2>
				<img class="stars" src="<?= base_url() ?>/assets/icons/stars.png" alt="">
				<p>196 reviews</p>

			</div>
		</div>
	</div>
</body>

</html>