<div class="mb-4">
    <label class="block" for="task">Task</label>
    <input type="text" name="task" value="{{old('task') ,isset($todo) ? $todo->task : ''}}" id="task">
    <p class="text-red-600">{{$errors->first('task')}}</p>
</div>
<div class="mb-4">
    <label class="block" for="task">Category</label>
    <select name="categories[]" id="category_id" multiple="true">
        <option value="">{{__("Select Category")}}</option>
        @foreach($categories as $id => $value)
            <option  value="{{$id}}">{{$value}}</option>
        @endforeach
{{--        @isset($todo) {{$todo->$categories->firstWhere('name',$value) ? 'Select':''}} @endisset--}}
    </select>
    <p class="text-red-600">{{$errors->first('task')}}</p>
</div>
<div class="mb-4">
    <label class="block" for="image">Image Upload</label>
    <input type="file" name="image" value="{{old('task') ,$todo->image}}" id="image">
    <p class="text-red-600">{{$errors->first('task')}}</p>
</div>
<div>
    <button class="px-4 py-2 bg-green-600" type="submit">{{$buttonText}}</button>
</div>
