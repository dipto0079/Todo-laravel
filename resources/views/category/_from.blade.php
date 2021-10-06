<div class="mb-4">
    <label class="block" for="name">Name</label>
    <input type="text" name="name"  value="{{old('name') ,isset($category) ? $category->name : ''}}" id="task">
    <p class="text-red-600">{{$errors->first('name')}}</p>
</div>
<div>
    <button class="px-4 py-2 bg-green-600" type="submit">{{$buttonText}}</button>
</div>
