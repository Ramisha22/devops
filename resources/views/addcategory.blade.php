@extends('admintemplate')

@section('page-layout')
  <div style="background-color: #caafa8;">
    <div class="container login" >
      <div class="row">
        <h1 style="font-size: 59px;    padding-bottom: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Add Category</h1>
      </div>
      <div>
        <form action='/admin/addcategory/{$category}/{$description}' method ="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label class=" tcolor">Category</label>
            <input type="text" class="form-control" name = "category"style="margin-bottom: 20px" id="category"required>
            <small id="" class="form-text text-muted invalid-feedback">
              Your CAtegory name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          
          <div class="form-group">
            <label class=" tcolor">Description</label>
            <input type="text" class="form-control" style="margin-bottom: 20px" id="price" name = "description"required>
          </div>
          <button type="submit" class=" sub btn btn-default">Submit</button>
        </form>

      </div>
    </div>
  </div>
  <script>
    
    

const category = document.getElementById('category');

let validCategory = false;

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