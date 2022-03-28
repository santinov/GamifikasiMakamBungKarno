<div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-xs">
<form name="frm_add" id="frm_add" class="form-horizontal" action="{{route('simpandata')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title">Tambah Data</h4>
</div>
<div class="modal-body">
<div class="form-group"><label class="col-lg-2 control-label">Kelas</label>
<div class="col-lg-10"><input type="text" name="kelas" placeholder="Kelas" class="form-control"></div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</div>
</form>
</div>
</div>