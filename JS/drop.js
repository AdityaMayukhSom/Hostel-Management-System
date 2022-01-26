const profilePicture = document.querySelector('#profile-picture');

profilePicture.addEventListener('click', () => {
    const toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
})