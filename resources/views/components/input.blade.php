<div class="form-group">
    <label for="" class="form-label">{{$label}}</label>
    <input type="{{$type}}"
      class="form-control" name="{{$name}}" id="1" aria-describedby="helpId" placeholder="">
    {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
    {{-- <span class="text-danger">
        @error('{{$name}}')
            {{$message}};  
        @enderror
    </span> --}}
</div>