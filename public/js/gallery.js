const images = document.querySelectorAll("figure img");
let imageSrc;

// get images src onclick
images.forEach((image) => {
  image.addEventListener("click", (e) => {
    projectId = e.target.getAttribute("id");
    numberOfImages = e.target.getAttribute("number");
    imageModal(projectId, numberOfImages);
  });
});

//creating the modal
let imageModal = (projectId, numberOfImages) => {
  const modal = document.createElement("div");
  modal.setAttribute("class", "modal");
  document.querySelector(".container").append(modal);

  const bigImage = document.createElement("img");
  bigImage.setAttribute("class", "big-image");
  bigImage.setAttribute("src", `/images/projects/${projectId}/0.jpg`);

  const thumbImages = document.createElement("div");
  thumbImages.setAttribute("class", "thumb-images");
  for (i = 0; i <= numberOfImages; i++) {
    const thumbImage = document.createElement("img");
    thumbImage.setAttribute("class", "thumb-image");
    thumbImage.setAttribute("src", `/images/projects/${projectId}/${i}.jpg`);
    thumbImages.append(thumbImage);
  }

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

  modal.append(bigImage, thumbImages, closeButton);
};
