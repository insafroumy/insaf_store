@extends('layouts.admin')
@section('content')
    <div class="py-3 px-5">
        <form action="{{url('products/store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
            </div>

            <div class="mb-3">
                <label for="quantityFormControlInput" class="form-label">كمية المنتج</label>
                <input type="number" class="form-control" id="quantity" name="quantity" >
            </div>

            <div class="mb-3">
                <label for="priceFormControlInput" class="form-label">سعر المنتج</label>
                <input type="number" class="form-control" id="price" name="price" >
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlInput" class="form-label">وصف المنتج</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="10"></textarea>
            </div>

            <div class="mb-3">
                <label for="descriptionFormControlInput" class="form-label">اختر الصنف</label>
                <select class="form-control" name="category" id="category">
                    <option value="#"></option>
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
