@extends('Layout.admin-layout')

@section('konten')
    <div class="container-fluid">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Data karyawan</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table">
                    <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">#</th>
                        <th class="mdl-data-table__cell--non-numeric">Nama Lengkap</th>
                        <th class="mdl-data-table__cell--non-numeric">No. Karyawan</th>
                        <th class="mdl-data-table__cell--non-numeric">Jenis Kelamin</th>
                        <th class="mdl-data-table__cell--non-numeric">Alamat</th>
                        <th class="mdl-data-table__cell--non-numeric">Posisi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$loop->iteration}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->full_name}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->employee_number}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->gender}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$item->address}}</td>
                                <td class="mdl-data-table__cell--non-numeric"><span class="label label--mini color--green">{{$item->position}}</span> </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection