<pre>
<?php function  startElementHandler($parser,$element,$attributes)
{
    echo"start of element: \"$element\"";
    if($attributes)
    echo ", atrributes:";
    foreach($attributes as $name => $value)
       echo "$name=\"$value\" ";
       echo "\n";
}

function endElementHandler($parser, $element)
{
    echo "end of element: \"$element\"\n";

}
function characterDataHandler($parser,$data)
{
    if(trim($data))
         echo "Character data: \"". htmlspecialchars($data) ."\"\n";
}

function parserError( $parser )
{
    $error = xml_error_string(xml_get_error_code($parser));
    $errorLine=xml_get_current_column_number($parser);
    $errorColumn = xml_get_current_column_number($parser);
    return "<b>Error: $error at line $errorLine column $errorColumn</b>";
}
$parser= xml_parser_create();
xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING, false); 
xml_set_element_handler($parser, "startElementHandler" ,"endElementHandler");
xml_set_character_data_handler($parser ,"characterDataHandler");
$xml = file_get_contents("stock.xml");
xml_parse($parser,$xml) ;//or die (parseError($parser));
xml_parser_free($parser);
?>
</pre>