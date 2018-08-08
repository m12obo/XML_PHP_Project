<?php
    
    include ('welcome.php');
    

    $url = $_GET['Url'];
    $criteria = $_GET['Criteria'];
    
    $html = file_get_contents($url); //get the html returned from the following url

    $url_doc = new DOMDocument();

    libxml_use_internal_errors(TRUE); //disable libxml errors

    if(!empty($html)){ //if any html is actually returned

	$url_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$url_xpath = new DOMXPath($url_doc);

	//get all the h2's with an id
	$url_row = $url_xpath->query('//h2[@id]');

	if($url_row->length > 0){
		foreach($url_row as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
}
?>

    



?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Generate XML</title>
    </head>
    <body>

        Generating XML from <?php echo $url; echo " using criteria "; echo $criteria; ?>
        
        
        
        

    </body>
</html>