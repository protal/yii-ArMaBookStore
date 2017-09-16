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
      <?= Alert::widget() ?>
      <?= $content ?>
  </section>
