@section('head')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection

@extends('layouts.master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3 m-0">Product Table</h6>
                        <a class="btn btn-sm btn-light me-3" href="javascript:void(0)" id="createNewProduct">New
                            Product</a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0 data-table">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Foto</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Varian</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Varian Desc</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Stock</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody class="text-center text-xs">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="productForm" name="productForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="product_name" class="col control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                placeholder="Enter Name of Product" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_foto" class="col control-label">Foto</label>
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="product_foto" name="product_foto"
                                accept="image/*" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_desc" class="col control-label">Description</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="product_desc" name="product_desc"
                                placeholder="Enter Description of Product" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_varian" class="col control-label">Varian</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="product_varian" name="product_varian"
                                placeholder="Enter Variaan of Product" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_varian_desc" class="col control-label">Varian Description</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="product_varian_desc" name="product_varian_desc"
                                placeholder="Enter Varian Description" value="" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_price" class="col control-label">Price (Rp)</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="product_price" name="product_price" value=""
                                required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_stock" class="col control-label">Stock</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="product_stock" name="product_stock" value=""
                                required="">
                        </div>
                    </div>

                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
                        <button type="button" class="btn btn-secondary" id="closeBtn"
                            data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scriptsProduct')
<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('products.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'foto', name: 'foto'},
                {data: 'product_name', name: 'product_name'},
                {data: 'product_varian', name: 'product_varian'},
                {data: 'product_varian_desc', name: 'product_varian_desc'},
                {data: 'product_price', name: 'product_price'},
                {data: 'product_stock', name: 'product_stock'},
                {data: 'action', name: 'action', orderable: true, searchable: false},
            ]
        });

        //create button
        $('#createNewProduct').click(function() {
            $('#saveBtn').val("create-product");
            $('#id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Create Product");
            $('#productModal').modal('show');
        });

        //edit button
        $('body').on('click', '.editProduct', function() {
            var id = $(this).data('id');
            $.get("{{ route('products.index') }}" + '/' + id + '/edit', function(data) {
                $('#modelHeading').html("Edit Product");
                $('#saveBtn').val("edit-product");
                $('#productModal').modal('show');
                $('#id').val(data.id);
                $('#product_name').val(data.product_name);
                $('#product_desc').val(data.product_desc);
                $('#product_varian').val(data.product_varian);
                $('#product_varian_desc').val(data.product_varian_desc);
                $('#product_price').val(data.product_price);
                $('#product_stock').val(data.product_stock);
            })
        });

        //function save
        $('#saveBtn').click(function(e) {
            e.preventDefault();
            $(this).html('Submit');

            var formData = new FormData($('#productForm')[0]);

            $.ajax({
                data: formData, // Menggunakan formData
                processData: false,
                contentType: false,
                url: "{{ route('products.store') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#productForm').trigger("reset");
                    $('#productModal').modal('hide');
                    table.draw();

                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save');
                }
            });
        });

        //delete button
        $('body').on('click', '.deleteProduct', function() {

            var id = $(this).data("id");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "{{ route('products.store') }}" + '/' + id,
                success: function(data) {
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
@endsection