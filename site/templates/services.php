<?php snippet('header') ?>

  <main class="main">
    <h1><?= $page->title() ?></h1>
    <ul class="products">
      <?php foreach ( $services as $service): ?>
        <li>
          <a href="<?= $service->url() ?>">
            <span>
              <?= $service->name() ?>
            </span></br>

            <span>
              Price: <?= $service->price() ?>$
            </span></br>

            <?php if ($service->discount()->isNotEmpty()): ?>
              <span>
                Discount Price: <?= $service->price()->toFloat() - $service->discount()->toFloat() ?>$
              </span></br>
            <?php endif ?>

            <span>
              Status: <?= $service->availability() ?>
            </span></br>

            <span>
              Duration: <?= $service->duration() ?> Minutes
            </span></br>

            <span>
              Where: <?= $service->place() ?>
            </span>
          </a>
        </li>
      <?php endforeach ?>
    </ul>
  </main>

<?php snippet('footer') ?>
