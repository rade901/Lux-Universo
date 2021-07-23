<style>
@import url('https://fonts.googleapis.com/css2?family=STIX+Two+Math&display=swap');
body{
    background-color: black;
}
.mycss{
	color: gold;
	justify-content: center;
    padding: 10px;
    font-family: 'STIX Two Math', serif;
}
.mycss1{
	color: gold;
	justify-content: center;
    padding: 10px;
    font-family: 'STIX Two Math', serif;
}

h1 {
    height: 10em;
    position: relative }
 h1 {
    margin: 0;
    font-size: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
    h6 {
    height: 5em;
    position: relative }
 h6 {
    margin: 0;
    font-size: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) }
</style>
<?php 
$name=$_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From:$name\nPoruka:$message";
$recipient = "info@lux-universo.hr";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "<h1 class='mycss'>Hvala vam na javljanju!</h1>";
?>
<a href="https://www.lux-universo.com/contact.html"><h6 class='mycss'>Povratak na stranicu</h6></a>