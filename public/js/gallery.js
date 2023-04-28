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
  bigImage.setAttribute("id", "big-image");
  bigImage.setAttribute("src", `/images/projects/${projectId}/0.jpg`);
  modal.append(bigImage);

  const containerOfThumbnails = document.createElement("div");
  containerOfThumbnails.setAttribute("id", "container-of-thumbnails");
  for (i = 0; i <= numberOfImages; i++) {
    let thumbnail = document.createElement("img");
    thumbnail.setAttribute("class", "thumbnail");
    thumbnail.setAttribute("src", `/images/projects/${projectId}/${i}.jpg`);
    containerOfThumbnails.append(thumbnail);
    thumbnail.onclick = () => {
      bigImage.setAttribute("src", thumbnail.src);
    };
  }
  modal.append(containerOfThumbnails);

  //creating the close button
  const closeButton = document.createElement("div");
  closeButton.setAttribute("class", "close-button");
  closeButton.innerText = "x";
  modal.append(closeButton);

  //close functions
  closeButton.onclick = () => {
    modal.remove();
  };

  modal.addEventListener("click", function (e) {
    if (e.target.tagName != "IMG") {
      modal.remove();
    }
  });
};
