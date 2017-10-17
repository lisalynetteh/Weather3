<form action="forecast.php" method="post" class="animated fadeInUp form-inline">

    <label class="sr-only" for="location">Location</label>
    <input type="text" class="m-2 form-control" id="location" aria-describedby="location-help" placeholder="Location" name="location" value="<?php echo (isset($_POST['location']) ? $_POST['location'] : '') ?>">
     <button type="submit" name="submit" class="btn">Submit</button>
</form>




