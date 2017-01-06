<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
</head>
<body>
    hello world!
    <?php foreach ($posts as $key => $value) {?>
        <h2><?php echo $value['title']?></h2>
    <?php }?>
</body>
</html>