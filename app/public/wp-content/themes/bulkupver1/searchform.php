<p><i class="fa-solid fa-magnifying-glass"></i>プロテインの種類から探す</p>
<form action="<?php echo home_url(); ?>" method="GET">
  <input type="hidden" name="s">
  <table class="searchtable">
    <tr>
      <?php
      $taxonomies = 'protein_type';
      $args = array(
        'hide_empty'    => false,
        'orderby' => 'menu_order',
        'parent' => 0
      );
      ?>
      <?php
      $protein_type_terms = get_terms($taxonomies, $args);
      foreach ($protein_type_terms as $term) :
        $term_name = $term->name;
        $term_slug = $term->slug;
        $term_id = $term->term_id;
      ?>
        <td>
          <input type="radio" name="protein_type[]" id="<?php echo $term_name; ?>" value="<?php echo $term_slug; ?>">
          <label for="<?php echo $term_name; ?>" class="radio01">
            <span><?php echo $term_name; ?></span>
          </label>
        </td>
      <?php endforeach; ?>
    </tr>
  </table>
  <p><i class="fa-solid fa-magnifying-glass"></i>プロテインのブランドから探す</p>
  <table class="searchtable">
    <tr>
      <?php
      $taxonomies = 'protein_brand';
      $args = array(
        'hide_empty'    => false,
        'orderby' => 'menu_order',
        'parent' => 0
      );
      ?>
      <?php
      $protein_brand_terms = get_terms($taxonomies, $args);
      foreach ($protein_brand_terms as $term) :
        $term_name = $term->name;
        $term_slug = $term->slug;
        $term_id = $term->term_id;
      ?>
        <td>
          <input type="checkbox" name="protein_brand[]" id="<?php echo $term_name; ?>" value="<?php echo $term_slug; ?>">
          <label for="<?php echo $term_name; ?>" class="checkbox01">
            <span><?php echo $term_name; ?></span>
          </label>
        </td>
      <?php endforeach; ?>
    </tr>
  </table>
  <p><i class="fa-solid fa-magnifying-glass"></i>プロテインの味から探す</p>
  <table class="searchtable">
    <tr>
      <?php
      $taxonomies = 'protein_flavor';
      $args = array(
        'hide_empty'    => false,
        'orderby' => 'menu_order',
        'parent' => 0
      );
      ?>
      <?php
      $protein_flavor_terms = get_terms($taxonomies, $args);
      foreach ($protein_flavor_terms as $term) :
        $term_name = $term->name;
        $term_slug = $term->slug;
        $term_id = $term->term_id;
      ?>
        <td>
          <input type="checkbox" name="protein_flavor[]" id="<?php echo $term_name; ?>" value="<?php echo $term_slug; ?>">
          <label for="<?php echo $term_name; ?>" class="checkbox01">
            <span><?php echo $term_name; ?></span>
          </label>
        </td>
      <?php endforeach; ?>
    </tr>
  </table>
  </tbody>
  <button class="btn-search btn2 btn2-blue" type="submit">
    この条件で検索する
  </button>
</form>