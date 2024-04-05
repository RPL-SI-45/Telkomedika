<a href="/informasidokter/create">EDIT Informasi Dokter</a>
<table border>
    <tr>
        <td>NOMOR</td>
        <td>NAMA DOKTER</td>
        <td>NAMA POLI</td>
        <td>SENIN</td>
        <td>SELASA</td>
        <td>RABU</td>
        <td>KAMIS</td>
        <td>JUMAT</td>
        <td>SABTU</td>
        <td>STATUS KEHADIRAN</td>
    </tr>
    @foreach($informasidokter as $informasidokter)
    <tr>
        <td>{{$informasidokter->Nomor}}</td>
        <td>{{$informasidokter->NamaDokter}}</td>
        <td>{{$informasidokter->NamaPoli}}</td>
        <td>{{$informasidokter->Senin}}</td>
        <td>{{$informasidokter->Selasa}}</td>
        <td>{{$informasidokter->Rabu}}</td>
        <td>{{$informasidokter->Kamis}}</td>
        <td>{{$informasidokter->Jumat}}</td>
        <td>{{$informasidokter->Sabtu}}</td>
        <td>{{$informasidokter->StatusKehadiran}}</td>
    </tr>
    @endforeach
</table>