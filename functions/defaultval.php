<?php
function funame($firstName, $lastName="") {
    if (!empty($lastName)) {
        return "$firstName $lastName";
    } else {
        return $firstName;
    }
}

echo funame("thiru", "varasu")."\n"; 
echo funame("bheem");

?>