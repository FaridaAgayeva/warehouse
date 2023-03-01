@extends('layouts.app')
@section('content')


        <!-- 1-3-block row start -->
        <div class="card-block">
            <div class="row">
                <div class="col-lg-24 table-responsive">
                    <div class="card">
                        <div class="card-header  font-weight-bold  ">
                        <h5 class="card-header-text">Xərc  <button type="button" id="addNewBook" class="btn btn-success">Add</button></h5> 
                        </div>

                        <div class="card-block">
                            <table class="table table-bordered" id="datatable-ajax-crud">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Təyinat</th>
                                        <th>Məbləğ</th>
                                        <th>Created at</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- boostrap add and edit book model -->
                    <div class="modal fade" id="ajax-book-model" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="ajaxBookModel"></h4>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0)" id="addEditXercForm" name="addEditXercForm"
                                        class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" id="id">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Təyinat</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="teyinat" name="teyinat"
                                                    placeholder="Təyinatı daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Məbləğ</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="mebleg" name="mebleg"
                                                    placeholder="Məbləği daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary" id="btn-save"
                                                value="addNewBook">Save
                                                changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end bootstrap model -->
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            $('#datatable-ajax-crud').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "{{ route('xerc') }}",
                                columns: [{
                                        data: 'id',
                                        name: 'id',
                                        'visible': false
                                    },
                                    {
                                        data: 'teyinat',
                                        name: 'teyinat'
                                    },
                                    {
                                        data: 'mebleg',
                                        name: 'mebleg'
                                    },
                                    {
                                        data: 'created_at',
                                        name: 'created_at'
                                    },
                                    {
                                        data: 'action',
                                        name: 'action',
                                        orderable: false
                                    },
                                ],
                                order: [
                                    [0, 'desc']
                                ]
                            });
                            $('#addNewBook').click(function () {
                                $('#addEditXercForm').trigger("reset");
                                $('#ajaxBookModel').html("Add Book");
                                $('#ajax-book-model').modal('show');
                                $('#id').val('');
                            });

                            $('body').on('click', '.edit', function () {
                                var id = $(this).data('id');

                                // ajax
                                $.ajax({
                                    type: "POST",
                                    url: "{{ url('edit-xerc') }}",
                                    data: {
                                        id: id
                                    },
                                    dataType: 'json',
                                    success: function (res) {
                                        $('#ajaxBookModel').html("Edit Book");
                                        $('#ajax-book-model').modal('show');
                                        $('#id').val(res.id);
                                        $('#teyinat').val(res.teyinat);
                                        $('#mebleg').val(res.mebleg);
                                    }
                                });
                            });
                            $('body').on('click', '.delete', function () {
                                if (confirm("Delete Record?") == true) {
                                    var id = $(this).data('id');

                                    // ajax
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ url('delete-xerc') }}",
                                        data: {
                                            id: id
                                        },
                                        dataType: 'json',
                                        success: function (res) {
                                            var oTable = $('#datatable-ajax-crud')
                                                .dataTable();
                                            oTable.fnDraw(false);
                                        }
                                    });
                                }
                            });
                            $('#addEditXercForm').submit(function (e) {
                                e.preventDefault();

                                var formData = new FormData(this);

                                $.ajax({
                                    type: 'POST',
                                    url: "{{ url('add-update-xerc')}}",
                                    data: formData,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: (data) => {
                                        $("#ajax-book-model").modal('hide');
                                        var oTable = $('#datatable-ajax-crud').dataTable();
                                        oTable.fnDraw(false);
                                        $("#btn-save").html('Submit');
                                        $("#btn-save").attr("disabled", false);
                                    },
                                    error: function (data) {
                                        console.log(data);
                                    }
                                });
                            });
                        });

                    </script>
                </div>
            </div>
        </div>
    </div>

    @endsection
