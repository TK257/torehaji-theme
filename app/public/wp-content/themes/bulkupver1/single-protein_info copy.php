<?php /** * Template Name: protein *//** * Template Post Type: post,protein_info */  get_header(); ?>
<!--表を挿入できるようにする前の状態（念のため保存）-->
<article>
  <section>
    <div class="container"> 
      <div class="breadcrumb"><?php get_template_part('functions/breadcrumb'); ?></div>
      <h1><?php echo get_the_title(); ?></h1>
      <table class="table_left"> 
        <tr class="table_none">
          <th class="th_color_none"> プロテインの種類</th>
          <td class="itembox itembox_blue">
            <ul>
              <li><?php $terms = get_the_terms($post->ID, 'protein_type'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
            </ul>
          </td>
        </tr>
        <tr class="table_none">
          <th class="th_color_none">プロテインのブランド</th>
          <td class="itembox itembox_darkblue">
            <ul>
              <li><?php $terms = get_the_terms($post->ID, 'protein_brand'); foreach($terms as $term): echo $term->name; ?> <?php endforeach;?></li>
            </ul>
          </td>
        </tr>
        <tr class="table_none">
          <th class="th_color_none">フレーバーの種類</th>
          <td class="itembox itembox_border">
            <ul><?php $terms = get_the_terms($post->ID, 'protein_flavor'); foreach($terms as $term): { echo '<li>'; echo $term->name; echo '</li>';}?> <?php endforeach;?></ul>
          </td>
        </tr>
      </table>
      <div><?php the_field('no1flavor'); ?>での計算</div>
      <table class="table_base table_left textleft mar_top20">
        <tr> 
          <th>1食あたりの価格</th>
          <td><?php the_field('per1price'); ?>円/食</td>
        </tr>
        <tr>
          <th>1食あたりのグラム数</th>
          <td><?php the_field('per1'); ?>g/食</td>
        </tr>
        <tr>
          <th>1食あたりのタンパク質量</th>
          <td><?php the_field('per1protain'); ?>g/食</td>
        </tr>
        <tr>
          <th>1kgあたりの価格</th>
          <td><?php the_field('per1kgprice'); ?>円/kg</td>
        </tr>
      </table>
      <p class="flex-center-center">パッケージ画像</p>
      <div class="slideshow-protein">
        <div id="slideshow-image"><img src="<?php if (!empty(get_field('gym_photo01'))) :?><?php the_field('gym_photo01'); ?><?php endif; ?>"></div>
        <ul class="thumbnail" id="thumbnail">
          <li><img src="<?php if (!empty(get_field('gym_photo01'))) :?><?php the_field('gym_photo01'); ?><?php endif; ?>"></li><?php if (!empty(get_field('gym_photo02'))) :?>
          <li><img src="<?php the_field('gym_photo02'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo03'))) :?>
          <li><img src="<?php the_field('gym_photo03'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo04'))) :?>
          <li><img src="<?php the_field('gym_photo04'); ?>"></li><?php endif; ?>
<?php if (!empty(get_field('gym_photo05'))) :?>
          <li><img src="<?php the_field('gym_photo05'); ?>"></li><?php endif; ?>
        </ul>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <h2 class="h2_dotglay"><?php the_field('name'); ?>の商品説明</h2><?php the_content(); ?>
      <!--h3.protein span.midashi.midashi_orange オススメポイント
      -->
      <!--div <?php the_content(); ?>-->
      <!--h3.protein -->
      <!--h3.protein span.midashi.midashi_darkblue 特徴
      -->
      <!--div <?php the_field('tokutyou'); ?>--><?php if(get_field('review') == 1): ?>★☆☆☆☆
<?php elseif(get_field('review') == 2): ?>★★☆☆☆
<?php elseif(get_field('review') == 3): ?>★★★☆☆
<?php elseif(get_field('review') == 4): ?>★★★★☆
<?php elseif(get_field('review') == 5): ?>★★★★★
<?php endif; ?>
      <h3 class="protein"> <span class="midashi midashi_lightblue">栄養成分表示</span></h3>
      <p>１食（<?php the_field('per1'); ?>）gあたり</p>
      <table class="table_yoko"> 
        <tr>
          <th class="flavor">フレーバー </th>
          <th class="kpfc">カロリー</th>
          <th class="kpfc">タンパク質</th>
          <th class="kpfc">脂質</th>
          <th class="kpfc">炭水化物</th>
        </tr>
        <tr><?php if (!empty(get_field('flavor1'))) :?>
          <td class="flavor"> <?php the_field('flavor1'); ?></td>
          <td class="kpfc"><?php the_field('kcal1'); ?>kcal</td>
          <td class="kpfc"><?php the_field('protein1'); ?>g</td>
          <td class="kpfc"><?php the_field('fat1'); ?>g</td>
          <td class="kpfc"><?php the_field('carbo1'); ?>g</td><?php endif; ?>
        </tr>
        <tr><?php if (!empty(get_field('flavor2'))) :?>
          <td class="flavor"> <?php the_field('flavor2'); ?></td>
          <td class="kpfc"><?php the_field('kcal2'); ?>kcal</td>
          <td class="kpfc"><?php the_field('protein2'); ?>g</td>
          <td class="kpfc"><?php the_field('fat2'); ?>g</td>
          <td class="kpfc"><?php the_field('carbo2'); ?>g</td><?php endif; ?>
        </tr>
        <tr><?php if (!empty(get_field('flavor3'))) :?>
          <td class="flavor"> <?php the_field('flavor3'); ?></td>
          <td class="kpfc"><?php the_field('kcal3'); ?>kcal</td>
          <td class="kpfc"><?php the_field('protein3'); ?>g</td>
          <td class="kpfc"><?php the_field('fat3'); ?>g</td>
          <td class="kpfc"><?php the_field('carbo3'); ?>g</td><?php endif; ?>
        </tr>
        <tr><?php if (!empty(get_field('flavor4'))) :?>
          <td class="flavor"> <?php the_field('flavor4'); ?></td>
          <td class="kpfc"><?php the_field('kcal4'); ?>kcal</td>
          <td class="kpfc"><?php the_field('protein4'); ?>g</td>
          <td class="kpfc"><?php the_field('fat4'); ?>g</td>
          <td class="kpfc"><?php the_field('carbo4'); ?>g</td><?php endif; ?>
        </tr>
        <tr><?php if (!empty(get_field('flavor5'))) :?>
          <td class="flavor"> <?php the_field('flavor5'); ?></td>
          <td class="kpfc"><?php the_field('kcal5'); ?>kcal</td>
          <td class="kpfc"><?php the_field('protein5'); ?>g</td>
          <td class="kpfc"><?php the_field('fat5'); ?>g</td>
          <td class="kpfc"><?php the_field('carbo5'); ?>g</td><?php endif; ?>
        </tr>
      </table>
      <h3 class="protein"> <span class="midashi midashi_lightblue">飲み方</span></h3>
      <div><?php the_field('nomikata'); ?></div>
      <h3 class="protein"> <span class="midashi midashi_lightblue">サイズ展開</span></h3>
      <table class="table_yoko"> 
        <tr>
          <th class="flavor">フレーバー </th>
          <th><?php the_field('size1'); ?></th>
          <th><?php the_field('size2'); ?></th><?php if (!empty(get_field('size3'))) :?>
          <th><?php the_field('size3'); ?></th><?php endif; ?>
<?php if (!empty(get_field('size4'))) :?>
          <th><?php the_field('size4'); ?></th><?php endif; ?>
<?php if (!empty(get_field('size5'))) :?>
          <th><?php the_field('size5'); ?></th><?php endif; ?>
<?php if (!empty(get_field('size6'))) :?>
          <th><?php the_field('size6'); ?></th><?php endif; ?>
<?php if (!empty(get_field('size7'))) :?>
          <th><?php the_field('size7'); ?></th><?php endif; ?>
<?php if (!empty(get_field('size8'))) :?>
          <th><?php the_field('size8'); ?></th><?php endif; ?>
        </tr>
        <tr>
          <th class="flavor"> <?php the_field('flavor1'); ?></th>
          <td class="td_center"><?php the_field('size1umu'); ?></td>
          <td class="td_center"><?php the_field('size2umu'); ?></td>
          <td class="td_center"><?php the_field('size3umu'); ?></td><?php if (!empty(get_field('size4umu'))) :?>
          <td class="td_center"><?php the_field('size4umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('size5umu'))) :?>
          <td class="td_center"><?php the_field('size5umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('size6umu'))) :?>
          <td class="td_center"><?php the_field('size6umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('size7umu'))) :?>
          <td class="td_center"><?php the_field('size7umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('size8umu'))) :?>
          <td class="td_center"><?php the_field('size8umu'); ?></td><?php endif; ?>
        </tr><?php if (!empty(get_field('flavor2'))) :?>
        <tr>
          <th class="flavor"> <?php the_field('flavor2'); ?></th>
          <td class="td_center"><?php the_field('f2size1umu'); ?></td>
          <td class="td_center"><?php the_field('f2size2umu'); ?></td>
          <td class="td_center"><?php the_field('f2size3umu'); ?></td><?php if (!empty(get_field('f2size4umu'))) :?>
          <td class="td_center"><?php the_field('f2size4umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f2size5umu'))) :?>
          <td class="td_center"><?php the_field('f2size5umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f2size6umu'))) :?>
          <td class="td_center"><?php the_field('f2size6umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f2size7umu'))) :?>
          <td class="td_center"><?php the_field('f2size7umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f2size8umu'))) :?>
          <td class="td_center"><?php the_field('f2size8umu'); ?></td><?php endif; ?>
        </tr><?php endif; ?>
