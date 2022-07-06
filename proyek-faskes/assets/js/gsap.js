gsap.registerPlugin(TextPlugin, ScrollTrigger);

gsap.from(".navbar", {
	duration: 0.5,
	y: "-100%",
	opacity: 0,
	ease: "power2.inOut",
});

gsap.from(".writing", { duration: 3, text: "" });

gsap.from(".about h1, .about .writings, .about .grid", {
	scrollTrigger: {
		trigger: ".about",
		start: "top center",
	},
	duration: 1,
	x: -300,
	opacity: 0,
});

gsap.from(".about .writings", {
	scrollTrigger: {
		trigger: ".about",
		start: "top center",
	},
	duration: 3,
	text: "",
});

gsap.from(
	".swiper-container .grid, .swiper-container .swiper, .swiper-container .swiper-wrapper, .swiper-container h1, .swiper-pagination",
	{
		scrollTrigger: {
			trigger: ".swiper-container",
			start: "top bottom",
		},
		duration: 1,
		y: 100,
		opacity: 0,
	}
);

gsap.from("header h1", {
	scrollTrigger: {
		trigger: "header",
		start: "top bottom",
	},
	duration: 1,
	y: -50,
	opacity: 0,
});

gsap.from(".ulasan .bg-white, .ulasan h1", {
	scrollTrigger: {
		trigger: ".ulasan",
		start: "top bottom",
	},
	duration: 1,
	y: 300,
	opacity: 0,
});

gsap.from(".detail div, .detail h3, .detail p", {
	scrollTrigger: {
		trigger: ".detail",
		start: "top bottom",
	},
	duration: 1,
	y: 300,
	opacity: 0,
});

gsap.from("footer div", {
	scrollTrigger: {
		trigger: "footer",
		start: "top bottom",
	},
	duration: 1,
	y: 100,
	opacity: 0,
});
