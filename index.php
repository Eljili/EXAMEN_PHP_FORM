<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Devoir</title>

	<style >	
	
	body{
		content: '';
		position: fixed;
		width: 100vw;
		height: 100vw;
		background-image:url(images4);
		background-position:center center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
			}
			.hmd{
				height: 200px;
				width:170px;
				border-radius: 50%;
				overflow: hidden;
				top:calc(-100px/2);
				left:calc(60% - 40px);

			}
	table,th,td{text-align: center;
	border: 2px dashed black; }
		</style>
	
</head>

<body>
<center>	
<i text-align="center">Formulaire de contacte  </i>
<br>
<br>
<br>


<table border="1" width="20%" >
	
			<th colspan="4"> <a href="hmd.jpg"> <img src="hmd.jpg" title="Clique moi" class='hmd'  > </a> </th>

	<?php 
				$pers = array('Prenom'  => 'Mohamed','Nom' =>'El Jili' ,'Age' =>'20' ,'Telephone' =>'781724888' , 'E-MAIL' => 'eljilimed@gmail.com','Id_Slacke' =>'El Jili','Id_GetHub' =>'Eljili','Profession'=>'Etudient'
				);
				?>
				
<?php  foreach ($pers as $p => $p_value) {
?>


	
	<tr>
		
					<td> <?php echo $p    ; ?></td>
		 			<td> <?php echo  $p_value ;?></td>


		 			</tr>

<?php } ?>

</table>
</center>
</body>
</html>