btn = document.querySelector('.change');
btn.addEventListener('click', function () {
	auth = document.querySelector('.auth');
	auth.classList.toggle('active')
	reg = document.querySelector('.reg');
	reg.classList.toggle('active');
	console.log('норм')
})