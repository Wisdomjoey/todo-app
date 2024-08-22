const openMenu = () => {
	const nav = document.getElementById("nav");

	nav.dataset.state = "open";
};

const closeMenu = () => {
	const nav = document.getElementById("nav");

	nav.dataset.state = "closed";
};

const openTaskDetails = (id) => {
	const aside = document.getElementById("aside");
	const btn = document.getElementById(id);
	const openBtn = document.querySelector(`#${id}[data-state="open"]`);

	if (openBtn) openBtn.dataset.state = "closed";

	btn.dataset.state = "open";
	aside.dataset.state = "open";
};

const closeTaskDetails = () => {
	const aside = document.getElementById("aside");
	const openBtn = document.querySelector(`#${id}[data-state="open"]`);

	if (openBtn) openBtn.dataset.state = "closed";
  
	aside.dataset.state = "closed";
};
