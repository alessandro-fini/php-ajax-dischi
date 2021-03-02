  <main>
    <div class="container">
      <div class="cds-container">
        <?php foreach ($cds as $cd) { ?>
          <div class="cd">
            <img src="<?php echo $cd['poster'] ?>" alt="<?php echo $cd['title'] ?>">
            <h3><?php echo $cd['title'] ?></h3>
            <span><?php echo $cd['author'] ?></span>
            <span><?php echo $cd['year'] ?></span>
          </div>
        <?php } ?>
      </div>
    </div>
  </main>
</body>
</html>