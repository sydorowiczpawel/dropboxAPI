@include('partials.addFile')
@include('partials.newFolder')

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dropbox App</title>
</head>
<body>
<div>
    <a href='/'><button class="btn btn-outline-success">Home</button></a>
    <a style="cursor: pointer" data-toggle="modal" data-target="#addFileModal"><button class="btn btn-outline-danger">Upload File</button></a>
    <a style="cursor: pointer" data-toggle="modal" data-target="#newFolderModal"><button class="btn btn-outline-primary">New Folder</button></a>
    </div>
    <main class="py-4">
    <h3>TODO:</h3>
    <p>Pobierz -        działa pod warunkiem, że hierarchia folderów jest identyczna</p>
    <p>Dodaj plik -     działa, ale tylko do folderu głównego</p>
    <p>Dodaj folder -   działa, ale tylko do folderu głównego</p>
    <p>Usuń folder -   nie działa</p>
    <p>Usuń plik - nie działa</p>
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>