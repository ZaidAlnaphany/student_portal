<?php

$students = ["أحمد", "سارة", "محمد", "ليلى", "خالد"];


foreach ($students as $name) {
    echo "مرحبًا $name, نتمنى لك حظًا سعيدًا في الامتحان!<br>";
}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        echo "<span style='color:blue;'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}

