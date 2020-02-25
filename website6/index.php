<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
    </div>

    <script>
        function showSuggestion(value) {
            if(value.length === 0){
                document.querySelector('#output').innerHTML = "";
            } else {
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200){
                        document.querySelector('#output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open('GET', `suggest.php?q=${value}`, true);
                xmlhttp.send();
            }
        }
    </script>
</body>
</html>