<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Post Page</title>
</head>
<body>
    <h1>Welcome to the Post Page.</h1>
    <?php if (isset($args[0])) { ?>
        <p>Look up id number <?= $args[0]; ?> in the database.</p>
    <?php } ?>
</body>
</html>