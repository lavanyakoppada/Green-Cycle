<?php  if (count($errors) > 0) : ?>
  <div class="error" style="color: white; background-color: black; border: 1px solid black; padding: 10px; margin: 10px 0;">
    <?php foreach ($errors as $error) : ?>
      <p style="margin: 0;"><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php  endif ?>
