const images = document.querySelectorAll("figure img");
let imageSrc;

// get images src onclick
images.forEach((image) => {
  image.addEventListener("click", (e) => {
    imageSrc = e.target.src;
  });
});
