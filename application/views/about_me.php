<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About Me</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="bg-black text-white font-sans overflow-x-hidden">
	<div class="flex flex-col items-center justify-center px-6 py-10 gap-10 max-w-5xl mx-auto">

		<!-- Profile Card -->
		<div class="flex flex-wrap items-center justify-center gap-8 bg-gray-900/90 rounded-2xl p-8 w-full shadow-lg border border-pink-400/30">
			<div class="flex-1 min-w-[300px] flex justify-center">
				<img src="<?php echo base_url('application/assets/images/bodypiccc1.png'); ?>" alt="Your Image" class="max-w-xs w-full rounded-2xl object-cover">
			</div>
			<div class="flex-1 min-w-[300px] text-center md:text-left">
				<h1 class="text-pink-500 text-3xl font-bold mb-2 drop-shadow">About Me</h1>
				<p>I am <strong>Jenah Rivero</strong>, a passionate <strong>Web Developer & Digital Creator</strong> with a Bachelor's degree in Information Systems from City College of Calapan. I specialize in building custom websites and functional web systems using <strong>PHP, CodeIgniter, Laravel</strong>, and <strong>MySQL</strong>. With a keen eye for design and functionality, I aim to deliver clean, responsive, and user-friendly digital solutions.</p>
			</div>
		</div>

		<!-- Skills & Expertise -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30 hover:shadow-pink-500/40 transition">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Skills & Expertise</h2>
			<div class="flex flex-wrap justify-center gap-4">
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fab fa-php text-pink-400"></i> PHP</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fab fa-laravel text-pink-400"></i> Laravel</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fas fa-code text-pink-400"></i> CodeIgniter</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fab fa-java text-pink-400"></i> Java</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fab fa-wordpress text-pink-400"></i> WordPress</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fab fa-wix text-pink-400"></i> Wix</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fas fa-paint-brush text-pink-400"></i> Digital Design</div>
				<div class="bg-gray-700/80 p-3 rounded-xl flex items-center gap-2 shadow-inner"><i class="fas fa-tasks text-pink-400"></i> Project Management</div>
			</div>
		</div>

		<!-- Experience & Achievements -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Experience & Achievements</h2>
			<div class="bg-gray-700/80 p-4 rounded-xl mb-3 flex items-start gap-3 shadow-inner">
				<i class="fas fa-laptop-code text-pink-400 mt-1"></i>
				<p><strong>Intern at Learn at Fligno</strong> — Contributed to the development of a journal website and attendance system for interns. Also assisted with administrative tasks such as creating social media posts, newsletters, and banners. Enhanced and refined my capstone project during the internship.</p>
			</div>
			<div class="bg-gray-700/80 p-4 rounded-xl flex items-start gap-3 shadow-inner">
				<i class="fas fa-award text-pink-400 mt-1"></i>
				<p><strong>Capstone Project</strong> — Built a web-based student attendance and fines monitoring system with activity management features, designed for school use.</p>
			</div>
		</div>

		<!-- Notable Projects -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Notable Projects</h2>
			<div class="bg-gray-700/80 p-4 rounded-xl flex flex-col shadow-inner">
				<div class="flex items-center gap-2 mb-2">
					<i class="fas fa-folder-open text-pink-400"></i>
					<strong>Attendance & Fines Monitoring System</strong>
				</div>
				<p class="mb-1">A capstone project developed for school use, designed to manage student attendance, compute fines, and track activities via an admin dashboard.</p>
				<p class="text-sm italic">🔧 Built with: PHP, CodeIgniter, MySQL</p>
			</div>
		</div>

		<!-- Contact Information -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Contact Information</h2>
			<div class="bg-gray-700/80 p-4 rounded-xl flex items-center gap-2 shadow-inner mb-2">
				<i class="fas fa-envelope text-pink-400"></i> <strong>Email:</strong> jenahmarie28@gmail.com
			</div>
			<div class="bg-gray-700/80 p-4 rounded-xl flex items-center gap-2 shadow-inner mb-2">
				<i class="fas fa-phone text-pink-400"></i> <strong>Phone:</strong> +63 906 620 5123
			</div>
			<div class="bg-gray-700/80 p-4 rounded-xl flex items-center gap-2 shadow-inner">
				<i class="fas fa-map-marker-alt text-pink-400"></i> <strong>Location:</strong> Oriental Mindoro, Philippines
			</div>
		</div>

		<!-- Connect with Me -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Connect with Me</h2>
			<div class="flex justify-center gap-6 flex-wrap">
				<a href="https://github.com/jenahmarie" target="_blank" class="text-pink-400 text-2xl hover:scale-110 hover:text-pink-500 transition"><i class="fab fa-github"></i></a>
				<a href="https://www.linkedin.com/in/jenahmarie/" target="_blank" class="text-pink-400 text-2xl hover:scale-110 hover:text-pink-500 transition"><i class="fab fa-linkedin"></i></a>
				<a href="https://www.facebook.com/jenVdesk/" target="_blank" class="text-pink-400 text-2xl hover:scale-110 hover:text-pink-500 transition"><i class="fab fa-facebook"></i></a>
			</div>
		</div>

		<!-- Fun Facts -->
		<div class="w-full bg-gray-900/90 rounded-2xl p-6 shadow-lg border border-pink-400/30">
			<h2 class="text-pink-500 text-2xl text-center font-semibold mb-4 drop-shadow">Fun Facts</h2>
			<div class="bg-gray-700/80 p-4 rounded-xl shadow-inner mb-2">🎨 I enjoy designing social media and web graphics using Canva.</div>
			<div class="bg-gray-700/80 p-4 rounded-xl shadow-inner mb-2">💡 I’m passionate about backend development — solving logic problems is fun for me!</div>
			<div class="bg-gray-700/80 p-4 rounded-xl shadow-inner">🛠 I work with two PHP frameworks: Laravel and CodeIgniter.</div>
		</div>

	</div>
</body>

</html>