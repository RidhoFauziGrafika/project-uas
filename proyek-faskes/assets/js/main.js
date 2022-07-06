// Local Storage
const cacheKey = "STATUS";

// Navbar Collapse
const menuMobile = document.getElementById("menu-mobile");
const menuIcon = document.getElementById("menu-icon");
const collapse = document.getElementsByClassName("collapse");
const border = document.getElementsByClassName("border-mobile");

window.addEventListener("resize", () => {
	if (window.screen.width > 1024) {
		for (let i = 0; i < collapse.length; i++) {
			collapse[i].classList.remove("hidden");
		}
	} else {
		for (let i = 0; i < collapse.length; i++) {
			collapse[i].classList.add("hidden");
		}
	}
});

menuMobile.onclick = function (e) {
	const target = e.target;
	if (!menuMobile.classList.contains("close")) {
		menuMobile.classList.add("close");
		menuIcon.classList.remove("bx-menu-alt-right");
		menuIcon.classList.add("bx-x");
		for (let i = 0; i < collapse.length; i++) {
			collapse[i].classList.remove("hidden");
		}
		for (let i = 0; i < border.length; i++) {
			border[i].classList.add("border-b-2");
		}
		localStorage.setItem(cacheKey, "close");
	} else {
		menuMobile.classList.remove("close");
		menuIcon.classList.remove("bx-x");
		menuIcon.classList.add("bx-menu-alt-right");
		for (let i = 0; i < collapse.length; i++) {
			collapse[i].classList.add("hidden");
		}
		for (let i = 0; i < border.length; i++) {
			border[i].classList.remove("border-b-2");
		}
		localStorage.removeItem(cacheKey);
	}
};
