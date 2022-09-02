@extends('layouts.parent')

@section('title', 'Edit')

@section('content')

    <h3 style="color: red;margin: auto">Edit : {{ $product->name_en }} </h3>
    <div class="col-md-12 mt-5">

        <form action="{{ route('Post.Edit', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <label for="name_en">Name(EN)</label>
                    <input id="name_en" type="text" value="{{ $product->name_en }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="name_ar">Name(AR)</label>
                    <input id="name_ar" type="text" value="{{ $product->name_ar }}" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="quantity">Quantity</label>
                    <input name="quantity" value="{{ $product->quantity }}" id="quantity" type="number"
                        class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="price">Price</label>
                    <input name="Price" id="price" value="{{ $product->price }}" type="text" class="form-control">
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
                        <option @selected($product->status == 1) value="1">Active</option>
                        <option @selected($product->status == 0) value="0">Not Active</option>

                    </select>
                </div>

                <div class="col-md-4">
                    <label for="Subcategorie_id">Subcategorie_id</label>
                    <select name="Subcategorie_id" id="Subcategorie_id" class="form-control">
                        @foreach ($sub_gategories as $Subcategorie)
                            <option @selected($product->Subcategorie_id == $Subcategorie->id) value="{{ $Subcategorie->id }}">
                                {{ $Subcategorie->name_ar }}-{{ $Subcategorie->name_en }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="col-md-4">
                    <label for="brand_id">Brand_id</label>
                    <select name="brand_id" id="brand_id" class="form-control">
                        @foreach ($brands as $brand)
                            <option @selected($product->brand_id == $brand->id) value="{{ $brand->id }}">
                                {{ $brand->name_ar }}-{{ $brand->name_en }}</option>
                        @endforeach

                    </select>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="details_en">Details(EN)</label>
                    <textarea name="details_en" id="details_en" cols="70" rows="10">{{ $product->details_en }}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="details_ar">Details(AR)</label>
                    <textarea name="details_ar" id="details_ar" cols="70" rows="10">{{ $product->details_ar }}</textarea>

                </div>
            </div>

            <div class="row mt-3 mb-5 ">

                <div class="col-md-12 justify-content-center d-flex">
                    <button type="submit" class="btn btn-primary btn-lg">Update</button>
                </div>
            </div>

        </form>
    </div>

@endsection
