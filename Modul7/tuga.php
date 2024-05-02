<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>    
</head>    
 <body>
    <div align="center">
    <form name="myform" action="proses.php" method="POST">
    <table>
        <tr><td colspan="3"><b><center>BUKU TAMU</center></b></td></tr>
        <tr><td></td><td></td><td></td></tr>
        <tr><td>Nama</td>
                <td> : </td>
                <td><input type="text" name="Nama"></td> </tr>
        <tr><td>Email</td>
                <td> : </td>
                <td><input type="text" name="Email"></td>
        </tr>
        <tr>
        <td>Pesan</td>
        <td> : </td>
        <td><textarea input type="text" name="Pesan" rows=5 cols=30></textarea></td>
        </tr>
        <tr>
            <td><br><input type="submit" name="submit" value="Simpan" style="width:80px;"></td>
            <td><br></td>
            <td><br><input type="reset" name="reset" value="Batal" style="width:80px;"></td>      
        </tr>
    </table>
    </form>
    </div>
 </body>
 </html>