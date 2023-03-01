@extends('layouts.app')
@section('content')



<!-- 1-3-block row start -->
<div class="card-block">
    <div class="row">
        <div class="col-lg-24 table-responsive">
            <div class="card">
                <div class="card-header  font-weight-bold  ">
                    <h5 class="card-header-text">Sifarişlər <button type="button" id="addNewBook"
                            class="btn btn-success">Add</button></h5>
                </div>
                <div class="card-block">
                    <table class="table table-bordered" id="datatable-ajax-crud">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Müştəri</th>
                                <th>Brend</th>
                                <th>Məhsul</th>
                                <th>Miqdar</th>
                                <th>Sifariş miqdar</th>
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
                            <form action="javascript:void(0)" id="addEditOrdersForm" name="addEditOrdersForm"
                                class="form-horizontal" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label><strong>Müştəri :</strong></label>
                                    <select class="form-control" style="width: 200px" id="client" name="client">
                                        @foreach ($client_data as $client)
                                        <option value="{{$client->id}}">{{$client->ad}}-{{$client->soyad}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><strong>Məhsul :</strong></label>
                                    <select class="form-control" style="width: 200px" id="mehsul" name="mehsul">
                                        @foreach ($product_data as $product)
                                        <option value="{{$product->id}}">
                                            {{$product->brand}}-{{$product->mehsul}}-[{{$product->miqdar}}]
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><strong>Sifarişin miqdar :</strong></label>
                                    <input type="text" class="form-control" id="omiq" name="omiq"
                                        placeholder="Miqdarı daxil edin" style="width: 200px" required="">
                                </div>
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="btn-save" value="addNewBook">Save
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
                        ajax: "{{ route('orders') }}",
                        columns: [{
                                data: 'id',
                                name: 'id',
                                'visible': false
                            },
                            {
                                data: 'client',
                                name: 'client'
                            },
                            {
                                data: 'brand',
                                name: 'brand'
                            },
                            {
                                data: 'mehsul',
                                name: 'mehsul'
                            },
                            {
                                data: 'miqdar',
                                name: 'miqdar'
                            },
                            {
                                data: 'omiq',
                                name: 'omiq'
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
                        $('#addEditOrdersForm').trigger("reset");
                        $('#ajaxBookModel').html("Add Book");
                        $('#ajax-book-model').modal('show');
                        $('#id').val('');
                    });

                    $('body').on('click', '.edit', function () {
                        var id = $(this).data('id');

                        // ajax
                        $.ajax({
                            type: "POST",
                            url: "{{ url('edit-orders') }}",
                            data: {
                                id: id
                            },
                            dataType: 'json',
                            success: function (res) {
                                $('#ajaxBookModel').html("Edit Book");
                                $('#ajax-book-model').modal('show');
                                $('#id').val(res.id);
                                $('#client_id').val(res.client_id);
                                $('#product_id').val(res.product_id);
                                $('#pmiq').val(res.pmiq);
                                $('#miqdar').val(res.miqdar);
                            }
                        });
                    });
                    $('body').on('click', '.delete', function () {
                        if (confirm("Delete Record?") == true) {
                            var id = $(this).data('id');

                            // ajax
                            $.ajax({
                                type: "POST",
                                url: "{{ url('delete-orders') }}",
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

                    $('body').on('click', '.confirm', function () {
                        if (confirm("Sifarişi təsdiq edilsin mi?") == true) {
                            var id = $(this).data('id');

                            // ajax
                            $.ajax({
                                type: "POST",
                                url: "{{ url('confirm-orders') }}",
                                data: {
                                    id: id
                                },
                                dataType: 'json',
                                success: function (res) {
                                    if (res == 'Anbarda kifayət qədər məhsul yoxdur') {
                                        alert('Anbarda kifayət qədər məhsul yoxdur')
                                    } else {
                                        var oTable = $('#datatable-ajax-crud')
                                            .dataTable();
                                        oTable.fnDraw(false);
                                    }
                                }
                            });
                        }
                    });

                    $('body').on('click', '.cancel', function () {
                        if (confirm("Sifariş ləğv edilsin mi?") == true) {
                            var id = $(this).data('id');

                            // ajax
                            $.ajax({
                                type: "POST",
                                url: "{{ url('cancel-orders') }}",
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

                    $('#addEditOrdersForm').submit(function (e) {
                        e.preventDefault();

                        var formData = new FormData(this);

                        $.ajax({
                            type: 'POST',
                            url: "{{ url('add-update-orders')}}",
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
