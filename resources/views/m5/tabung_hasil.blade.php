<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col-md-4>'>
                <p>
                    Jari-jari: {{ $jari_jari }}<br />
                    Tinggi: {{ $tinggi }}<br />
                    Volume Tabung: {{ $volume }}
                </p>
            </div>
        </div>
    </div>
</body>
</html>