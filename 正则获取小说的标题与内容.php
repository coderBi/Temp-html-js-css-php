<?php
$str = "��1��\n����1\n�ڶ���\n����2\n������\n������";
$regex = "/(��.*��)\n(.*)(?=\n��.*��)/sU";
preg_match_all($regex,$str,$result);
var_dump($result);