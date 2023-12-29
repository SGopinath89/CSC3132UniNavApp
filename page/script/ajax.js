function sendAjaxRequest(url, data, method, callback) {
    const xhr = new XMLHttpRequest();
    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/json');
  
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          callback(xhr.responseText);
        } else {
          console.error('Error: ' + xhr.statusText);
        }
      }
    };
  
    xhr.send(JSON.stringify(data));
  }
  
  export default sendAjaxRequest;
  
  
  
  // For adding a new location
sendAjaxRequest('/add-location.php', { title: 'New Place', description: '...', icon: '...', ... }, 'POST', (response) => {
    // Update the location list with the response data
    // ...
  });
  
  // For editing a location
  sendAjaxRequest('/edit-location.php', { id: locationId, title: 'Updated Title', ... }, 'PUT', (response) => {
    // Update the location details in the list
    // ...
  });
  
  // ...
  
  
  