<?php

///////// IF ---- qual categoria o post se encaixa (cor do titulo)
if (has_term('destaque', 'tiposldt')) {
    $catColorRight = 'deLorean_title-green';
} elseif (has_term('noticia', 'tiposldt')) {
    $catColorRight = 'deLorean_title-red';
} elseif (has_term('curiosidade', 'tiposldt')) {
    $catColorRight = 'deLorean_title-red';
} elseif (has_term('foto', 'tiposldt')) {
    $catColorRight = 'deLorean_title-green';
} else {
    $catColorRight = 'deLorean_title-generic';
}
?>