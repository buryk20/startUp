<?php
$jsonData = file_get_contents('./data/output.json');

$data = json_decode($jsonData, true);

// var_dump($data);

$html = '<html>
<head>
<title>JSON to HTML</title>
</head>
<body>';

// var_dump($data[0]["name"]["ru-UA"]);

foreach ($data as $item) {
    // Добавляем элементы в HTML-таблицу
    $html .= '<div  style="background-color: red; margin-bottom: 16px;">';
    $html .= '<h1>' . $item["name"]["ru-UA"] . '</h1>';
    $html .= '<h2>' . $item["titleSeo"]["ru-UA"] . '</h2>';
    $html .= '<p>' . $item["descriptionSeo"]["ru-UA"] . '</p>';
    $html .= '</div>';
}

// Завершаем HTML-страницу
$html .= '</body>
</html>';

// Выводим HTML-страницу
echo $html;

?>