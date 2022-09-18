<?php 
   $homepage = file_get_contents('https://it-blog.space/');

   $fist_position = strpos($homepage, "<main>");

   $second_position = strpos($homepage, "</main>");
   
    $result = substr($homepage, $fist_position + 6, $second_position - $fist_position - 6);
    $result = str_replace("\n      ", "", $result);

    $r_1 = preg_match_all("/div.*\/div/", $result, $r_2);

    $R_3 = explode("<div", $result);

    $r4 = substr($R_3[2], strrpos($R_3[2], "\""));
    $result = preg_replace("/\">(\s)*/", "", $r4);
    $result = str_replace("</div>", "", $result);

   print_r($result);

   $fist_position = strpos($homepage, "<footer>");

   $second_position = strpos($homepage, "</footer>");
   
    $result = substr($homepage, $fist_position + 6, $second_position - $fist_position - 6);
    print_r($result);


    $r_1 = preg_match_all("/<span.*\/span>/", $result, $r_2);
    print_r($r_2);


   $find_mobile = preg_match_all("/div class=\"footer\-col\".*\/div/", $homepage, $divs);
   print_r($divs);
?>

