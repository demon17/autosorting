<?php require "random.php"?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nested</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery.nested.js"></script>
<script src="makeboxes.js"></script>
</head>
<body>


<div id="container">
  <?php foreach($randomBoxes as $value){
    echo "<div class='box size" . $value['weight'] . $value['height'] . "'>BOX</div>";
  }?>
</div>

<script type="text/javascript" >
  
  $(function() { 

    $("#container").nested({minColumn: 4, gutter: 7,minWidth: 200});


  });
  
  
</script>
  
</body>
</html>    