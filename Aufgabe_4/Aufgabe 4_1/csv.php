<?php 
 function get_html($csv_file)
 {
    $html='';
    $file = fopen($csv_file, 'r');
    $header_arr=fgetcsv($file);
    $html .='<thead>';
    foreach($header_arr as $k=>$v)
    {
        $html.='<th>' .$v. '</th>';
    }
    $html .= '</table>';
    
    
$html.='<tbody>';
while($line = fgetcsv($file)) 
{
    $html.= '<tr>';
    foreach($header_arr as $k=>$v)
     {
         $html .='<th>' .$v. '</th>';
     }
     $html.='</tr>';
}
$html .='</table>';
    return $html;

}

//test
echo get_html('C:\xampp\htdocs\PHP_Einführung_FW\Aufgabe_4\Aufgabe 4_1\Book1.CSV')
?>