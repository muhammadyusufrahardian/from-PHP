 <html>
<body>

<form action="table.php" method="post">

NIM:  <input type="text" name="nim"><br><br>
Nama: <input type="text" name="nama"><br><br>
Jenis Kelamin : <BR><br>
<input type=RADIO name="kelamin" value="L"> Laki-laki 
<input type=RADIO name="kelamin" value="P"> Perempuan <BR><br>
Alamat: <input type="text" name="alamat"><br><br>

Program Studi :
<SELECT NAME="prodi" ><br>
<OPTION VALUE="Sisitem informasi">SISTEM INFORMASI
<OPTION VALUE="Fisika">FISIKA
<OPTION VALUE="Biologi">BIOLOGI
<OPTION VALUE="Matematikla">MATEMATIKA
</select>
<br>
Bahasa Pemrograman yang dikuasai : <BR>
<INPUT TYPE=CHECKBOX NAME="pilih[]" VALUE="PASCAL/DELPHI"> PASCAL/DELPHI <BR>
<INPUT TYPE=CHECKBOX NAME="pilih[]" VALUE="C/C++"> C/C++ <BR>
<INPUT TYPE=CHECKBOX NAME="pilih[]" VALUE="VISUAL BASIC"> Visual Basic <BR>
<p>
<input type="submit" name="submit" class="btn btn-info" value="Submit" /></p><BR>



</form>

</body>
</html> 