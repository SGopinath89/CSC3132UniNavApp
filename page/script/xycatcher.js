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