<?php

$greade = "B";

switch($greade) {
    case "A":
        echo "nilai anda sangat baik";
        break;
    case "B":
        echo "nilai anda baik";
        break;
    case "C":
        echo "nilai anda cukup";
        break;
    case "D":
        echo "nilai anda kurang";
        break;
    default:
        echo "nilai anda tidak valid";
}