@extends('layouts.app')

@section('content')

@if (Auth::user()->role == 'user')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                <h1 class="card-title mb-5">DATA DIRI PELAMAR</h1>
                <form method="post" action="simpan">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>1. Posisi yang dilamar</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="posisi" class="form-control" value="{{$data->posisi}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>2. Nama</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>3. No KTP</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="no_ktp" class="form-control" value="{{$data->no_ktp}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>4. Tempat, Tanggal Lahir</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="ttl" class="form-control" value="{{$data->ttl}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>5. Jenis Kelamin</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="jk" class="form-control" value="{{$data->jk}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>6. Agama</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="agama" class="form-control" value="{{$data->agama}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>7. Golongan Darah</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="goldar" class="form-control" value="{{$data->golongan_darah}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>8. Status</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="status" class="form-control" value="{{$data->status}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>9. Alamat KTP</label>
                        </div>
                        <div class="col-md">
                            <textarea name="alamat_ktp" class="form-control" required>{{$data->alamat_ktp}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>10. Alamat Tinggal</label>
                        </div>
                        <div class="col-md">
                            <textarea name="alamat_tinggal" class="form-control" required>{{$data->alamat_tinggal}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>11. Email</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="email" class="form-control" value="{{$data->email}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>12. No Telepon</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>13. Orang yang dapat dihubungi</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="orang_terdekat" class="form-control" value="{{$data->orang_terdekat}}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <label>14.Pendidikan Terakhir</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Jenjang Pendidikan Terakhir</td>
                                    <td>Nama Institusi Akademi</td>
                                    <td>Jurusan</td>
                                    <td>Tahun Lulus</td>
                                    <td>IPK</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="pendidikan1" class="form-control" value="{{$pendidikan->pendidikan1}}"></td>
                                    <td><input type="text" name="institusi1" class="form-control" value="{{$pendidikan->institusi1}}"></td>
                                    <td><input type="text" name="jurusan1" class="form-control" value="{{$pendidikan->jurusan1}}"></td>
                                    <td><input type="text" name="lulus1" class="form-control" value="{{$pendidikan->lulus1}}"></td>
                                    <td><input type="text" name="ipk1" class="form-control" value="{{$pendidikan->ipk1}}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="pendidikan2" class="form-control" value="{{$pendidikan->pendidikan2}}"></td>
                                    <td><input type="text" name="institusi2" class="form-control" value="{{$pendidikan->institusi2}}"></td>
                                    <td><input type="text" name="jurusan2" class="form-control" value="{{$pendidikan->jurusan2}}"></td>
                                    <td><input type="text" name="lulus2" class="form-control" value="{{$pendidikan->lulus2}}"></td>
                                    <td><input type="text" name="ipk2" class="form-control" value="{{$pendidikan->ipk2}}"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <label>15. Riwayat Pelatihan</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Kursus/Seminar</td>
                                    <td>Sertifikat (Ada/Tidak)</td>
                                    <td>Tahun</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="kursus1" class="form-control" value="{{$pelatihan->kursus1}}"></td>
                                    <td><input type="text" name="sertifikat1" class="form-control" value="{{$pelatihan->sertifikat1}}"></td>
                                    <td><input type="text" name="tahun_pelatihan1" class="form-control" value="{{$pelatihan->tahun1}}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="kursus2" class="form-control" value="{{$pelatihan->kursus2}}"></td>
                                    <td><input type="text" name="sertifikat2" class="form-control" value="{{$pelatihan->sertifikat2}}"></td>
                                    <td><input type="text" name="tahun_pelatihan2" class="form-control" value="{{$pelatihan->tahun2}}"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <label>16. Riwayat Pekerjaan</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nama Perusahaan</td>
                                    <td>Posisi Terkahir</td>
                                    <td>Pendapatan Terkahir</td>
                                    <td>Tahun</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="perusahaan1" class="form-control" value="{{$pekerjaan->perusahaan1}}"></td>
                                    <td><input type="text" name="posisi1" class="form-control" value="{{$pekerjaan->posisi1}}"></td>
                                    <td><input type="text" name="pendapatan1" class="form-control" value="{{$pekerjaan->pendapatan1}}"></td>
                                    <td><input type="text" name="tahun_pekerjaan1" class="form-control" value="{{$pekerjaan->tahun1}}"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="perusahaan2" class="form-control" value="{{$pekerjaan->perusahaan2}}"></td>
                                    <td><input type="text" name="posisi2" class="form-control" value="{{$pekerjaan->posisi2}}"></td>
                                    <td><input type="text" name="pendapatan2" class="form-control" value="{{$pekerjaan->pendapatan2}}"></td>
                                    <td><input type="text" name="tahun_pekerjaan2" class="form-control" value="{{$pekerjaan->tahun2}}"></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>17. Skill</label>
                        </div>
                        <div class="col-md">
                            <label>Tuliskan keahlian & kemampuan yang saat ini anda miliki</label>
                            <textarea name="skill" class="form-control" required>{{$data->skill}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <label>18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN (Ya/Tidak)</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="ditempatkan" class="form-control" value="{{$data->ditempatkan}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label>19. Penghasilan yang diharapkan</label>
                        </div>
                        <div class="col-md">
                            <input type="text" name="penghasilan" class="form-control" value="{{$data->penghasilan}}" required> 
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if (Auth::user()->role == 'admin')
<?php $no=1; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                <h1 class="card-title mb-5">DATA DIRI PELAMAR</h1>
                 <table class="table table-bordered">
                     <tr>
                         <td>No</td>
                         <td>Nama</td>
                         <td>Tempat, Tanggal Lahir</td>
                         <td>Posisi</td>
                         <td>Aksi</td>
                     </tr>
                     @foreach($admin_data as $d)
                     <tr>
                         <td><?php echo $no++ ?></td>
                         <td>{{$d->nama}}</td>
                         <td>{{$d->ttl}}</td>
                         <td>{{$d->posisi}}</td>
                         <td><a href="/detail/{{$d->id}}" class="btn btn-info">Detail</a></td>
                     </tr>
                     @endforeach
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
