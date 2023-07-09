<div class="modal-body">
    Apakah {{ $p->jenis }} yakin ingin melakukan konfirmasi (Atasan Langsung)?
</div>
<div class="modal-footer d-flex justify-content-center">
    <form action="/cuti-approval/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval" value="Y">
        <button type="submit" class="btn btn-success">Terima</button>
    </form>
    <form action="/cuti-approval/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval" value="N">
        <button type="submit" class="btn btn-danger">Tolak</button>
    </form>
    <form action="/cuti-approval/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval" value="Ditangguhkan">
        <button type="submit" class="btn btn-primary">Diproses</button>
    </form>
    
</div>

