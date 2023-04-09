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
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Remove customer</h1>
      </div>
      <div>
        <form action='/admin/removecustomer/{$fname}/{$email}' method ="POST">
        @csrf
        <div class="form-group">
            <label class="label tcolor">First Name:</label>
            <input type="text" name="name"  for="name"class="form-control" id="fname" required>
            <small id="namevalid" class="form-text text-muted invalid-feedback">
              Your first name must be 2-10 characters long and should not start with a number
            </small>
          </div>
          <div class="form-group">
            <label class="label tcolor">Email address:</label>
            <input type="email"name="email" class="form-control" style="margin-bottom: 13px;" id="email" required>
            <small id="emailvalid" class="form-text text-muted invalid-feedback">
              Your email must be a valid email
            </small>
          </div>
          <button type="submit" class=" sub btn btn-default">Submit</button>
        </form>

      </div>
    </div>
  </div>
  <script>
    const fname = document.getElementById('fname');
    const email = document.getElementById('email');
    let validEmail = false;
    let validFname = false;

    fname.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = fname.value;

      if (regex.test(str)) {
        console.log('Your name is valid');

        fname.classList.remove('is-invalid');
        validFname = true;
      }
      else {
        console.log('Your name is not valid');

        fname.classList.add('is-invalid');
        validFname = false;

      }
    })

    email.addEventListener('blur', () => {

      let regex = /^([a-z0-9-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/;
      let str = email.value;

      if (regex.test(str)) {
        console.log('Your email is valid');
        email.classList.remove('is-invalid');
        validEmail = true;
      }
      else {
        console.log('Your email is not valid');
        email.classList.add('is-invalid');
        validEmail = false;
      }
    })

   

    
    
  </script>

@endsection
