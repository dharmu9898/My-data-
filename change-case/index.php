<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossorigin="anonymous"></script>
<title>Your Text Change Case</title>
<style>
body {background-color: #ABA399;}
h1   {text-align: center;
	color: black;	
}
.card-header{
background-color: #A5D8F3;
}
.jumbotron
{
background-color: pink;
}

</style>
</head>
<body>
<div class="container">
<div class="jumbotron">
<div class="card-header" >
<h1>Change Case</h1>
<form action="index.php" method="post" > 

</div>

<div class="card-body">
<textarea id="textbox"name="your_words"placeholder="Write or Paste your content to Case Change"spellcheck="true"style="width:950px; height:300px;"></textarea>

<button type="uppar" class="btn btn-success" name="uppar" >Uppar case</button>
<button type="lower" class="btn btn-success" name="lower" >Lower case</button>
<button type="remove" class="btn btn-success" name="remove" >Remove Space</button>
<button type="hypen" class="btn btn-success" name="hypen" >Add Hypen In between</button> 
</div>
 

<script type="text/javascript">
var myTextArea = document.getElementsByTagName('textarea');

for(var i=0; i<myTextArea.length; i++){
    console.log('Textarea ' + i + ' output: ' + myTextArea[i].innerHTML);  
    //I really like jAvaScript
    console.log('Textarea ' + i + ' converted output: ' + myTextArea[i].innerHTML.toUpperCase()); //I REALLY LIKE JAVASCRIPT
}
</script>
<!-- <?php
 if (isset($_POST['uppar'])) {
 	$myTextbox = $_POST {'your_words'};
 	echo "Submited Value=>"  .strtoupper($myTextbox);
 }
?> 
<?php
 if (isset($_POST['lower'])) {
 	$myTextbox = $_POST {'your_words'};
 	echo "Submited Value=>"  .strtolower($myTextbox);
 }
?>
<?php
 if (isset($_POST['remove'])) {
 	$myTextbox = $_POST {'your_words'};	
 	echo "Submited Value=>"  .str_replace(" " , "",$myTextbox);
 }
?>

<?php
 if (isset($_POST['hypen'])) {
 	$myTextbox = $_POST {'your_words'};	
 	echo "Submited Value=>"  .str_replace(" ", "-",$myTextbox);
 }
?> -->

</div>
</div>
</body>
</form>
</html>