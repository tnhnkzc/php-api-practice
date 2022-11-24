<?php require 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <div class="p-4">
    <h1 class="text-xl font-bold"><?= $jsonReturn->Title; ?></h1>
  </div>
  <div class="flex gap-4">
    <div class="p-4">
      <img src="<?= $jsonReturn->Poster ?>" alt="Film Poster">
    </div>
    <div class="p-4">
      <h3 class="font-semibold"><?= $jsonReturn->Released ?> - <?= $jsonReturn->Runtime ?></h3>
      <div class="w-1/2">
        <p><?= $jsonReturn->Plot ?></p>
      </div>
      <div class="w-1/2 mt-4">
        <h3 class="font-semibold">
          Actors
        </h3>
        <p><?= $jsonReturn->Actors ?></p>
      </div>
      <div class="w-1/2 mt-4">
        <h3 class="font-semibold">
          Notes
        </h3>
        <?php foreach ($jsonReturn->Ratings as $rating) : ?>
          <ul>
            <li>
              <?= $rating->Source; ?> :
              <?= $rating->Value; ?>
            </li>
          </ul>
        <?php endforeach; ?>
      </div>
    </div>
  </div>




</body>

</html>