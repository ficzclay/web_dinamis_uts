<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <h1>Halaman Form</h1>
  <form>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputName" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputComment" class="form-label">Komentar</label>
      <textarea class="form-control" id="exampleInputComment" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
