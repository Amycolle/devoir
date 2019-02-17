<!DOCTYPE html>
<html>
<head>
	<title>	vos identifiant </title>
	<META charset="utf-8"/>
</head>
<body>
 <form method="POST" action="traitement.php" style="margin-left:300px;margin-right:500px;">
   <p>
   	<fieldset>
   		 <legend> Vos informations</legend>
   		 <?php 
   		 	echo '<img src="C:\wamp1\www\l2tdsi".$capture.png>';
   		  ?>
   		 <hr color="blanc">
	  <table>
	  <tr> 
	   <th> <label for="nom">nom:</label> </th>
	   <th><input name =" nom" type="text" placeholder="Diangar" id="nom" required /> </th>
	  </tr>
     <tr>
	 <th> <label for="prenom">Prenom:</label></th>

	 <th> <input name =" prenom" type="text" placeholder="Amy colle" id="prenom" required />  </th>
     </tr>
    <tr>
    	<th><label for="adresse">Adresse:</label></th>
    	<th><input name =" adresse" type="text" placeholder="Mbao" id="adresse" required /> </th>
    </tr>

    <tr>
    	<th><label for="date de naissance">date denaissance:</label></th>
    	<th><input name =" date de naissance" type="text" placeholder="30-04-98" id="date de naissance" required /> </th>
    </tr>
    <tr>
	  	<th><label for="Email">Email:</label></th>
	  	<th><input name ="Email" type="text" placeholder="amycolle348@gmail.com" id="Email" required /></th>

	  </tr>
	  <tr>
	  	<th><label for="identifiant">identifiant:</label></th>
	  	<th><input name ="identifiant" type="text" placeholder="56478993" id="identifiant" required /></th>

	  </tr>
	  </table>
	  </fieldset>
	 </p>
	 </form>
	 </body>
</html>



	  


