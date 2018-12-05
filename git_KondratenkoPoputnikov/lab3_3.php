<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
   .footer {

    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px;
    background-color: #f5f5f5;

}
 </style>
</head>
<body>


<?php include 'nadgłówek.php';?>
<?php include 'menu.php';?>
<div id="DIVID">
<?php include 'container.php';?>
</div>
<?php include 'footer.php';?>


<script type="text/javascript">
    function btnclick(){
        $(document).ready(function() {
        $("#DIVID").load("produkts.php");
});
    }
</script>

</body>
</html>
