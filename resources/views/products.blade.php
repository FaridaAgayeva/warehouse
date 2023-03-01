@extends('layouts.app')
@section('content')

        <!-- 1-3-block row start -->
        <div class="card-block">
            <div class="row">
                <div class="col-lg-24 table-responsive">
                    <div class="card">
                        <div class="card-header  font-weight-bold  ">
                        <h5 class="card-header-text">Məhsullar  <button type="button" id="addNewBook" class="btn btn-success">Add</button></h5>                         </div>
                        <div class="card-block">
                            <table class="table table-bordered" id="datatable-ajax-crud">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Brend</th>
                                        <th>Məhsul</th>
                                        <th>Şəkil</th>
                                        <th>Alış</th>
                                        <th>Satış</th>
                                        <th>Miqdar</th>
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
                                    <form action="javascript:void(0)" id="addEditProductsForm" name="addEditProductsForm"
                                        class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" id="id">
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Brend</label>
                                            <div class="col-sm-12">
                                            <select class="form-control" style="width: 200px" id="brands_id"
                                                name="brands_id">
                                                @foreach ($brand_data as $brand)
                                                <option value="{{$brand->id}}">{{$brand->ad}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Məhsul</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="mehsul" name="mehsul"
                                                    placeholder="Məhsulu daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Alış</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="alis" name="alis"
                                                    placeholder="Alış qiymətini daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Satış</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="satis" name="satis"
                                                    placeholder="Satış qiymətini daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Miqdar</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="miqdar" name="miqdar"
                                                    placeholder="Miqdarı daxil edin" maxlength="50" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Şəkil</label>
                                            <div class="col-sm-12">
                                                <input type="file" class="form-control" id="sekil" name="sekil"
                                                    required="">
                                            </div>
                                            <div class="col-sm-6 pull-right">
                                                <img id="preview-image" src="" alt="preview image"
                                                    style="max-height: 250px;">
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
                            $('#sekil').change(function () {

                                let reader = new FileReader();
                                reader.onload = (e) => {
                                    $('#preview-image').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(this.files[0]);

                            });
                            $('#datatable-ajax-crud').DataTable({
                                processing: true,
                                serverSide: true,
                                ajax: "{{ route('products') }}",
                                columns: [{
                                        data: 'id',
                                        name: 'id',
                                        'visible': false
                                    },
                                    {
                                        data: 'brand',
                                        name: 'brands_id'
                                    },
                                    {
                                        data: 'mehsul',
                                        name: 'mehsul'
                                    },
                                    {
                                        data: 'sekil',
                                        name: 'sekil',
                                        render: function (data, type, full, meta) {
                                            return '<img src="' + data +
                                                '"  height="25" width="75">'
                                        },
                                        orderable: false
                                    },
                                    {
                                        data: 'alis',
                                        name: 'alis'
                                    },
                                    {
                                        data: 'satis',
                                        name: 'satis'
                                    },
                                    {
                                        data: 'miqdar',
                                        name: 'miqdar'
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
                                $('#addEditProductsForm').trigger("reset");
                                $('#ajaxBookModel').html("Add Book");
                                $('#ajax-book-model').modal('show');
                                $("#sekil").attr("required", "true");
                                $('#id').val('');
                                $('#preview-image').attr('src',
                                    'https://www.riobeauty.co.uk/images/product_image_not_found.gif'
                                );
                            });

                            $('body').on('click', '.edit', function () {
                                var id = $(this).data('id');

                                // ajax
                                $.ajax({
                                    type: "POST",
                                    url: "{{ url('edit-products') }}",
                                    data: {
                                        id: id
                                    },
                                    dataType: 'json',
                                    success: function (res) {
                                        $('#ajaxBookModel').html("Edit Book");
                                        $('#ajax-book-model').modal('show');
                                        $('#id').val(res.id);
                                        $('#brands_id').val(res.brands_id);
                                        $('#mehsul').val(res.mehsul);
                                        $('#alis').val(res.alis);
                                        $('#satis').val(res.satis);
                                        $('#miqdar').val(res.miqdar);
                                        document.getElementById('preview-image').src = res
                                            .sekil
                                        $('#sekil').removeAttr('required');
                                    }
                                });
                            });
                            $('body').on('click', '.delete', function () {
                                if (confirm("Delete Record?") == true) {
                                    var id = $(this).data('id');

                                    // ajax
                                    $.ajax({
                                        type: "POST",
                                        url: "{{ url('delete-products') }}",
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
                            $('#addEditProductsForm').submit(function (e) {
                                e.preventDefault();

                                var formData = new FormData(this);

                                $.ajax({
                                    type: 'POST',
                                    url: "{{ url('add-update-products')}}",
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
