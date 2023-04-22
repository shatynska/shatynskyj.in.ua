const images = document.querySelectorAll("figure img");
let imageSrc;

// get images src onclick
images.forEach((image) => {
  image.addEventListener("click", (e) => {
    imageSrc = e.target.src;
    imageModal(imageSrc);
  });
});

//creating the modal
let imageModal = (src) => {
  const modal = document.createElement("div");
  modal.setAttribute("class", "modal");
  document.querySelector(".container").append(modal);

  const bigImage = document.createElement("img");
  bigImage.setAttribute("class", "big-image");
  bigImage.setAttribute("src", src);

  const thumbImages = document.createElement("div");

  //creating the close button
  const closeButton = document.createElement("div");
  closeButton.setAttribute("class", "close-button");
  closeButton.innerText = "x";

  //close functions
  closeButton.onclick = () => {
    modal.remove();
  };

  modal.addEventListener("click", function (e) {
    if (e.target.tagName != "IMG") {
      modal.remove();
    }
  });

  modal.append(bigImage, closeButton);
};
