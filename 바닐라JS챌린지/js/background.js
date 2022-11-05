const images = [
    "0.jpeg",
    "1.jpeg",
    "2.jpeg",
    "3.jpg",
    "4.jpg",
    "5.jpg",
    "6.jpg",
    "7.jpg",
    "8.jpg",
    "9.jpg",
    "10.jpg",
];

const todaysImage= images[Math.floor(Math.random() * images.length)];

const bgImage = document.createElement("img");
bgImage.src = `img/${todaysImage}`;
bgImage.style.width = "1920px";
bgImage.style.backgroundSize = "cover";
document.body.appendChild(bgImage);