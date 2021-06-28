<?php
if (isset($_POST['one_one_submit'])) {
    $newsletter_number = $_POST['newsletter_number'];


    $one_one_heading_color = $_POST['one_one_heading_color'];
    $one_one_subheading_color = $_POST['one_one_subheading_color'];
    $one_one_points_color = $_POST['one_one_points_color'];

    $second_row_heading_color = $_POST['second_row_heading_color'];
    $second_row_subheading_color = $_POST['second_row_subheading_color'];
    $second_row_points_color = $_POST['second_row_points_color'];

    $third_row_heading_color = $_POST['third_row_heading_color'];
    $third_row_subheading_color = $_POST['third_row_subheading_color'];
    $third_row_points_color = $_POST['third_row_points_color'];

    $fourth_row_heading_color = $_POST['fourth_row_heading_color'];
    $fourth_row_subheading_color = $_POST['fourth_row_subheading_color'];
    $fourth_row_points_color = $_POST['fourth_row_points_color'];

    $first_row_background_color = $_POST['first_row_background_color'];
    $second_row_background_color = $_POST['second_row_background_color'];
    $third_row_background_color = $_POST['third_row_background_color'];
    $fourth_row_background_color = $_POST['fourth_row_background_color'];


    $one_one_image_url = $_POST['one_one_image_url'];
    $one_one_see_more_url = $_POST['one_one_see_more_url'];
    $one_one_heading_title = $_POST['one_one_heading_title'];
    $one_one_subheading_title = $_POST['one_one_subheading_title'];
    $one_one_points = explodePoints( $_POST['one_one_points']);
    

    $one_two_heading_title = $_POST['one_two_heading_title'];
    $one_two_subheading_title = $_POST['one_two_subheading_title'];
    $one_two_points = explodePoints( $_POST['one_two_points']);
    $one_two_image_url = $_POST['one_two_image_url'];
    $one_two_see_more_url = $_POST['one_two_see_more_url'];

    $one_three_heading_title = $_POST['one_three_heading_title'];
    $one_three_subheading_title = $_POST['one_three_subheading_title'];
    $one_three_points = explodePoints( $_POST['one_three_points']);
    $one_three_image_url = $_POST['one_three_image_url'];
    $one_three_see_more_url = $_POST['one_three_see_more_url'];


    $first_row_array = array(
        array($one_one_heading_title, $one_one_subheading_title, $one_one_image_url, $one_one_see_more_url, $one_one_points),
        array($one_three_heading_title, $one_two_subheading_title, $one_two_image_url, $one_two_see_more_url, $one_two_points),
        array($one_three_heading_title, $one_three_subheading_title, $one_three_image_url, $one_three_see_more_url, $one_three_points),
    );

    // * SECOND ROW

    $two_one_heading_title = $_POST['two_one_heading_title'];
    $two_one_points = explodePoints( $_POST['two_one_points']);
    $two_one_image_url = $_POST['two_one_image_url'];
    $two_one_see_more_url = $_POST['two_one_see_more_url'];
    
    
    $two_two_heading_title = $_POST['two_two_heading_title'];
    $two_two_points = explodePoints( $_POST['two_two_points']);
    $two_two_image_url = $_POST['two_two_image_url'];
    $two_two_see_more_url = $_POST['two_two_see_more_url'];
    
    
    $two_three_heading_title = $_POST['two_three_heading_title'];
    $two_three_points = explodePoints( $_POST['two_three_points']);
    $two_three_image_url = $_POST['two_three_image_url'];
    $two_three_see_more_url = $_POST['two_three_see_more_url'];


    $second_row_array = array(
        array($two_one_heading_title, $two_one_points, $two_one_image_url, $two_one_see_more_url),
        array($two_two_heading_title, $two_two_points, $two_two_image_url, $two_two_see_more_url),
        array($two_three_heading_title, $two_three_points, $two_three_image_url, $two_three_see_more_url),
    );


    // Third ROW
    
    $three_one_header_title = $_POST['three_one_header_title'];
    $three_one_points = explodePoints( $_POST['three_one_points']);
    $three_one_see_more_url = $_POST['three_one_see_more_url'];
    $three_one_img_url = $_POST['three_one_img_url'];
    $three_two_img_url = $_POST['three_two_img_url'];
    $three_two_see_more_url = $_POST['three_two_see_more_url'];
    $three_two_action_img_url = $_POST['three_two_action_img_url'];
    $three_three_img_url = $_POST['three_three_img_url'];
    $three_three_action_img_url = $_POST['three_three_action_img_url'];
    $three_three_see_more_url = $_POST['three_three_see_more_url'];


    // FOURTH ROW

    $four_one_header = $_POST['four_one_header'];
    $four_one_img_url = $_POST['four_one_img_url'];
    $four_one_image_link = $_POST['four_one_image_link'];
    $four_one_see_more_url = $_POST['four_one_see_more_url'];
    $four_one_points = explodePoints( $_POST['four_one_points']);

    $four_two_header = $_POST['four_two_header'];
    $four_two_img_url = $_POST['four_two_img_url'];
    $four_two_image_link = $_POST['four_two_image_link'];
    $four_two_see_more_url = $_POST['four_two_see_more_url'];
    $four_two_points = explodePoints( $_POST['four_two_points']);

    $fourth_row_array = array(
        array($four_one_header, $four_one_image_link, $four_one_img_url, $four_one_see_more_url, $four_one_points),
        array($four_two_header, $four_two_image_link, $four_two_img_url, $four_two_see_more_url, $four_two_points),
    );
}

