<?php    
/*
 * Cople j.js+j.php of working example of JSONP code. Leon Rom, 2017
*/
    $f = fopen( './logJ.txt', "w" );
    fwrite( $f, "started" . "\n");

    $prms = $_REQUEST['prms'];
    $func = $_REQUEST['func'];
    fwrite( $f, "prms=$prms, func=$func" . "\n" ); 

    $t = "$prms = " . time() ;
    fwrite( $f, "finish : t=$t" . "\n" );                
        
    echo($func.'({"result":"' . $t . '",' . '"typ":"addUser"})');  
    
    fclose( $f);
?>  