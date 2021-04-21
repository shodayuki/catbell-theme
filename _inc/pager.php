<div class="pager">
  <?php global $wp_rewrite;
    $pagenate_base = get_pagenum_link((1));
    if (strpos($pagenate_base, '?') || ! $wp_rewrite->using_permalinks()){
      $pagenate_format = '';
      $pagenate_base = add_query_arg('paged', '%#%');
    }
    else {
      $pagenate_format = (substr($pagenate_base,-1,1) == '/' ? '' : '/').
      user_trailingslashit('page/%#%/', 'paged');
      $pagenate_base .= '%_%';
    }
    echo pagenate_links(array(
      'base' => $pagenate_base,
      'format' => $pagenate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 3,
      'current' => ($paged ? $paged : 1),
      'prev_text' => '«',
      'next_text' => '»',
    ));
  ?>
</div>