<?php if (!empty(get_field('flavor3'))) :?>
        <tr>
          <th class="flavor"> <?php the_field('flavor3'); ?></th>
          <td class="td_center"><?php the_field('f3size1umu'); ?></td>
          <td class="td_center"><?php the_field('f3size2umu'); ?></td>
          <td class="td_center"><?php the_field('f3size3umu'); ?></td><?php if (!empty(get_field('f3size4umu'))) :?>
          <td class="td_center"><?php the_field('f3size4umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f3size5umu'))) :?>
          <td class="td_center"><?php the_field('f3size5umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f3size6umu'))) :?>
          <td class="td_center"><?php the_field('f3size6umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f3size7umu'))) :?>
          <td class="td_center"><?php the_field('f3size7umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f3size8umu'))) :?>
          <td class="td_center"><?php the_field('f3size8umu'); ?></td><?php endif; ?>
        </tr><?php endif; ?>
<?php if (!empty(get_field('flavor4'))) :?>
        <tr>
          <th class="flavor"> <?php the_field('flavor4'); ?></th>
          <td class="td_center"><?php the_field('f4size1umu'); ?></td>
          <td class="td_center"><?php the_field('f4size2umu'); ?></td>
          <td class="td_center"><?php the_field('f4size3umu'); ?></td><?php if (!empty(get_field('f4size4umu'))) :?>
          <td class="td_center"><?php the_field('f4size4umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f4size5umu'))) :?>
          <td class="td_center"><?php the_field('f4size5umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f4size6umu'))) :?>
          <td class="td_center"><?php the_field('f4size6umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f4size7umu'))) :?>
          <td class="td_center"><?php the_field('f4size7umu'); ?></td><?php endif; ?>
