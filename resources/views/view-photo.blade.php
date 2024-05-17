<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Photo</title>
</head>
<body>
  <div class="container-lg p-4 mt-5 shadow-lg p-5 mb-5 bg-white rounded" style="max-width: 880px">
    <form class="d-flex justify-content-between p-4" method="POST" action="/photo/delete/{{ $photo->id }}">
      @method('delete')
      @csrf
      <h3>View photo</h3>
      <div>
        <a class="btn btn-outline-dark" href="/gallery">Back</a>
        <button type="submit" class="btn btn-danger">Delete image</button>
      </div>
    </form>
    <div class="container-fluid border-b" style="max-width: 880px;">
      <div class="justify-content-center">
        <img class="img-fluid" src="{{ asset('storage/Photo/' . $photo->photo) }}" alt="">
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>