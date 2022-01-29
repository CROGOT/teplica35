<?php function rating($n){ ?>
  <div class="rating">
    <div class="d-flex justify-content-center rating-group">
      <? for($i=0;$i<5;$i++): ?>
      <div class="rating_star">
        <svg class="star_svg svg-fill <?=($i<$n)?'fill':'';?>" role="img" aria-label="Tools">
          <use xlink:href="bootstrap-icons.svg#star-fill"/>
        </svg>
      </div>
      <? endfor; ?>
    </div>
  </div>
<?};?>