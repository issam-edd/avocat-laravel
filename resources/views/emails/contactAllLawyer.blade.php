<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SiteMarrakech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<h1>{{ $mailData['title'] }}</h1>

    <div class="m-2">
        <img src="https://www.linkpicture.com/q/logo_727.png" width="50" height="50" alt="App Logo">

        <p class="font-15">
            <span class="text-muted"> Nom Complet :</span> {{ $mailData["fullname"] }}
        </p>
        <p class="font-15">
            <span class="text-muted"> Phone :</span> {{ $mailData["phone"] }}
        </p>
        <p class="font-15">
            <span class="text-muted"> Email :</span> {{ $mailData["email"] }}
        </p>
        <p class="font-15">
            <span class="text-muted"> Question :</span> {{ $mailData["question"]  }}
        </p>
    </div>

	<p>Thank You.</p>

</body>
</html>
