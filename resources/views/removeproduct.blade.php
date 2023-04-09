@extends('admintemplate')

@section('page-layout')
@if(session ('error'))
    <div>
            <ul style="">
            <li style="">{{session ('error')}}</li>
            </ul> 
    </div>   
    @endif
  <div style="background-color: #caafa8;">
    <div class="container login" >
      <div class="row">
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Remove Product</h1>
      </div>
      <div>
        <form action='/admin/removeproduct/{$name}/{$category}' method ="POST">
        @csrf
          <div class="form-group">
            <label class="label tcolor" for="text">Product Name</label>
            <input type="text" class="form-control" name ="name" style="margin-bottom: 13px;" id="pname" required>
            <small id="namevalid" class="form-text text-muted invalid-feedback">
              Your Product name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor">Category</label>
            <input type="text" class="form-control" name = "category"style="margin-bottom: 20px" id="category"required>
            <small id="" class="form-text text-muted invalid-feedback">
              Your CAtegory name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <button type="submit" class=" sub btn btn-default">Submit</button>
        </form>

      </div>
    </div>
  </div>
  <script>
    
    
const pname = document.getElementById('pname');
const category = document.getElementById('category');

let validCategory = false;
let validPname = false;



pname.addEventListener('blur', () => {

  let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
  let str = pname.value;
   
  if (regex.test(str)) {
    console.log('Your name is valid');
    pname.classList.remove('is-invalid');
    validPname = true;
  }
  else {

    pname.classList.add('is-invalid');
    validPname = false;
    console.log('Your name is not valid');
  }
})


category.addEventListener('blur', () => {

  let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
  let str = category.value;
   
  if (regex.test(str)) {
    console.log('Your category is valid');
    category.classList.remove('is-invalid');
    validCategory = true;
  }
  else {
    console.log('Your category is not valid');
    category.classList.add('is-invalid');
    validCategory = false;
  }
})
  </script>

@endsection