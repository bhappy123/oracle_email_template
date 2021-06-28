<?php

$codes = (isset($_POST['htmlCodes'])) ? $_POST['htmlCodes'] : '<body><h1>Something Went Wrong</h1></body>';

$htmlCodes = '<html style="margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;-ms-text-size-adjust: 100%;margin: 0 auto !important;padding: 0 !important;height: 100% !important;width: 100% !important;">
 
<head style="-ms-text-size-adjust: 100%;">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" style="-ms-text-size-adjust: 100%;">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" style="-ms-text-size-adjust: 100%;">
    <link rel="preconnect" href="https://fonts.gstatic.com" style="-ms-text-size-adjust: 100%;">
    <link rel="stylesheet" href="./style.css">
    <script src="../script/app.js"></script>

    <style type="text/css">
        /* Remove space around the email design. */
        /* Stop Outlook resizing small text. */
        /* Stop Outlook from adding extra spacing to tables. */
    </style>
    <style type="text/css">
        body,
        table,
        td,
        ul,
        li,
        p,
        a,
        b {
            font-family: Arial, Helvetica, sans-serif !important;
        }
    </style>
</head>'.$codes.'</html>';

$myfile = fopen("../gen.html", "w") or die("Unable to open file!");
fwrite($myfile, $htmlCodes);
fclose($myfile);

echo json_encode(['htmlCodes'=>$htmlCodes]);