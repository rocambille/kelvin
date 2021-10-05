<?php

$options = [
  'options' => array(
    'min_range' => 0,
  ),
];

$kelvin = filter_var($_POST["temperature"], FILTER_VALIDATE_INT, $options);

if ($kelvin !== false) {
  $celsius = $kelvin - 273.15;
} else {
  $error = "la température est invalide";
}
?>
<!DOCTYPE html>
<form action="" method="post">
  <label for="temperature">température (°K)</label>
  <input id="temperature" name="temperature" type="number" />
  <button type="submit">Submit</button>
</form>
<?php if (isset($error)): ?>
  <p><?= $error ?></p>
<?php else: ?>
  <p><?= $celsius ?> °C</p>
<?php endif ?>
