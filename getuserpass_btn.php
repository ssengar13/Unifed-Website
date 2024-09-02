<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate User Credentials</title>
</head>
<body>
    <button id="generateButton">Get username and password</button>

    <script>
        document.getElementById("generateButton").addEventListener("click", function() {
            // Send an AJAX request to the PHP script to generate credentials
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "generateduserpass.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle the response from the server (e.g., show a success message)
                    alert(xhr.responseText);
                }
            };
            xhr.send();
        });
    </script>
</body>
</html>
