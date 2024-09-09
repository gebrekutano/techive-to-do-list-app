
<div class="mb-3 row">
    <label for="titile" class="col-form-label text-lg-end col-lg-2 col-xl-3">Titile</label>
    <div class="col-lg-10 col-xl-9">
        <input class="form-control{{ $errors->has('titile') ? ' is-invalid' : '' }}" name="titile" type="text" id="titile" value="{{ old('titile', optional($toDoList)->titile) }}" minlength="1" placeholder="Enter titile here...">
        {!! $errors->first('titile', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="mb-3 row">
    <label for="content" class="col-form-label text-lg-end col-lg-2 col-xl-3">Content</label>
    <div class="col-lg-10 col-xl-9">
        <input class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" type="text" id="content" value="{{ old('content', optional($toDoList)->content) }}" minlength="1" placeholder="Enter content here...">
        {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

<div class="mb-3 row">
    <label for="status" class="col-form-label text-lg-end col-lg-2 col-xl-3">Status</label>
    <div class="col-lg-10 col-xl-9">
        <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" type="text" id="status" value="{{ old('status', optional($toDoList)->status) }}" minlength="1" placeholder="Enter status here...">
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
    </div>
</div>

