<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Test</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").toggleClass('show');
    });
});
</script>
<style>

</style>
</head>
<body>
    <?php echo '<p>Hello World</p>'; ?>


</body>
</html>