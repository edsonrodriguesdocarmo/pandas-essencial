<?php
$var_data = array(
  'title' => 'Welcome to Our Website',
  'content' => 'This is the homepage...',
  'footer' => '© 2024 Our Company. All rights reserved.',
);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste PHP</title>
</head>
<body>

<?php
echo "<h1>{$var_data['title']}</h1>";
echo "<p>{$var_data['content']}</p>";
echo "<footer>{$var_data['footer']}</footer>";
?>

</body>
</html>