<?php snippet('header') ?>

  <main class="main">
    <h1><?= $page->title() ?></h1>
    <ul class="products">
      <?php foreach ( $products as $product): ?>
        <li>
          <a href="<?= $product->url() ?>">
            <img src="<?= $product->image()->url() ?>"></br>

            <span>
              <?= $product->name() ?>
            </span></br>

            <span>
              Price: <?= $product->price() ?>$
            </span></br>

            <?php if ($product->discount()->isNotEmpty()): ?>
              <span>
                Discount Price: <?= $product->price()->toFloat() - $product->discount()->toFloat() ?>$
              </span></br>
            <?php endif ?>

            <span>
              Status: <?= $product->availability() ?>
            </span>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
