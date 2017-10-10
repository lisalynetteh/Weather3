<?php include 'partials/header.php'; ?>
<pre>
  <?php //print_r($forecast); ?>
</pre>
<main class="container py-5 text-center">
  <h1 class="text-center">
   Here's the weather in <?php echo $_POST['location']; ?>
  </h1>
  <div class="text-left py-5 mx-auto" style="max-width: 320px;">
    <?php include 'partials/form.php'; ?>
  </div>
  <div class="card p-4 my-5 mx-auto" style="border-color: #91603b; max-width: 320px; border-width: 4px ">
    <p class="lead text-bold m-0"><?php echo $place; ?></p>
    <h2 class="display-1 mb-0">
      <?php echo round($forecast['currently']['temperature']); ?>&deg;
    </h2>

    <p class="lead">
      <?php echo $forecast['currently']['summary']; ?>
    </p>
    
    <p class="lead">
      Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
    </p>
    <p class="lead">
      Humidty: <?php echo $forecast['currently']['humidity']; ?> % 
    </p>
  </div>
  <div class="row">
    <?php foreach($forecast['daily']['data'] as $day): ?>
      <div class="col-12 col-md-4">
        <div class="card p-4 my-5 mx-auto" style="border-color: #91603b; max-width: 320px; border-width: 4px ">
          <p class="lead m-0">
            <?php echo gmdate("l", $day['time']); ?>
          </p>
          <h2 class="m-0">
            <?php echo round($day['temperatureHigh']); ?>&deg;
          </h2>
          <p class="lead text-left">
            <?php echo $day['summary']; ?>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
    <h2 class="display-3 py-4"><?php echo ucfirst($playlist_term); ?></h2>

      <section class="row">

      <?php foreach ($results->playlists->items as $playlist): ?>
        <div class="col-12 col-md-4 mb-4">
          <img class="img-fluid" src="<?php echo $playlist->images[0]->url;?>" width="320" height="320">
          <h2 class="h4 m-0">
            <a href="<?php echo $playlist->uri; ?>">
              <?php echo $playlist->name; ?></h2>
            </a>
          </h2>
        </div>
      <?php endforeach; ?>
  </div>
</main>
<?php include 'partials/footer.php'; ?>