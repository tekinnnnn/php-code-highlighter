<!doctype html>
<html>
<head>
<title>PHP Code Highlighter</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/css.css">
</head>
<body>
	<h1 align="center">
		PHP Code Highlighter<sub><a href="http://www.tekinaydogdu.info"
			target="__blank">By Tekin Aydoğdu</a></sub>
	</h1>
	<div class="page">
<?php

class sytax_highlighter
{

    function __construct($file, $isfile = true)
    {
        
        if (is_file($file)) {
            $code = file($file);
            $code = implode("", $code);
        } else {
            $code = $file;
        }
        
        $code = htmlspecialchars_decode($code);
        $code = highlight_string($code, true);
        $code = explode("\r", $code);
        
        foreach ($code as $line => $data) {
            $td1[] = '<div class="line">' . $line ++ . '</div>';
            $dat = substr($data, 6) == "" ? "&nbsp;" : substr($data, 6);
            
            $td2[] = '<div class="code">' . $dat . '</div>';
        }
        
        $line = implode("\r", $td1);
        $code = implode("\r", $td2);
        $tr = array(
            $line,
            $code
        );
        
        ?>

    <div class="highlighter">
		<div id="line"><?php echo $line; ?></div>
		<div id="code"><?php echo $code; ?></div>
	</div>
        <?php
    }
}

$syntax = new sytax_highlighter("text.txt");

/*
$syntax = new sytax_highlighter('<?php

class sytax_highlighter
{

    function __construct($file, $isfile = true)
    {
        
        if (is_file($file)) {
            $code = file($file);
            $code = implode("", $code);
        } else {
            $code = $file;
        }
        
        $code = htmlspecialchars_decode($code);
        $code = highlight_string($code, true);
        $code = explode("\r", $code);
        
        foreach ($code as $line => $data) {
            $td1[] = \'<div class="line">\' . $line ++ . \'</div>\';
            $dat = substr($data, 6) == "" ? "&nbsp;" : substr($data, 6);
            
            $td2[] = \'<div class="code">\' . $dat . \'</div>\';
        }
        
        $line = implode("\r", $td1);
        $code = implode("\r", $td2);
        $tr = array(
            $line,
            $code
        );

    echo \'<div class="highlighter">
		<div id="line">\'.$line.\'</div>
		<div id="code">\'.$code;.\'</div>
	</div>\';
    }
}
    
?>');
*/

?>
</div>
</body>
</html>