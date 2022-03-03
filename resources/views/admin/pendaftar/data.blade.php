@foreach ($data as $key => $v)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $v->nik}}</td>
        <td>{{ $v->nama }}</td>
        <td>{{ $v->nama_sekolah}} {{$v->kab_Sekolah}}</td>
        <td>{{ $v->no_hp}}</td>
        <td>{{ $v->Jurusan->nama}}</td>
        <td>{{ $v->no_formulir}}</td>
        <td>
            {{-- {!! Helper::btn_action($v->id) !!} --}}
            {!! Helper::btn_detail($v->nik) !!}
            {!! Helper::btn_invoice($v->id) !!}
        </td>
    </tr>
@endforeach
