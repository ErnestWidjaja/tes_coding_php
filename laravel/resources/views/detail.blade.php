@extends('layouts.app')

@section('content')
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
                                <input type="text" name="posisi" class="form-control" value="{{$data->posisi}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>2. Nama</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="nama" class="form-control" value="{{$data->nama}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>3. No KTP</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="no_ktp" class="form-control" value="{{$data->no_ktp}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>4. Tempat, Tanggal Lahir</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="ttl" class="form-control" value="{{$data->ttl}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>5. Jenis Kelamin</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="jk" class="form-control" value="{{$data->jk}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>6. Agama</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="agama" class="form-control" value="{{$data->agama}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>7. Golongan Darah</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="goldar" class="form-control" value="{{$data->golongan_darah}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>8. Status</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="status" class="form-control" value="{{$data->status}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>9. Alamat KTP</label>
                            </div>
                            <div class="col-md">
                                <textarea name="alamat_ktp" class="form-control" disabled>{{$data->alamat_ktp}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>10. Alamat Tinggal</label>
                            </div>
                            <div class="col-md">
                                <textarea name="alamat_tinggal" class="form-control" disabled>{{$data->alamat_tinggal}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>11. Email</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="email" class="form-control" value="{{$data->email}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>12. No Telepon</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="telp" class="form-control" value="{{$data->telp}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>13. Orang yang dapat dihubungi</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="orang_terdekat" class="form-control" value="{{$data->orang_terdekat}}" disabled>
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
                                        <td><input type="text" disabled name="pendidikan1" class="form-control" value="{{$pendidikan->pendidikan1}}"></td>
                                        <td><input type="text" disabled name="institusi1" class="form-control" value="{{$pendidikan->institusi1}}"></td>
                                        <td><input type="text" disabled name="jurusan1" class="form-control" value="{{$pendidikan->jurusan1}}"></td>
                                        <td><input type="text" disabled name="lulus1" class="form-control" value="{{$pendidikan->lulus1}}"></td>
                                        <td><input type="text" disabled name="ipk1" class="form-control" value="{{$pendidikan->ipk1}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" disabled name="pendidikan2" class="form-control" value="{{$pendidikan->pendidikan2}}"></td>
                                        <td><input type="text" disabled name="institusi2" class="form-control" value="{{$pendidikan->institusi2}}"></td>
                                        <td><input type="text" disabled name="jurusan2" class="form-control" value="{{$pendidikan->jurusan2}}"></td>
                                        <td><input type="text" disabled name="lulus2" class="form-control" value="{{$pendidikan->lulus2}}"></td>
                                        <td><input type="text" disabled name="ipk2" class="form-control" value="{{$pendidikan->ipk2}}"></td>
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
                                        <td><input type="text" disabled name="kursus1" class="form-control" value="{{$pelatihan->kursus1}}"></td>
                                        <td><input type="text" disabled name="sertifikat1" class="form-control" value="{{$pelatihan->sertifikat1}}"></td>
                                        <td><input type="text" disabled name="tahun_pelatihan1" class="form-control" value="{{$pelatihan->tahun1}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" disabled name="kursus2" class="form-control" value="{{$pelatihan->kursus2}}"></td>
                                        <td><input type="text" disabled name="sertifikat2" class="form-control" value="{{$pelatihan->sertifikat2}}"></td>
                                        <td><input type="text" disabled name="tahun_pelatihan2" class="form-control" value="{{$pelatihan->tahun2}}"></td>
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
                                        <td><input type="text" disabled name="perusahaan1" class="form-control" value="{{$pekerjaan->perusahaan1}}"></td>
                                        <td><input type="text" disabled name="posisi1" class="form-control" value="{{$pekerjaan->posisi1}}"></td>
                                        <td><input type="text" disabled name="pendapatan1" class="form-control" value="{{$pekerjaan->pendapatan1}}"></td>
                                        <td><input type="text" disabled name="tahun_pekerjaan1" class="form-control" value="{{$pekerjaan->tahun1}}"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" disabled name="perusahaan2" class="form-control" value="{{$pekerjaan->perusahaan2}}"></td>
                                        <td><input type="text" disabled name="posisi2" class="form-control" value="{{$pekerjaan->posisi2}}"></td>
                                        <td><input type="text" disabled name="pendapatan2" class="form-control" value="{{$pekerjaan->pendapatan2}}"></td>
                                        <td><input type="text" disabled name="tahun_pekerjaan2" class="form-control" value="{{$pekerjaan->tahun2}}"></td>
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
                                <textarea name="skill" class="form-control" disabled>{{$data->skill}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <label>18. BERSEDIA DITEMPATKAN DI SELURUH KANTOR PERUSAHAAN</label>
                            </div>
                            <div class="col-md">
                                <div class="col-md">
                                    <input type="text" name="ditempatkan" class="form-control" value="{{$data->ditempatkan}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>19. Penghasilan yang diharapkan</label>
                            </div>
                            <div class="col-md">
                                <input type="text" name="penghasilan" class="form-control" value="{{$data->penghasilan}}" disabled> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md">
                                <a href="/index" class="btn btn-primary mt-5">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
