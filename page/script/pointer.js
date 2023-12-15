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
//////adminpage update map popup
const updateMapButton = document.getElementById('update-map-button');

updateMapButton.addEventListener('click', () => {
  const popup = document.createElement('div');
  popup.classList.add('popup');
  popup.innerHTML = `
    <p>Do you want to add a place here?</p>
    <button id="add-place-yes">Yes</button>
    <button id="add-place-no">No</button>
  `;

  document.body.appendChild(popup);

  const addPlaceYesButton = document.getElementById('add-place-yes');
  addPlaceYesButton.addEventListener('click', () => {
    // ... open another popup for adding location details
  });
});
///button function
const addPlaceButton = document.getElementById('add-place-button');
const locationList = document.getElementById('location-list');

addPlaceButton.addEventListener('click', () => {
  // Open popup for adding a new location
  // ...

  // Add new location to the list after successful submission
  // ...
});

locationList.querySelectorAll('.edit-button').forEach((button) => {
    button.addEventListener('click', () => {
      const locationId = button.parentElement.dataset.id;
  
      // Open popup for editing the location with details
      // ...
  
      // Update location details in the list after successful submission
      // ...
    });
  });
  
  locationList.querySelectorAll('.delete-button').forEach((button) => {
    button.addEventListener('click', () => {
      const locationId = button.parentElement.dataset.id;
  
      // Confirm deletion and send request to server
      // ...
  
      // Remove location from the list after successful deletion
      // ...
    });
  });

  /////visitorpage hover event
const locationTags = document.querySelectorAll('.location-tag');

locationTags.forEach((tag) => {
  tag.addEventListener('mouseover', () => {
    const popup = document.createElement('div');
    popup.classList.add('popup');
    popup.innerHTML = tag.dataset.title;

    document.body.appendChild(popup);

    popup.style.top = `${tag.offsetTop + tag.offsetHeight}px`;
    popup.style.left = `${tag.offsetLeft}px`;
  });

  tag.addEventListener('mouseout', () => {
    document.body.removeChild(document.querySelector('.popup'));
  });
});
