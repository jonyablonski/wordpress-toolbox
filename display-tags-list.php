<?php
  $tags = get_tags();
  $html = '<li>';
  foreach ( $tags as $tag ) {
    $tag_link = get_tag_link( $tag->term_id );
    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
    $html .= "{$tag->name}</a>";
  }
  $html .= '</li>';
  echo $html;
?>