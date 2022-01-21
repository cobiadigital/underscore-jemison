
<div class="row mt-5">
    <?php foreach( $attributes['column'] as $inner ): ?>
      <div class="col-sm">
         <div class="card">
          <?php if ( isset( $inner['header-image']['url'] ) ) : ?>
              <img src="<?php echo esc_url( $inner['header-image']['url'] ); ?>"
              alt="<?php echo esc_attr( $inner['header-image']['alt'] ); ?>">
          <?php endif; ?>

            <div class="card-body">
                <h5 class="card-title"><?php echo $inner['header']; ?></h5>
                <p class="card-text"><?php echo $inner['description']; ?></p>
                <a href="<?php echo esc_url( $inner['link'] ); ?>" class="btn btn-primary">Learn more...</a>
            </div>
          </div>
    </div>
    <?php endforeach; ?>