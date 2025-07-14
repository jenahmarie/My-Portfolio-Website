<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Portfolio - Home</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
	<style>
		/* Floating background bubbles and animation */
		.bubble {
			@apply absolute w-[100px] h-[100px] rounded-full pointer-events-none z-0;
			background: rgba(255, 255, 255, 0.1);
			filter: blur(10px);
			animation: float 6s infinite ease-in-out;
		}

		.float-bubble {
			@apply absolute rounded-full pointer-events-none z-10;
			background: radial-gradient(circle, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.05));
			filter: blur(1px);
			animation: floatBubbles 6s ease-in-out infinite;
		}

		@keyframes float {
			0% {
				transform: translateY(0);
				opacity: 0.6;
			}

			50% {
				transform: translateY(-30px);
				opacity: 0.9;
			}

			100% {
				transform: translateY(0);
				opacity: 0.6;
			}
		}

		@keyframes floatBubbles {
			0% {
				transform: translateY(0);
				opacity: 0.5;
			}

			50% {
				transform: translateY(-10px);
				opacity: 1;
			}

			100% {
				transform: translateY(0);
				opacity: 0.5;
			}
		}
	</style>
</head>

<body class="bg-black text-white font-sans overflow-x-hidden">

	<!-- Floating Bubbles -->
	<div class="bubble top-[15%] left-[25%]" style="animation-duration:8s;"></div>
	<div class="bubble top-[45%] left-[65%]" style="animation-duration:6s;"></div>
	<div class="bubble top-[75%] left-[35%]" style="animation-duration:7s;"></div>
	<div class="bubble top-[25%] left-[15%]" style="animation-duration:9s;"></div>
	<div class="bubble top-[65%] left-[85%]" style="animation-duration:5s;"></div>

	<div class="flex flex-wrap items-center justify-center gap-10 px-5 py-10 min-h-screen max-w-6xl mx-auto relative z-10">

		<!-- Text Content -->
		<div class="flex flex-col gap-3 flex-1 min-w-[300px] max-w-xl text-left md:text-center md:items-center">
			<p class="text-lg">Hi There!</p>
			<h1 class="text-4xl md:text-3xl font-bold leading-tight">
				I am Jenah Rivero<br />A Web Developer
			</h1>
			<p class="text-base">Creating clean, modern, and professional web solutions.</p>

			<div class="flex flex-wrap md:flex-col md:items-center gap-3 mt-4">
				<a href="#" class="px-5 py-2 bg-white text-pink-500 font-bold rounded shadow-md hover:bg-gray-100 transition">Hire Me</a>
				<a href="#" class="px-5 py-2 bg-white text-pink-500 font-bold rounded shadow-md hover:bg-gray-100 transition">View Portfolio</a>
			</div>

			<div class="flex gap-4 mt-4 justify-center">
				<a href="https://www.facebook.com/jenVdesk/" target="_blank" class="text-white text-xl hover:text-pink-400"><i class="fab fa-facebook-f"></i></a>
				<a href="https://x.com/jenahrivero0228" target="_blank" class="text-white text-xl hover:text-pink-400"><i class="fab fa-twitter"></i></a>
				<a href="https://www.linkedin.com/in/jenahmarie/" target="_blank" class="text-white text-xl hover:text-pink-400"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>

		<!-- Image Content -->
		<div class="relative flex justify-center items-center flex-1 min-w-[250px] max-w-md">
			<div class="w-80 h-80 rounded-full overflow-hidden flex items-center justify-center">
				<img src="<?php echo base_url('application/assets/images/bodypic.png'); ?>" alt="Your Image" class="w-full h-full object-cover" />
			</div>

			<!-- Floating bubbles inside image -->
			<div class="float-bubble w-[25px] h-[25px] top-[-20px] left-[40px]" style="animation-delay:0s;"></div>
			<div class="float-bubble w-[15px] h-[15px] bottom-[10px] right-[50px]" style="animation-delay:1s;"></div>
			<div class="float-bubble w-[30px] h-[30px] top-[50px] right-[-20px]" style="animation-delay:2s;"></div>
			<div class="float-bubble w-[12px] h-[12px] bottom-[40px] left-[20px]" style="animation-delay:3s;"></div>
		</div>

	</div>

</body>

</html>