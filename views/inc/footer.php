<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
    <script src="<?php echo asset_url('js/vendor/jquery-1.10.2.min.js'); ?>"></script>
    <script src="<?php echo asset_url('js/vendor/bootstrap.min.js'); ?>"></script>

    <?php
      if ( ! empty ($js_foot) AND is_array ($js_foot)) {
        foreach ($js_foot as $value) {
          echo "\r\n".'    <script src="'.$value.'"></script>';
        }
      }
    ?>

  </body>
</html>
