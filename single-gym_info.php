<?php /** * Template Name: 都道府県一覧付き *//** * Template Post Type: post,gym_info */  get_header(); ?>
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <div><?php while ( have_posts() ) : the_post(); ?></div>
      <div class="thum"><?php the_post_thumbnail(); ?></div>
      <h1><?php echo get_the_title(); ?></h1>
      <div>
         <?php the_content(); ?>
<?php endwhile; ?>
        <input class="tab-input" id="tab-a" type="" role="tab" name="tab-radio" value="usage" checked>
        <h3 class="tab-label-heading selected">
          <label class="tab-label" for="tab-a">関東</label>
        </h3>
        <input class="tab-input" id="tab-b" type="radio" role="tab" name="tab-radio" value="type">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-b">近畿</label>
        </h3>
        <input class="tab-input" id="tab-c" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-c">中部</label>
        </h3>
        <input class="tab-input" id="tab-d" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-d">北海道</label>
        </h3>
        <input class="tab-input" id="tab-e" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-e">東北</label>
        </h3>
        <input class="tab-input" id="tab-f" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-f">中国</label>
        </h3>
        <input class="tab-input" id="tab-g" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-g">四国</label>
        </h3>
        <input class="tab-input" id="tab-h" type="radio" role="tab" name="tab-radio" value="maker">
        <h3 class="tab-label-heading">
          <label class="tab-label" for="tab-h">九州・沖縄</label>
        </h3>
        <div class="tab-panel panel-a" role="tabpanel">
          <div>
            <p>関東の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-b" role="tabpanel">
          <div>
            <p>近畿の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-c" role="tabpanel">
          <div>
            <p>中部の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-d" role="tabpanel">
          <div>
            <p>北海道の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-e" role="tabpanel">
          <div>
            <p>東北の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-f" role="tabpanel">
          <div>
            <p>中国の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-g" role="tabpanel">
          <div>
            <p>四国の中身</p>
          </div>
        </div>
        <div class="tab-panel panel-h" role="tabpanel">
          <div>
            <p>九州・沖縄の中身</p>
          </div>
        </div><br>
      </div>
      <div>
        <button class="js-tabbtn active" type="button" data-tab="kanto">関東</button>
        <button class="js-tabbtn" type="button" data-tab="kinki">近畿</button>
        <button class="js-tabbtn" type="button" data-tab="chubu">中部</button>
        <button class="js-tabbtn" type="button" data-tab="hokkaido">北海道</button>
        <button class="js-tabbtn" type="button" data-tab="tohoku">東北</button>
        <button class="js-tabbtn" type="button" data-tab="chugoku">中国</button>
        <button class="js-tabbtn" type="button" data-tab="shikoku">四国</button>
        <button class="js-tabbtn" type="button" data-tab="kyushu">九州・沖縄</button>
      </div>
      <div> 
        <div class="js-tabbox active" data-tab="kanto">関東の中身</div>
        <div class="js-tabbox" data-tab="kinki">近畿の中身</div>
        <div class="js-tabbox" data-tab="chubu">中部の中身</div>
        <div class="js-tabbox" data-tab="hokkaido">北海道の中身</div>
        <div class="js-tabbox" data-tab="tohoku">東北の中身</div>
        <div class="js-tabbox" data-tab="chugoku">中国の中身</div>
        <div class="js-tabbox" data-tab="shikoku">四国の中身</div>
        <div class="js-tabbox" data-tab="kyushu">九州・沖縄の中身</div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>