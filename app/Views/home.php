<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        #body-text {
            width: 50%;
            /* border: 1px solid black; */
            padding: 5px;
            margin: 0 auto;
            text-align: justify;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: large;
            height: 200px;
            overflow-y: scroll;
            box-shadow: -5px -5px gray;
            background-color: yellow;
            color: black;
            margin-bottom: 20px;
        }

        #new-text {
            width: 50%;
            border: 1px solid black;
            padding: 5px;
            margin: 0 auto;
            text-align: justify;
            overflow-y: scroll;
            box-shadow: -5px -5px gray;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: large;
            line-height: 30px;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;"><?= $header ?></h1>
    <p id="body-text"><?= $body ?></p>
    <h1 style="text-align:center;">Coloring Specific Words Basic On Condition</h1>
    <p id="new-text"></p>
    <script>
        let bodyText = document.getElementById('body-text');
        let newText = document.getElementById('new-text');
        let text = bodyText.innerHTML;
        for (let i = 1; i < 2; i++) {
            bodyText.innerHTML += text;
        }

        let splittedText = [];
        splittedText = text.split(" ");
        splittedText.forEach(function(e) {
            if (e == "a") {
                // e = e + " ";
                // newText.innerHTML += e;
                newText.innerHTML += `<span style="color:white;background-color:black">${e+" "}</span>`;
            } else {
                newText.innerHTML += `<span>${e+" "}</span>`;
            }
        })
    </script>
</body>

</html>