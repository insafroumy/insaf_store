@extends('layouts.admin')
@section('content')
    <div class="py-3 px-5">
        <form action="{{url('products/update/'.$product->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج" value="{{$product-> name}}">
            </div>

            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">كمية المنتج</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="كمية المنتج" value="{{$product-> quantity}}">
            </div>

            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">سعر المنتج</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="سعر المنتج" value="{{$product-> price}}">
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlInput" class="form-lable">وصف المنتج</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="10">{{$product-> description}}
                </textarea >
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlInput" class="form-lable">اختر الصنف</label>
                <select class="form-control" name="category" id="category">
                    <option value="{{$category_name->id}}">{{$category_name->name}}</option>
                    @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <input type="submit" value="احفظ" class="btn btn-info">
            </div>

        </form>
    </div>
@endsection
