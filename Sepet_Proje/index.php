<?php
$urunler = array(
  array("SOSİSLİ","sosisli.jpg","SOSİSLİ",30),
  array("HAMBURGER","hamburger.jpg","HAMBURGER",110),
  array("PİZZA","pizza.jpg","PİZZA",60),
  array("KEK","kek.jpg","KEK",20),
  array("LAHMACUN","lahmacun.jpg","LAHMACUN",30),
  array("ADANA KEBAP","adana.jpg","ADANA KEBAP",70),
  array("PİDE","pide.jpg","PİDE",60),
  array("ÇİĞKÖFTE","çiğköfte.jpg","ÇİĞKÖFTE",20)
);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Shopping Cart</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- header -->
  <header class="container">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
      <div class="container">
        <a href="index.php" class="navbar-brand">SEPET İPTALİ</a>
        <div class="shopping-cart position-relative">

          <button type="button" class="btn-cart btn btn-primary position-relative">
            <i class="fas fa-shopping-cart"></i>
            <span id="item-count" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2">0</span>
          </button>

          <div class="shopping-cart-list bg-primary d-none">
            <b class="fs-5 text-white my-3">Shopping Cart</b>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- section -->
  <section class="productsmt-5">
    <div class="container">
      <div class="row">
      
      <?php foreach($urunler as $urun){ ?>
      
        <div class="col-lg-3 col-md-6 mb-3">
          <div class="card">
            <img src="<?=$urun[1]?>" alt="product" class="card-img-top img-fluid">
            <div class="card-body">
              <h5 class="card-title"><?=$urun[0]?></h5>
              <p class="cart-text">
                <?=$urun[2]?>
              </p>
              <div class="d-flex justify-content-between">
                <a class="btn btn-info text-white" href="#">SEPETE EKLE</a>
                <span class="price badge rounded-pill bg-warning text-dark d-flex align-items-center">₺
                  <?=$urun[3]?></span>
              </div>
            </div>
          </div>
        </div>
        
      <?php } ?>

      </div>
    </div>
  </section>

  <script src="script.js"></script>
</body>

</html>
