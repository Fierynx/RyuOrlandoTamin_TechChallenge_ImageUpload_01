<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Gallery</title>
  <style>
    #image:hover{
      background-color: rgb(243, 237, 237);
    }
  </style>
</head>
<body>
  <div class="container-lg p-4 mt-5 shadow-lg p-5 mb-5 bg-white rounded" style="max-width: 880px">
    <div class="d-flex justify-content-between p-4">
      <div class="flex-column">
        <h3 class="mb-1">Photo Gallery</h3>
        <p class="m-0" style="font-size: 10px;">&nbsp;*Click the photo to inspect</p>
      </div>
      <a href="/photo/create" class="btn btn-primary mt-2">Upload new image</a>
    </div>
    <div class="container-fluid border-b" style="max-width: 880px;">
      <div class="container pt-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">
          @foreach ($photos as $photo)
          <a href="/photo/view/{{ $photo->id }}" id="image">
            <div class="col">
                <img class="img-fluid" src="{{ asset('storage/Photo/' . $photo->photo) }}" alt="">
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>