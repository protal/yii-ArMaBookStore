<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
  <section class="content-header">
      <?=
      Breadcrumbs::widget(
          [
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]
      ) ?>
  </section>
  <section class="content">
      <?php //=Alert::widget() ?>

      <?php
      $session = \Yii::$app->getSession();
      $flashes = $session->getAllFlashes();


      foreach ($flashes as $type => $data) {
        ?>
          <div class="alert alert-<?=$type?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
            <?=$data?>
          </div>

        <?php
      }

       ?>





      <?= $content ?>
  </section>
