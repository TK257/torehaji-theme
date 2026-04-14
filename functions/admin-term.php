<?php

//※ここから先をコピペ

function my_custom_column($columns)
{
  $columns['gym_tag'] = 'ジムタグ';
  return $columns;
}
add_filter('manage_personal_gym_posts_columns', 'my_custom_column');

function my_custom_column_id($column_name, $id)
{
  $terms = get_the_terms($id, $column_name);
  if ($terms && !is_wp_error($terms)) {
    $menu_terms = array(); //変数名は任意
    foreach ($terms as $term) {
      $menu_terms[] = $term->name;
    }
    echo join(", ", $menu_terms);
  }
}
add_action('manage_personal_gym_posts_custom_column', 'my_custom_column_id', 10, 2);
function my_add_filter()
{
  global $post_type;
  if ('personal_gym' == $post_type) {
?>
    <select name="gym_tag">
      <option value="">すべてのジムタグ</option>
      <?php
      $terms = get_terms('gym_tag');
      foreach ($terms as $term) {
      ?>
        <option value="<?php echo $term->slug; ?>" <?php if (isset($_GET['gym_tag']) && $_GET['gym_tag'] == $term->slug) {
                                                      print 'selected';
                                                    } ?>><?php echo $term->name; ?>
          　　　　　</option>
      <?php
      }
      ?>
    </select>
<?php
  }
}
add_action('restrict_manage_posts', 'my_add_filter');
