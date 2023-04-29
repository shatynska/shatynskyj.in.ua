const images = document.querySelectorAll("figure img");
let imageSrc;

// get images src onclick
images.forEach((image) => {
  image.addEventListener("click", (e) => {
    let projectId = e.target.getAttribute("id");
    let projectTitle = e.target.getAttribute("alt");
    let numberOfImages = e.target.getAttribute("number");
    imageModal(projectId, projectTitle, numberOfImages);
  });
});

let imageModal = (projectId, projectTitle, numberOfImages) => {
  const modal = document.createElement("div");
  modal.setAttribute("class", "modal");
  document.querySelector(".container").append(modal);

  const modalHeader = document.createElement("header");
  modal.append(modalHeader);

  const modalTitle = document.createElement("header");
  modalTitle.innerText = projectTitle;
  modalHeader.append(projectTitle);

  const closeButton = document.createElement("div");
  closeButton.setAttribute("class", "close-button");
  closeButton.innerText = "x";
  modalHeader.append(closeButton);

  closeButton.onclick = () => {
    modal.remove();
  };

  modal.addEventListener("click", function (e) {
    if (e.target.tagName != "IMG") {
      modal.remove();
    }
  });

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
};
