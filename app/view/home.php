<?php
if (empty($data)) {
    $data = 'Data Is Empty';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <h1>Hello World</h1>
    <h3>Data Is:</h3>
    <h4><?php var_dump($data); ?></h4>
</body>
</html>