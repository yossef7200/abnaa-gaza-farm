
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>شركة أبناء غزة للخضروات والفاكهة</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header class="text-center p-4 bg-success text-white">
    <h1>شركة أبناء غزة للخضروات والفاكهة</h1>
    <p>توصيل طازج يوميًا من المزرعة إلى بيتك</p>
  </header>

  <section class="products py-5" id="products">
    <div class="container">
      <h2 class="text-center mb-4">منتجاتنا وأسعارها</h2>
      <div class="row g-4">
        <?php
        $items = [
          ['name'=>'تفاح عائلي','price'=>'8 شيكل/كجم','img'=>'apple.jpg'],
          ['name'=>'موز طازج','price'=>'6 شيكل/كجم','img'=>'banana.jpg'],
          ['name'=>'طماطم عضوي','price'=>'5 شيكل/كجم','img'=>'tomato.jpg'],
          ['name'=>'خيار','price'=>'4 شيكل/كجم','img'=>'cucumber.jpg'],
          ['name'=>'برتقال','price'=>'7 شيكل/كجم','img'=>'orange.jpg']
        ];
        foreach($items as $item){
          echo "
          <div class='col-md-4'>
            <div class='card h-100'>
              <img src='assets/img/{$item['img']}' class='card-img-top' alt='{$item['name']}'>
              <div class='card-body'>
                <h5 class='card-title'>{$item['name']}</h5>
                <p class='card-text text-success fw-bold'>{$item['price']}</p>
              </div>
            </div>
          </div>";
        }
        ?>
      </div>
    </div>
  </section>
</body>
</html>
