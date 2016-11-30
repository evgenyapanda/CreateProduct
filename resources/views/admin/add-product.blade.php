@extends('admin.layouts.master')


@section('content')

    {{ trans('quickadmin::admin.dashboard-title') }}

    <form action="{{ route('storeProd') }}" method="post">
        <label for="name">Name </label>
        <input type="text" id="name" name="name">
        <br>
        <br>

        <label for="cat">Categories</label>
        <input id="cat" list="i" name="cat">
        <datalist id="i">
            @foreach($categories as $category)
                <option value="{{ $category->name }}"></option>
            @endforeach
        </datalist>
        <br>
        <br>

        <label for="gender">Gender</label>
        <select size="4" name="gender[]">
            <option disabled>Select</option>
            @foreach($genders as $gender)
                <option selected value="gender">{{ $gender->gender }}</option>>
            @endforeach
        </select>
        <br>
        <br>
        <label for="photo">Photo</label>
        <input type="file" id="photo" name="photo"/>

        <button class="btn btn-primary add_images" type="button">Дополнительные изображения</button>
        <hr>

        <br>
        <br>

        <label for="text">Text</label>
        <textarea id="text" name="text"></textarea>

        <br>
        <br>

        <label for="price">Price</label>
        <input type="text" id="price" name="price"><br>

        <br>
        <br>

        <label for="discont">Discont</label>
        <input type="text" id="discont"><br>

        <br>
        <br>

        <label for="hid">Hidden</label><br>
        <input type="radio" checked name="raz"/> Show<br>
        <input type="radio" name="raz"/>Is hidden<br>

        <button type="submit">Submit</button>
        {{ csrf_field() }}
    </form>

@endsection

