function showCoords(event) {
    let x = event.clientX - 9;
    let y = event.clientY - 300;
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;

    var x_c = (x / windowWidth) * 100;
    var y_c = (y / windowHeight) * 100;
    var roundedWindowX = x_c.toFixed(3);
    var roundedWindowY = y_c.toFixed(3);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Display the PHP response (if any)
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "addplace.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("x=" + roundedWindowX + "&y=" + roundedWindowY);
}