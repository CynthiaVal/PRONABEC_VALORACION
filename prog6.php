<HTML>
<FORM ACTION=prog6.php METHOD=post>
sexo:<br>
<input type=radio name=SEXO value=masculino >masculino<br>
<input type=radio name=SEXO value=femenino>femenino<br>
<input type=radio name=SEXO value=neutro>neutro<br>
carrera:<br>
<input type=radio name=CARRERA value=sistemas >sistemas<br>
<input type=radio name=CARRERA value=informatica>informatica<br>
<input type=radio name=CARRERA value=medicina>medicina<br>
<INPUT TYPE=submit NAME=OK VALUE="evento1"><BR>
</FORM></HTML>
<?php
$OK=$_REQUEST['SEXO'];

echo "<B>SEXO =</B>".$SEXO."<br>";

?>