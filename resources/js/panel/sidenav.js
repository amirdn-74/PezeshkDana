const sideNav = document.querySelector(".sidenav"),
	sideNavToggleBtn = document.querySelector(".sidenav__toggle");

sideNavToggleBtn.addEventListener("click", function () {
	sideNav.classList.toggle("expand");
	this.classList.toggle("rotate");
});
