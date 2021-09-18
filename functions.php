<?php

function antiRunTags($data){
    return htmlspecialchars(stripcslashes(trim($data)));
}
