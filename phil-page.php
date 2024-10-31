<style>
.philosophers {
  width: 160px;
}
.the_phil_img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.phil_name {
  margin: 5px;
  padding: 5px;
  border: 1px solid grey;
}
.phil_text {
  margin: 5px;
  padding: 5px;
  border: 1px solid grey;
}
</style>

<?php $fortune = phil_get_fortune(); ?>

<div class="philosophers">
  <div class="phil_img">
    <img src="<?= $fortune->image; ?>" class="the_phil_img"/>
  </div>
  <div class="phil_name">
    <?= $fortune->name; ?>
  </div>
  <div class="phil_text">
    <?= $fortune->text; ?>
  </div>
</div>

