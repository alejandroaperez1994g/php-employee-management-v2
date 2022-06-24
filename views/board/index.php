<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>This is the Dashboard</h1>
</body>
<?php
if (isset($this->employees)) {
    echo "<pre>";
    print_r($this->employees);
    echo "</pre>";

    if (isset($message)) {
        echo $message;
    }
}

?>

</html>