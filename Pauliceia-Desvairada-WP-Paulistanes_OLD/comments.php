<?php

$comment_args = array(
    'title_reply' => '',
    'fields' => apply_filters('comment_form_default_fields', array(
        //fields do Form de Comentarios
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Palavra') . '</label> ' .
        '<input id="author" name="author" type="text" value=" " size="30" /></p>',
        'email' => "", //remove field email
        'url' => "")), //remove field url
    'comment_field' => '<p>' .
    '<label for="comment">' . __('Descri&ccedil;&atilde;o') . '</label>' .
    '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
    '</p>',
    'comment_notes_before' => '',
    'comment_notes_after' => '',
);

comment_form($comment_args);
?>

