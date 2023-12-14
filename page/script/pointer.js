function showCoords(event) {
    let x = event.clientX;
    let y = event.clientY;
    let text = "X coords: " + x + ", Y coords: " + y;
    document.getElementById("demo").innerHTML = text;
  }

  ////MouseOverEvent
const locationTags = document.querySelectorAll('.location-tag');

locationTags.forEach((tag) => {
  tag.addEventListener('mouseover', () => {
    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.innerHTML = tag.dataset.title;

    document.body.appendChild(popup);

    // Position the popup near the hovered tag
    popup.style.top = `${tag.offsetTop + tag.offsetHeight}px`;
    popup.style.left = `${tag.offsetLeft}px`;
  });
});
