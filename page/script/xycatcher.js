function handleClick(event) {
    var container = document.getElementById('container');
    var image = document.getElementById('image');

    var containerRect = container.getBoundingClientRect();
    var offsetX = event.clientX - containerRect.left-10;
    var offsetY = event.clientY - containerRect.top-10;

    var percentageX = (offsetX / containerRect.width) * 98;
    var percentageY = (offsetY / containerRect.height) * 98;
    var y=((percentageY/100)*69.230);

    console.log('Percentage Coordinates - X:', percentageX.toFixed(2), 'Y:', y.toFixed(2));
  
}