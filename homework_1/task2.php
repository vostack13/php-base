<?php

const ALL_PICTURES = 80;
const MARKER_PICTURES = 23;
const PENCIL_PICTURES = 40;

const PAINTS_PICTURES = ALL_PICTURES - MARKER_PICTURES - PENCIL_PICTURES;

echo '<pre>';
echo 'Всего на школьной выставке <strong>' . ALL_PICTURES . '</strong> рисунков, из них:';

echo '<ul>' .
    '<li>' . MARKER_PICTURES . ' выполенны фломастерами</li>' .
    '<li>' . PENCIL_PICTURES . ' выполенны фломастерами</li>' .
    '</ul>';

echo 'Ответ: <i>' . PAINTS_PICTURES . ' рисунков выполенны красками</i>';
