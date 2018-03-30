@extends('app')

@section('content')

<form>
  <div class="row">
    <div class="col-sm-3 ">
     <select name="asic" id="asic" class="form-control">
     	<option value="L3+" selected="">L3+</option>
     	<option value="S9">S9</option>
     	<option value="D3">D3</option>
     	<option value="A3">A3</option>
     </select>
    </div>
  </div>  
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="IP first">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="IP last">
    </div>    
    <div class="col">
      <input type="text" class="form-control" placeholder="pool">
    </div>    
    <div class="col">
      <input type="text" class="form-control" placeholder="username">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="password">
    </div>
  </div> 
  <br>
  <div class="row">
    <div class="col-sm-3">
      <button type="button" class="form-control">เปลี่ยน POOL</button>
    </div>
  </div>



</form>

@endsection