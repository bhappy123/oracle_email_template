<?php
$colors = [
    'red' => '#ff0000',
    'blue' => '#0000ff',
    'green' => '#008000',
    'yellow' => '#ffff00',
    'purple' => '#800080',
    'orange' => '#ffa500',
    'brown' => '#a52a2a',
    'black' => '#000000',
    'white' => '#ffffff',
    'pink' => '#ffc0cb',
];

$submitted = FALSE;

if (isset($_GET['submit'])) {

    $submitted   = TRUE;
    $color_value = '';
    $color_name  = 'invalid color';
    $your_color  = htmlentities($_GET['color']);
    $your_name   = htmlentities($_GET['name']);

    if (in_array(strtolower($your_color), $colors)) {
        $color_value = $colors[$your_color];
        $color_name  = ucwords($your_color);
    }
    // note: if you used post (i.e., to change stored data) you would take action here and then REDIRECT to this or another page. This is called the post/redirect/get pattern)
}
?>
<html>

<head>
</head>

<body>
    <?php if ($submitted) : ?>
        <p> Hello <?= $your_name ?></p>
        <p style="color: <?= $color_value ?>">Your Favorite Color is <?= ucwords($color_name) ?> </p>
    <?php endif; ?>
    <form method="get">
        <div>
            <label>Your name:
                <input type="text" name="name">
            </label>
        </div>
        <div>
            <label>Favorite color:
                <input type="text" name="color">
            </label>
        </div>

        <input name="submit" type="submit" value="submit" />

    </form>
</body>

</html>