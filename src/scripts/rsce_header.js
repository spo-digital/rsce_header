'use strict';

function toggleMenuClass() {
	const menuElement = document.querySelector('.mobile-menu') || document.querySelector('.rsce_header__nav');

	if (window.innerWidth > 992) {
		if (menuElement && menuElement.classList.contains('mobile-menu')) {
			menuElement.classList.remove('mobile-menu');
			menuElement.classList.add('rsce_header__nav');
		}
	} else {
		if (menuElement && menuElement.classList.contains('rsce_header__nav')) {
			menuElement.classList.remove('rsce_header__nav');
			menuElement.classList.add('mobile-menu');
		}
	}
}

window.addEventListener('load', toggleMenuClass);
window.addEventListener('resize', toggleMenuClass);

window.addEventListener('load', toggleMenuClass);
window.addEventListener('resize', toggleMenuClass);

document.addEventListener('DOMContentLoaded', function(event) {

	let forEach = function(t, o, r) {
		if ("[object Object]" === Object.prototype.toString.call(t)) {
			for (let c in t) {
				Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
			}
		} else {
			for (let e = 0, l = t.length; l > e; e++) {
				o.call(r, t[e], e, t);
			}
		}
	};

	let hamburgers = document.querySelectorAll(".rsce_hamburger");
	let mobileMenu = document.querySelector('.mobile-menu');
	let originalMenu = document.querySelector('.rsce_header__nav nav');

	if (hamburgers.length > 0) {
		forEach(hamburgers, function(hamburger) {
			hamburger.addEventListener("click", function() {
				this.classList.toggle("is-active");
				if (mobileMenu) {
					mobileMenu.classList.toggle("active");
				}
			}, false);
		});

		document.addEventListener('click', function(event) {
			let target = event.target;
			let isHamburger = target.closest('.rsce_hamburger') !== null;
			let isMenu = target.closest('.mobile-menu') !== null;

			if (!isHamburger && !isMenu) {
				forEach(hamburgers, function(hamburger) {
					hamburger.classList.remove('is-active');
				});
				if (mobileMenu) {
					mobileMenu.classList.remove('active');
				}
			}
		});
	}
});

document.addEventListener('DOMContentLoaded', function() {
	let submenus = document.querySelectorAll('.submenu');

	submenus.forEach(function(menu) {
		menu.addEventListener('click', function(event) {
			event.stopPropagation();

			document.querySelectorAll('.submenu').forEach(function(otherMenu) {
				if (otherMenu !== menu) {
					otherMenu.classList.remove('active');
				}
			});

			menu.classList.toggle('active');
		});
	});

	document.addEventListener('click', function(event) {
		let isClickInside = document.querySelector('.mod_navigation').contains(event.target);
		if (!isClickInside) {
			document.querySelectorAll('.submenu').forEach(function(menu) {
				menu.classList.remove('active');
			});
		}
	});
});