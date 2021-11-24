const slider = document.querySelector('.gallery');

const scrollSpeed = 1;
let mouseDown = false;
let mousePositionX;
let scrollLeft;

slider.addEventListener('mousedown', event => {
	mouseDown = true;
	slider.classList.add('active');
	mousePositionX = event.pageX - slider.offsetLeft;
	scrollLeft = slider.scrollLeft;
});

slider.addEventListener('mouseleave', _ => {
	mouseDown = false;
	slider.classList.remove('active');
});

slider.addEventListener('mouseup', _ => {
	mouseDown = false;
	slider.classList.remove('active');
});

slider.addEventListener('mousemove', event => {
	if (mouseDown === false)
	{
		return;
	}

	event.preventDefault();
	const positionX = event.pageX - slider.offsetLeft;
	const offsetX = (positionX - mousePositionX) * scrollSpeed;
	
	slider.scrollLeft = scrollLeft - offsetX;
});