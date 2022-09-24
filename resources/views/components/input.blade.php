@props(['dvalue'=>'dvalue','lable'=>'lable','name'=>'name','type'=>'type'])
    <div class="form-group">
      <lable class="m">{{$lable}}</lable><br>
      <input type="{{$type}}" name="{{$name}}" id="" lable="enter your name" @if(isset($dvalue) && $name=="gender") value="{{$dvalue}}" @endif/><br>
      <!-- <small id="helpId" class="text-muted">help text</small> -->
      <span class="text-denger">
        <!-- @error('name')
                {{$message}}
                @enderror -->
      </span>
    </div>