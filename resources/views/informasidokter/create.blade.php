<h1>Informasi Dokter</h1>

<form action="/informasidokter/store" method="POST">
    @csrf
    <input type="text" name="NAMA DOKTER" placeholder="Nama Dokter"><br>
    <input type="text" name="NAMA POLI" placeholder="Nama Poli"><br> 
    <input type="text" name="SENIN" placeholder="Senin"><br> 
    <input type="text" name="SELASA" placeholder="Selasa"><br>
    <input type="text" name="RABU" placeholder="Rabu"><br>
    <input type="text" name="KAMIS" placeholder="Kamis"><br>
    <input type="text" name="JUMAT" placeholder="Jumat"><br>
    <input type="text" name="SABTU" placeholder="Sabtu"><br>
    <input type="text" name="STATUS KEHADIRAN" placeholder="Status kehadiran"><br>

    <input type="SUBMIT" name="SUBMIT" value="SAVE">

</form>