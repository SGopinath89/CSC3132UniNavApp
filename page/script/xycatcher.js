function handleClick(event) {
    var container = document.getElementById('container');
    var image = document.getElementById('image');
    var output = document.getElementById('output');

    var containerRect = container.getBoundingClientRect();

    let x = event.clientX-containerRect.left-10;
    let y = event.clientY-containerRect.top-10;
    
    let x_l=((x / containerRect.width) * 98).toFixed(2);
    let y_t=((y / containerRect.height/100) * 98*69.230).toFixed(2);
    output.innerHTML = 'Percentage Coordinates - X: ' + (x_l) + ' Y: ' + (y_t);
    
    x_l1=parseFloat(x_l);
    y_t1=parseFloat(y_t);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // Display the PHP response (if any)
            document.getElementById("result").innerHTML = this.responseText;
        }
    };
    
    xhttp.open("POST", "addplace.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhttp.send("x=" + encodeURIComponent(x_l) + "&y=" + encodeURIComponent(y_t));
    xhttp.send("x=" + x_l1.toString() + "&y=" + y_t1.toString());
    document.getElementById('container').addEventListener('click', handleClick);
}