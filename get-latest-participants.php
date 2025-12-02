<?php
header('Content-Type: application/json');

// هنا بيانات المشاركين (يمكن ربطها بقاعدة بيانات لاحقًا)
$participants = [
    ["name" => "المشارك 1", "img" => "images/user1.jpg"],
    ["name" => "المشارك 2", "img" => "images/user2.jpg"]
];

// تكوين HTML
$html = '';
foreach($participants as $p){
    $html .= "<div class='participant-gallery-item'>
                <img src='{$p['img']}' alt='{$p['name']}'/>
                <p>{$p['name']}</p>
              </div>";
}

// إرجاع JSON
echo json_encode(["html" => $html]);
?>
