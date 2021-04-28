<html>
	<form method="POST" name="frmpost" action="">
		<table align="center" border="1" cellpadding="0" cellspacing="0">
			<tr align="center">
				<td>
					<h2>
						<b>DATA PASIEN VIRUS COVID 19</b>
					</h2>
				</td>
			</tr>
			<tr>
				<td>
					<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
						<tr>
							<td>Wilayah</td>
							<td> : </td>
							<td>
								<select name="wilayah" >
								  <option value="DKI Jakarta">DKI Jakarta</option>
								  <option value="Jawa Barat">Jawa Barat</option>
								  <option value="Banten">Banten</option>
								  <option value="Jawa Tengah">Jawa Tengah</option>
								</select> 
							</td>
						</tr>
						<tr>
							<td>Positif</td>
							<td> : </td>
							<td>
								<input name="positif" type="number"  />
							</td>
						</tr>
						<tr>
							<td>Di rawat</td>
							<td> : </td>
							<td>
								<input name="rawat" type="number" />
							</td>
						</tr>
						<tr>
							<td>sembuh</td>
							<td> : </td>
							<td>
								<input name="sembuh" type="number"  />
							</td>
						</tr>
						<tr>
							<td>Meninggal</td>
							<td> : </td>
							<td>
								<input name="meninggal" type="number"  />
							</td>
						</tr>
						<tr>
							<td>Nama Operator</td>
							<td> : </td>
							<td>
								<input name="operator" type="text" />
							</td>
						</tr>
						<tr>
							<td>NIM Mahasiswa</td>
							<td> : </td>
							<td>
								<input name="nim" type="text"  />
							</td>
						</tr>
						<tr>
							<td colspan="4" align="center">
								<input type="submit" name="btnOk" value="Simpan" />
							</td>
						</tr>
							</table>
						</td>
					</tr>
				</table>
			</form>

<center>

	<label> <?php echo empty($_POST['wilayah']) ? "" : "Data Pemantauan Covid19 Wilayah ".  $_POST['wilayah'] ?> </label><br>
	<label> <?php echo empty($_POST['wilayah']) ? "" :  "Per ". date("d M Y H:i:s")  ?> </label><br>
	<label><?php echo empty($_POST['operator']) ? "" :  $_POST['operator'] ?>/<?php echo empty($_POST['nim']) ? "" :  $_POST['nim'] ?></label>
	<table border="1" cellpadding="10" cellspacing="10">
		<?php
		
		 $wilayah = empty($_POST['wilayah']) ? "" :  $_POST['wilayah'];
		 $rawat = empty($_POST['rawat']) ? "" :  $_POST['rawat'];
		 $positif = empty($_POST['positif']) ? "" :  $_POST['positif'];
		 $sembuh = empty($_POST['sembuh']) ? "" :  $_POST['sembuh'];
		 $meninggal = empty($_POST['meninggal']) ? "" :  $_POST['meninggal'];
		 $operator = empty($_POST['operator']) ? "" :  $_POST['operator'];
		 $nim = empty($_POST['nim']) ? "" :  $_POST['nim'];
		 if(!empty($_POST['wilayah'])){


		 ?>
		 <tr>
		 	<th>Positif</th>
		 	<th>Dirawat</th>
		 	<th>Sembuh</th>
		 	<th>Meninggal</th>
		 </tr>
		 <tr>
		 	<td><?php echo $positif;?></td>
		 	<td><?php echo $rawat;?></td>
		 	<td><?php echo $sembuh;?></td>
		 	<td><?php echo $meninggal;?></td>
		 </tr>
		 <?php
		}
		 ?>
		</table>
	</center>
</html>