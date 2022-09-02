@extends('layouts.parent')
@section('title', 'create')
@section('css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content')


    <div class="col-md-12">

        <form action="" method="get" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <label for="name_en">Name(EN)</label>
                    <input id="name_en" type="text" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="name_ar">Name(AR)</label>
                    <input id="name_ar" type="text" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="quantity">Quantity</label>
                    <input name="quantity" id="quantity" type="number" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="price">Price</label>
                    <input name="Price" id="price" type="text" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="image">image</label>
                    <input name="image" id="image" type="file" class="form-control">
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Not Active</option>

                    </select>
                </div>

                <div class="col-md-4">
                    <label for="Subcategorie_id">Subcategorie_id</label>
                    <select name="Subcategorie_id" id="Subcategorie_id" class="form-control">
                        @foreach ($sub_gategories as $Subcategorie)
                            <option value="{{ $Subcategorie->id }}">
                                {{ $Subcategorie->name_ar }}-{{ $Subcategorie->name_en }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-4">
                    <label for="brand_id">Brand_id</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name_ar }}-{{ $brand->name_en }}</option>
                        @endforeach

                    </select>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="details_en">Details(EN)</label>
                    <textarea name="details_en" id="" cols="70" rows="10"></textarea>
                </div>

                <div class="col-md-6">

                    <div class="card-body">
                        <label for="details_en">Details(AR)</label>
                        <textarea id="summernote">
                          Place <em>some</em> <u>text</u> <strong>here</strong>
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="row mt-3 mb-5 ">

                <div class="col-md-12 justify-content-center d-flex">
                    <button type="button" class="btn btn-primary btn-lg">create</button>
                </div>
            </div>

        </form>
    </div>
@endsection
@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()


        });
    </script>

@endsection
