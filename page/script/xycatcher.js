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
function showCoords(event) {
    let x = event.clientX;
    let y = event.clientY;
    
    let x_l=x-237;
    let y_t=y-237;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Display the PHP response (if any)
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "addplace.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("x=" + (x_l) + "&y=" + (y_t));
}