<div class="modal-body">
    Apakah {{ $p->jenis }} yakin ingin melakukan konfirmasi (Atasan Berwenang)?
</div>
<div class="modal-footer d-flex justify-content-center">
    <form action="/cuti-approval2/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval2" value="Y">
        <button type="submit" class="btn btn-success">Terima</button>
    </form>
    <form action="/cuti-approval2/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval2" value="N">
        <button type="submit" class="btn btn-danger">Tolak</button>
    </form>
    <form action="/cuti-approval2/edit/{{ $p->id_mohoncuti }}" method="post">
        @csrf
        <input type="hidden" name="approval2" value="Ditangguhkan">
        <button type="submit" class="btn btn-primary">Diproses</button>
    </form>
    
</div>

