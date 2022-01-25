<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statipy Auth Success</title>
</head>
<body>
    <h1>Authorization Success</h1>
    <button onclick="copy();">Copy Code To Clipboard</button>
    warning this button might not work for some devices.
    or copy this: <br><span id="code"</span>
    <script>
        const queryString = window.location.search;
        console.log(queryString);
        const urlParams = new URLSearchParams(queryString);
        const code = urlParams.get('code')
        var link = code
        document.getElementById('code').innerHTML = code;
        console.log(link)
        function copy(){
            navigator.clipboard.writeText(link);
            alert("Code Copied")
        }
        window.history.pushState(null, null, null);
    </script>
</body>
</html>

<?php echo ''; ?>