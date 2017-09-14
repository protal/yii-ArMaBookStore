<?php
use yii\web\View;
$str = <<<EOT
  $(".test").click(function(){
    alert("test");
  })
EOT;
$this->registerJS($str,View::POS_LOAD,'form-js');

 ?>
<button type="button" class="btn btn-default" name="test">

</button>
