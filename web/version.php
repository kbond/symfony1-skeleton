<?php
/**
 * For Staging environment
 *
 * Include at end of in index.php
 */

$has_version = file_exists("../VERSION");
$has_build = file_exists("../BUILD");
?>

<?php if ($has_build || $has_version): ?>
  <?php
  /**
   *  used with Hudson CI
   *
   *  Execute shell:
   *    #set build number
   *    touch build
   *    echo "${BUILD_NUMBER}" > BUILD
   */


  if ($has_version)
    $version = explode("\n", file_get_contents("../VERSION"));

  if ($has_build)
    $build = file_get_contents("../BUILD");

  ?>

<style type="text/css">
  #ci-build { color: #666; font-size: 0.9em; text-align: left; margin: 10px 0 0 0; padding: .5em; background: #eee; width: 10em; position: fixed; bottom: 0; right: 0; }
  #ci-build dt { font-weight: normal; float: left; width: 60px; clear: both; }
  #ci-build dd { font-weight: bold; }
</style>
<dl id="ci-build">
  <dt>Version</dt>
  <dd><?php echo $version[0] ?></dd>

    <?php if (array_key_exists(1, $version)): ?>
  <dt>Stability</dt>
  <dd><?php echo $version[1] ?></dd>
    <?php endif; ?>

    <?php if (isset ($build)): ?>
  <dt>Build</dt>
  <dd><?php echo $build ?></dd>
    <?php endif; ?>
</dl>
<?php endif; ?>