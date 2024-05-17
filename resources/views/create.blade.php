<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Upload photo</title>
</head>
<body>
  <form class="container-lg p-4 mt-5 shadow-lg p-5 mb-5 bg-white rounded" style="max-width: 500px" method="POST" action="/photo/store" enctype="multipart/form-data">
    @csrf
    <h3 align="center">Upload Photo</h3>
    <div class="mt-5 mb-3">
      <label for="photo" class="form-label">Upload a photo</label>
      <input class="form-control" type="file" id="photo" name="photo" required>
      @error('photo')
        <div class="alert alert-danger mt-4 p-1 text-center" role="alert">{{ $message }}</div>
      @enderror
    </div>
    <div class="mt-5">
      <a class="btn btn-outline-dark" href="/gallery">Back</a>
      <input class="btn btn-primary" type="submit" value="Upload">
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>