<?php if (!empty(get_field('f4size8umu'))) :?>
          <td class="td_center"><?php the_field('f4size8umu'); ?></td><?php endif; ?>
        </tr><?php endif; ?>
      </table>
      <h3 class="protein"> <span class="midashi midashi_lightblue">サイズ毎の価格</span></h3>
      <table class="table_base"> 
        <tr> 
          <th></th>
          <th colspan="2"> サイズ</th>
          <th></th>
          <th></th>
        </tr>
        <tr>
          <th></th>
          <th>価格</th>
          <th>１食あたりの価格</th>
          <th>価格</th>
          <th>１食あたりの価格</th>
        </tr>
        <tr> 
          <th><?php the_field('size1'); ?>g</th>
          <td><?php the_field('size1price'); ?>円</td>
          <td><?php the_field('size1perprice'); ?>円</td>
        </tr>
        <tr> 
          <th><?php the_field('size2'); ?>g</th>
          <td><?php the_field('size2price'); ?>円</td>
          <td><?php the_field('size2perprice'); ?>円</td>
        </tr>
        <tr> 
          <th><?php the_field('size3'); ?>g</th>
          <td><?php the_field('size3price'); ?>円</td>
          <td><?php the_field('size3perprice'); ?>円</td>
        </tr><?php if (!empty(get_field('size4'))) :?>
        <tr> 
          <th><?php the_field('size4'); ?>g</th>
          <td><?php the_field('size4price'); ?>円</td>
          <td><?php the_field('size4perprice'); ?>円</td>
        </tr><?php endif; ?>
<?php if (!empty(get_field('size5'))) :?>
        <tr> 
          <th><?php the_field('size5'); ?>g</th>
          <td><?php the_field('size5price'); ?>円</td>
          <td><?php the_field('size5perprice'); ?>円</td>
        </tr><?php endif; ?>
<?php if (!empty(get_field('size6'))) :?>
        <tr> 
          <th><?php the_field('size6'); ?>g</th>
          <td><?php the_field('size6price'); ?>円</td>
          <td><?php the_field('size6perprice'); ?>円</td>
        </tr><?php endif; ?>
      </table>
      <div class="btn-basyo">
        <div class="flex-center-center">
          <button class="btn2 btn2-blue"><a href="<?php the_field('amazonlink'); ?>" rel="nofollow">アマゾンでの購入はこちらから</a></button>
        </div>
        <div class="flex-center-center">
          <button class="btn2 btn2-green"><a href="&lt;?php the_field('iherblink'); ?&gt;" rel="nofollow">iHerb（アイハーブ/サプリメント総合サイト）での購入はこちら</a></button>
        </div>
      </div>
    </div>
  </section>
  <section> </section>
</article><?php get_footer(); ?>