@extends('layouts.berita.app')

@section('content')
<div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column gap-2">
    <div class="flex-grow-1">
        <h4 class="fs-18 fw-semibold mb-0">Visi & Misi</h4>
    </div>
    <div class="text-end">
        <ol class="breadcrumb m-0 py-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
            <li class="breadcrumb-item active">Visi & Misi</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-bottom border-dashed d-flex align-items-center">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Visi</th>
                                            <th>Misi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>{{ optional($visimisi)->visi }}</td>
                                            <td>{{ optional($visimisi)->misi }}</td>
                                            <td>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editModal"
                                                data-id="{{ $visimisi->id }}"
                                                data-visi="{{ $visimisi->visi }}"
                                                data-misi="{{ $visimisi->misi }}">
                                                Edit
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Visi & Misi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{ route('backend.visimisi.update', 1) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" id="visimisiId" name="id">

                    <div class="mb-3">
                        <label for="visi" class="form-label">Visi</label>
                        <textarea class="form-control" id="visi" name="visi" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="misi" class="form-label">Misi</label>
                        <textarea class="form-control" id="misi" name="misi" rows="3" required></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
$('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var id = button.data('id');
    var visi = button.data('visi');
    var misi = button.data('misi');

    var modal = $(this);
    modal.find('#visimisiId').val(id);
    modal.find('#visi').val(visi);
    modal.find('#misi').val(misi);
});
</script>

@endpush
