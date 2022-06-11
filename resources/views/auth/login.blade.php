<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/auth.css">

    <title>Schema | Sign In</title>
  </head>
  <body>
    {{-- Container --}}
<div class="container-fluid">
  <div class="row gambar">
    <div class="col-4">
      <img src="/img/basket.jpg" alt="Basket">
    </div>
    <div class="col-lg-8 kanan bg-dark">
      <p>Don't Have an Account ?</p>
      <a class="btn btn-secondary tombol-1" href="register">Sign Up</a>
      
      <h5>Log In To Schema</h5>
      {{-- form --}}
      <form action="" class="form">
      <div class="mb-3">
        <input type="username" class="form-in bg-dark" id="username" placeholder="Username" required>
      </div>
      <div class="mb-3">
        <input type="email" class="form-in bg-dark" id="email" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" class="form-in bg-dark" id="password1" placeholder="Password" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
      <a href="/index" class="btn btn-primary tombol"><span>Log In</span></a>
      </form>
      {{-- akhir form --}}
    </div>
  </div>
  
</div>
{{-- Akhir Container --}}
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>