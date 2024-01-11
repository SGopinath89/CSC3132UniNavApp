function handleClick1(event) {
    var container = document.getElementById('container');
    var image = document.getElementById('image');

    var containerRect = container.getBoundingClientRect();
    var offsetX = event.clientX - containerRect.left-10;
    var offsetY = event.clientY - containerRect.top-10;

    var percentageX = (offsetX / containerRect.width) * 98;
    var percentageY = (offsetY / containerRect.height) * 98;
    var y=((percentageY/100)*69.230);

    let x_l=percentageX.toFixed(2);
    let y_t=y.toFixed(2);

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

function handleClick11(event) {
    var container = document.getElementById('container');
    var image = document.getElementById('im');
    var output = document.getElementById('output');

    var containerRect = container.getBoundingClientRect();
    var offsetX = event.clientX - containerRect.left - 10;
    var offsetY = event.clientY - containerRect.top - 10;

    var percentageX = (offsetX / containerRect.width) * 98;
    var percentageY = (offsetY / containerRect.height) * 98;
    var y = ((percentageY / 100) * 69.230);

    // Display coordinates in the output div
    output.innerHTML = 'Percentage Coordinates - X: ' + percentageX.toFixed(2) + ' Y: ' + y.toFixed(2);
    
  }