@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->nik}}</td>
        <td>{{ $v->nama }}</td>
        <td>{{ $v->nama_sekolah }} {{$v->kab_sekolah}}</td>
        <td>{{ $v->no_hp}}</td>
        <td>{{ $v->Jurusan->nama}}</td>
        <td>{{ $v->no_formulir}}</td>
        <td>{{ $v->no_tes}}</td>
        <td>{{ $v->ruangan}}</td>
        @if (auth()->user()->role =='superadmin')
        <td>{{ $v->User->name}}</td>
        @endif
        <td>
            {!! Helper::btn_detailtes($v->nik) !!}
        </td>
    </tr>
@endforeach
