<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click to Open New Page</title>
    <script>
        function openNewPage() {
            window.open('#.html', '_blank');
        }

        document.addEventListener('click', openNewPage);
    </script>
</head>
<body>


<h1>Hello, Click anywhere to Open New Page!</h1>

</body>
</html>