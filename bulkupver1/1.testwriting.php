<!--検索フォーム -->
<div>
  <form action="<?php echo home_url(); ?>" method="GET">
    <input type="hidden" name="s">
    <table>
      <tbody>
        <tr>
          <th>カテゴリー01</th>
          <td>
            <div>
              <ul>
                <?php
                $taxonomies = 'tax_01';
                $args = array(
                  'hide_empty'    => false,
                  'orderby' => 'menu_order',
                  'parent' => 0
                );

                ?>
                <li>
                  <label>
                    <input type="checkbox" name="tax_01[]" value="all">
                    <span>すべて</span>
                  </label>
                </li>
                <?php
                $tax_01_terms = get_terms($taxonomies, $args);
                foreach ($tax_01_terms as $term) :
                  $term_name = $term->name;
                  $term_slug = $term->slug;
                  $term_id = $term->term_id;
                ?>
                  <li>
                    <label>
                      <input type="checkbox" name="tax_01[]" value="<?php echo $term_slug; ?>">
                      <span><?php echo $term_name; ?></span>
                    </label>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <th>カテゴリー02</th>
          <td>
            <div>
              <ul>
                <?php
                $taxonomies = 'tax_02';
                $args = array(
                  'hide_empty'    => false,
                  'orderby' => 'menu_order',
                  'parent' => 0
                );

                ?>
                <li>
                  <label>
                    <input type="checkbox" name="tax_02[]" value="all">
                    <span>すべて</span>
                  </label>
                </li>
                <?php
                $tax_02_terms = get_terms($taxonomies, $args);
                foreach ($tax_02_terms as $term) :
                  $term_name = $term->name;
                  $term_slug = $term->slug;
                  $term_id = $term->term_id;
                ?>
                  <li>
                    <label>
                      <input type="checkbox" name="tax_02[]" value="<?php echo $term_slug; ?>">
                      <span><?php echo $term_name; ?></span>
                    </label>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <button type="submit">
      この条件で検索する
    </button>
  </form>
</div>