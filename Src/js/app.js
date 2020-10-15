//burger menu

const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');
const brand_h1 = document.querySelector('.brand h1');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position < 100) {
		header.style.backgroundColor = '#FFF';
		brand_h1.style.color="#002957"
	} else {
		header.style.backgroundColor = 'transparent';
		brand_h1.style.color="#fff"
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

//loading page
function onReady(callback) {
	var intervalId = window.setInterval(function() {
	  if (document.getElementsByTagName('body')[0] !== undefined) {
		window.clearInterval(intervalId);
		callback.call(this);
	  }
	}, 1000);
  }
  
  function setVisible(selector, visible) {
	document.querySelector(selector).style.display = visible ? 'block' : 'none';
  }
  
  onReady(function() {
	setVisible('#container', true);
	setVisible('#loading', false);
  });

//Transitions
document.querySelector('#header .header').style.transition='.3s ease background-color';
document.querySelector('#header .nav-list ul').style.transition='.5s ease left';
document.querySelector('#header .nav-list ul a::after').style.transition='.3s ease letter-spacing';

document.querySelector('#header .hamburger .bar::before').style.transition='.3s ease';
document.querySelector('#header .hamburger .bar::after').style.transition='.3s ease';

document.querySelector('#header .hamburger .bar::before').style.transitionProperty ='top, bottom';
document.querySelector('#header .hamburger .bar::after').style.transitionProperty ='top, bottom';