function explodePoints($points){
    $pointsArr = explode('[*]', $points);
    $pointsArr = array_filter($pointsArr);

    return $pointsArr;
}

?>

<html style="margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;-ms-text-size-adjust: 100%;margin: 0 auto !important;padding: 0 !important;height: 100% !important;width: 100% !important;">
 
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
</head>

<body style="-ms-text-size-adjust:100%;font-family:Arial, Helvetica, sans-serif;font-size:16px;margin:0 auto !important;padding:0 !important;height:100% !important;width:100% !important;-ms-text-size-adjust: 100%;">
    <table align="center" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;background-color: #eeeeee;padding:1rem;border: 3px solid white;width: 900px;-ms-text-size-adjust: 100%;">
        <tbody style="-ms-text-size-adjust:100%;margin-right: 20px;">
            <tr style="-ms-text-size-adjust:100%;">
                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable1" width="850px" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%">
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding-bottom: 20px;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable2" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;/* margin-bottom: 20px; */-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <th align="left" style="-ms-text-size-adjust:100%;padding: 10px 10px 0px 0px;width: 8%;-ms-text-size-adjust: 100%;">
                                                    <img width="60" height="60" src="https://thecodekart.com/development/emailtemplate/image/oci_engage_logo.png" alt="Oracle-logo" border="0" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;height: 60px !important;width: 60px !important;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;">
                                                </th>
                                                <th align="left" style="-ms-text-size-adjust:100%;width: 20%;-ms-text-size-adjust: 100%;"> OCI
                                                    IDC Newsletter </th>
                                                <th style="-ms-text-size-adjust:100%;font-size: 35px;width: 40%;-ms-text-size-adjust: 100%;" align="center"> OCI Engage </th>
                                                <th align="right" style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;"><?= $newsletter_number ?>
                                                </th>
                                            </tr>
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <td align="center" colspan="4" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;/* padding-top: 5px; */-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                    <b>A platform to collaborate, share and celebrate</b>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable3" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                               <?php foreach($first_row_array as $key => $individual_arr){
                                                   echo ('
                                                   <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-left: 3px solid white;border-top: 3px solid white;border-right: 3px solid white; padding: 0;background-color: '.$first_row_background_color.';-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" valign="top" bgcolor="#DBBC8E">
                                                   <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                       <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                           <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                               <th style="-ms-text-size-adjust:100%;font-size: 20px;padding-top: 5px;-ms-text-size-adjust: 100%; color:'. $one_one_heading_color. '" align="center">'
                                                               .$individual_arr[0].'</th>
                                                           </tr>
                                                           <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                               <td valign="top" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding: 10px;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                                   <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                                       <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                           <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                               <td align="center" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                                                   <img src='.$individual_arr[2].' style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;height: 200px;width: 200px;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" alt="publication" border="0" height="200" width="200">
                                                                               </td>
                                                                           </tr>
                                                                           <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                               <td style="padding-top: 16px;-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">

                                                                                   <b style="color: '.$one_one_subheading_color .'">'.$individual_arr[1].'</b>
                                                                                   <ul style="font-size:16px;-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%">');
                                                                                       foreach ($individual_arr as $points) {
                                                                                        if(is_array($points)){
                                                                                            foreach($points as $point){
                                                                                               echo '<li style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%; color: ' . $one_one_points_color .';'.((sizeof($points)>1)? "list-style: circle;" : "list-style: none;") .'">' . $point . '</li>`';
                                                                                           }}
                                                                                       }
                                                                                   echo('</ul>
                                                                               </td>
                                                                           </tr>
                                                                       </tbody>
                                                                   </table>
                                                               </td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </td>
                                                   ');}?></tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable3" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;background-color: <?php echo $first_row_background_color ?>;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <td style="border-left: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">
                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href=" <?= $one_one_see_more_url ?>">
                                                            Show More
                                                        </a>
                                                    </p>
                                                </td>
                                                <td style="border-left: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">

                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href="<?= $one_two_see_more_url ?>">
                                                            Show More</a>
                                                    </p>
                                                </td>
                                                <td style="border-left: 3px solid white;border-right: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">

                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href="<?= $one_three_see_more_url ?>">
                                                            Show More
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable4" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <?php foreach($second_row_array as $key => $individual_arr) {
                                                echo ('<td valign="top" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-left: 3px solid white;border-top: 3px solid white;border-right: 3px solid white;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;background-color: '.$second_row_background_color.'" width="30%" bgcolor="#DBBC8E">
                                                    <table style="width: 100%;-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;height: 100%;border: none;border-collapse: collapse;-ms-text-size-adjust: 100%;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                <th style="-ms-text-size-adjust:100%;width: 50%;font-size: 20px;-ms-text-size-adjust: 100%;color:'.$second_row_heading_color.';" align="center" width="50%">
                                                                   '.$individual_arr[0].'
                                                                </th>
                                                            </tr>
                                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;width: 50%;/* border-right: 3px solid white; */padding: 5px;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" valign="top" width="50%">
                                                                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                            <tr style="-ms-text-size-adjust:100%;">
                                                                                <td align="center" valign="top" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                                                    <img width="200" height="200" src='.$individual_arr[2].' style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" alt="publication" border="0">
                                                                                </td>
                                                                            </tr>
                                                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;padding-top: 16px;">
                                                                                    <span style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;">
                                                                                        <ul style="color: '.$second_row_points_color.';">');
                                                                                    foreach($individual_arr as $points) {
                                                                                        if(is_array($points)){
                                                                                            foreach($points as $point){
                                                                                                echo '<li>'. $point .'</li>';
                                                                                            }
                                                                                        }
                                                                                    } 
                                                                                   echo('</ul></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>');}
                                                ?>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable3" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;background-color: <?php echo $second_row_background_color ?>;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <td style="border-left: 3px solid white;border-right: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">
                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href=<?= $two_one_see_more_url ?>>
                                                            Show More
                                                        </a>
                                                    </p>
                                                </td>

                                                <td style="border-left: 3px solid white;border-right: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">
                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href=<?= $two_two_see_more_url ?>>
                                                            Show More
                                                        </a>
                                                    </p>
                                                </td>
                                                <td style="border-left: 3px solid white;border-right: 3px solid white;padding-bottom: 10px;">
                                                    <p align="left" style="margin-left: 10px;">
                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href=<?= $two_three_see_more_url ?>>
                                                            Show More
                                                        </a>
                                                    </p>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable5" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border: 3px solid white;width: 50%;background: <?= $third_row_background_color ?>;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" align="left" valign="middle" width="50%">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;/* padding: 10px; */">
                                                            <tr>
                                                                <td style="padding-left: 10px;/* padding-top: 10px; */width: 50%;-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" valign="top">
                                                                    <h3 style="text-align:center;-ms-text-size-adjust:100%;margin-bottom: 10px;font-size: 20px;-ms-text-size-adjust: 100%;color:<?= $third_row_heading_color ?>;">
                                                                        <?= $three_one_header_title ?> </h3>
                                                                    <span style="font-size: 16px;font-family: Arial, Helvetica, sans-serif;">
                                                                    <ul style="color: <?= $third_row_points_color ?>">
                                                                        <?php foreach($three_one_points as $point){
                                                                                                echo '<li>'. $point .'</li>';
                                                                                            } ?>
                                                                                            </ul>
                                                                    </span>
                                                                </td>
                                                                <td style="width:50%;/* height: 90%; */-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding-top: 20px;padding-bottom: 0px;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" align="center">
                                                                    <img align="middle" height="220" width="180" src=<?= $three_one_img_url ?> style="ms-text-s2ize-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" alt="publication" border="0">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <p align="left" style="margin-left: 10px;">
                                                                        <a target="_blank" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href=<?= $three_one_see_more_url ?>>
                                                                            Show More
                                                                        </a>
                                                                    </p>
                                                                </td>
                                                                <td>

                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td style="background: <?= $third_row_background_color ?>;-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border: 3px solid white;width: 50%;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" valign="top" width="100%">
                                                    <table border="0" cellpadding="" cellspacing="" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                                <td style="width:50%;/* height: 90%; */-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding-top: 20px;padding-bottom: 5px;border-right: 3px solid white;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" align="center">
                                                                    <a target="_blank" href=<?= $three_two_see_more_url ?> style="width:100%;-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;">
                                                                        <img height="220" width="180" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" src=<?= $three_two_img_url ?> alt="crossword" border="0">

                                                                        <img height="30" width="40" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" src=<?= $three_two_action_img_url ?> alt="crossword" border="0">

                                                                    </a>
                                                                </td>
                                                                <td style="width:300px;-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding-top: 20px;padding-bottom: 5px;height: 100%;border-right: 3px solid white;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" align="center">
                                                                    <a target="_blank" href=<?= $three_three_see_more_url ?> style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;">
                                                                        <img height="220" width="180" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;max-width: 100%;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" src=<?= $three_three_img_url ?> alt="spotlight" border="0">
                                                                        <img height="30" width="40" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" src=<?= $three_three_action_img_url ?> alt="crossword" border="0">

                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" data-lang="EN-US" data-theme="InternalCommunications" id="mainTable1" width="850" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <?php foreach($fourth_row_array as $key => $individual_arr){
                                                echo('<td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;border-right: 3px solid white;border-top: 3px solid white;border-left: 3px solid white;width: 50%;padding: 0;background-color: '.$fourth_row_background_color.';-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" valign="top" width="50%">
                                                <table border="0" cellpadding="0" cellspacing="0" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                    <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">

                                                        <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                            <td valign="top" style="width: 60% !important;padding-left:10px;-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" >

                                                                <h3 style="text-align:center;padding-top:10px;-ms-text-size-adjust:100%;margin:0px;font-size: 20px;-ms-text-size-adjust: 100%;margin: 0px; color:'.$fourth_row_heading_color.';">
                                                                    '.$individual_arr[0].'</h3>
                                                                <ul style="font-size:16px;-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;color:'.$fourth_row_points_color.'">');
                                                                    foreach($individual_arr as $points) {
                                                                        if(is_array($points)){
                                                                            foreach($points as $point){
                                                                                echo '<li style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">'. $point .'</li>';
                                                                            }
                                                                        }
                                                                    } 
                                                               echo('</ul>
                                                               <p align="left" style="margin-left: 10px;">
                                                               <a target="_blank" style="line-height: 2;-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;" href='.$individual_arr[3].'>
                                                                   Show More</a>
                                                           </p>
                                                            </td>
                                                            <td style="width:40%;/* height: 90%; */-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding-top: 20px;padding-bottom: 20px;border-right: 3px solid white;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;" align="center">
                                                            <a target="_blank" href='.$individual_arr[1].' style="width:100%;-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;">
                                                                <img height="220" width="180" style="-ms-text-size-adjust:100%;-ms-interpolation-mode:bicubic;-ms-text-size-adjust: 100%;-ms-interpolation-mode: bicubic;" src='.$individual_arr[2].' alt="crossword" border="0">
                                                            </a>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>');
                                            }   ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr style="-ms-text-size-adjust:100%;">
                                <td style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;">
                                    <table align="center" style="-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;margin-top: 10px;-ms-text-size-adjust: 100%;border-collapse: collapse;table-layout: fixed;word-wrap: break-word;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                                                <td align="center" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                                                    For any questions/feedback please reach out to
                                                    <a target="_blank" href="mailto:oci-engage_in@oracle.com" style="-ms-text-size-adjust:100%;text-decoration:none;-ms-text-size-adjust: 100%;text-decoration: none;">oci-engage_in@oracle.com</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table align="center" style="font-size: 11px;-ms-text-size-adjust:100%;border-collapse:collapse;table-layout:fixed;word-wrap:break-word;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;padding:1rem;border: 3px solid white;width: 900px;-ms-text-size-adjust: 100%;">
        <tbody style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
            <tr style="-ms-text-size-adjust:100%;-ms-text-size-adjust: 100%;">
                <td align="center" style="-ms-text-size-adjust:100%;mso-table-lspace:0pt !important;mso-table-rspace:0pt !important;color: gray;-ms-text-size-adjust: 100%;mso-table-lspace: 0pt !important;mso-table-rspace: 0pt !important;">
                    Copyright © 2020, Oracle. All rights reserved. INTERNAL ONLY.<br>
                    Oracle Internal Confidential. This message is intended for Oracle employees only.<br>
                    Please do not forward this message to anyone outside Oracle.<br>
                    <a target="_blank" href="https://www.oracle.com/corporate/">About Oracle</a> |
                    <a target="_blank" href="https://www.oracle.com/legal/terms.html">Legal Notices and Terms of Use</a> |
                    <a target="_blank" href="https://www.oracle.com/legal/privacy/">Privacy Statement</a><br>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>