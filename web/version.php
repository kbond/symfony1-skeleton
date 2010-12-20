<?php
preg_match("/(?<=name=)[\w\d-]+/", file_get_contents("../config/properties.ini"), $project);
$project = $project[0];

$build = file_exists("../BUILD_NUMBER");
$version = file_exists("../VERSION");
?>

<style type="text/css">
  #ci-build { color: #666; font-size: 0.9em; text-align: left; margin: 10px 0 0 0; padding: 5px 8px; background: #eee; width: 10em; position: fixed; bottom: 0; right: 0; }
  #ci-build p { margin: 0 0 3px; font-weight: bold; }
  #ci-build dl { margin: 0; }
  #ci-build dt { font-weight: normal; float: left; width: 60px; clear: both; }
  #ci-build dd { font-weight: bold; }
</style>

<div id="ci-build">
  <p><?php echo $project ?></p>
  <dl>
    <?php if ($version): ?>
      <dt>Version</dt>
      <dd><?php echo file_get_contents("../VERSION") ?></dd>
    <?php endif; ?>
    <?php if ($build): ?>
        <dt>Build</dt>
        <dd><?php echo file_get_contents("../BUILD_NUMBER") ?></dd>
    <?php endif; ?>
  </dl>
</div>