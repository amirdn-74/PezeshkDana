const dinamicNavbar = () => {
	const navbar = document.getElementById("navbar");

	window.addEventListener("scroll", function (e) {
		if (window.scrollY > 200) {
			navbar.classList.add("sticky");
			if (page === "home") navbar.classList.add("navbar--reversed");
		} else {
			navbar.classList.remove("sticky");
			if (page === "home") navbar.classList.remove("navbar--reversed");
		}
	});
};

const toggleExploreDrawer = () => {
	const exploreTitles = document.querySelectorAll(
		".explore__search .search-topic .title"
	);

	exploreTitles.forEach((item) => {
		item.addEventListener("click", (e) => {
			item.parentElement.classList.toggle("expanded");
		});
	});
};

dinamicNavbar();
toggleExploreDrawer();
