<?php snippet('header') ?>

  <main class="main">
    <article>

      <?php if ($page->name()->isNotEmpty()): ?>
        <h1><?= $page->name() ?></h1>
      <?php endif ?>

      <div class="product-layout">
        <div class="product-info">
          <dl>
            <?php if ($page->description()->isNotEmpty()): ?>
              <dt>Description</dt>
              <dd><?= $page->description() ?></dd>
            <?php endif ?>

            <?php if ($page->price()->isNotEmpty()): ?>
              <dt>Price</dt>
              <dd><?= $page->price() ?>$</dd>
            <?php endif ?>

            <?php if ($page->discount()->isNotEmpty()): ?>
              <dt>Discount price</dt>
              <dd><?= $page->price()->toFloat() - $page->discount()->toFloat() ?>$</dd>
            <?php endif ?>

            <?php if ($page->availability()->isNotEmpty()): ?>
              <dt>Status</dt>
              <dd><?= $page->availability() ?></dd>
            <?php endif ?>
          </dl>
        </div>

        <div class="product-images">
          <ul>
            <?php foreach ($page->images() as $image): ?>
              <li>
                <a href="<?= $image->url() ?>">
                  <img src="<?= $image->url() ?>">
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
    </article>
  </main>

<?php snippet('footer') ?>
