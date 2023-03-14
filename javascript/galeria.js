let foto = document.querySelectorAll(".galeria-foto img").forEach(img =>{
    img.addEventListener('click', () => img.classList.toggle('zoom'));
});


