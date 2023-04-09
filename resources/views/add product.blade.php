@extends('admintemplate')

@section('page-layout')
@if(session ('error'))
    <div>
            <ul style="">
            <li style="">{{session ('error')}}</li>
            </ul> 
    </div>   
    @endif
  <div style="background-color: #caafa8;     height: 763px;">
    <div class="container login" >
      <div class="row">
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Add Products</h1>
      </div>
      <div>
        <form action='/admin/addproduct/{$name}/{$category}/{$img}/{$quantity}/{$price}' method ="POST" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name = "category"style="margin-bottom: 20px" id="category" required>
            <small id="" class="form-text text-muted invalid-feedback">
              Your CAtegory name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor" style="margin-bottom:32px;">Attach Image</label>
            <input class="form-control" type="file" name = "img" multiple style="margin-bottom: 20px;"required>
          </div>
          <div class="form-group">
            <label class=" tcolor">Quantity</label>
            <input type="text" class="form-control" style="margin-bottom: 20px" id="quantity" name = "quantity"required>
            <small class="form-text text-muted invalid-feedback">
              Your quantity must be a number
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor">Price</label>
            <input type="text" class="form-control" style="margin-bottom: 20px" id="price" name = "price"required>
            <small class="form-text text-muted invalid-feedback">
              Your Price must be a number
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
const quantity = document.getElementById('quantity');
const price = document.getElementById('price');
let validCategory = false;
let validQuantity = false;
let validPname = false;
let validPrice = false;


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
quantity.addEventListener('blur', () => {

let regex = /^[0-9]{2,10}$/;
let str = quantity.value;
 
if (regex.test(str)) {
  console.log('Your quantity  is valid');
  quantity.classList.remove('is-invalid');
  validQuantity = true;
}
else {
  quantity.classList.add('is-invalid');
  validQuantity = false;
  console.log('Your quantity is not valid');
}
})

price.addEventListener('blur', () => {

let regex = /^[0-9]{2,10}$/;
let str =price.value;
 
if (regex.test(str)) {
  console.log('Your price  is valid');
  price.classList.remove('is-invalid');
  validPrice = true;
}
else {
  price.classList.add('is-invalid');
  validPrice= false;
  console.log('Your quantity is not valid');
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