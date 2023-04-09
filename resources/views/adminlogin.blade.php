@extends('template')


@section('page-layout')
@if(session ('error'))
    <div>
            <ul style="">
            <li style="">{{session ('error')}}</li>
            </ul> 
    </div>   
    @endif
  <div class="">
    <div style="background-color: #caafa8;">
    <div class="container login">
      <div class="row">
        <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Adminlogin</h1>
      </div>
      <div>
        <form action="/adminlogin/check/{$email}/{$password}" method="POST" >
          @csrf
          <div class="form-group">
            <label class="label tcolor" >Email address:</label>
            <input type="email" name ="email"class="form-control" style="margin-bottom: 13px;" id="email" required>
            <small id="emailvalid" class="form-text text-muted invalid-feedback">
              Your email must be a valid email
            </small>
          </div>
          <div class="form-group">
            <label class=" tcolor">Password:</label>
            <input type="password" name =" password"class="form-control" style="margin-bottom: 20px;" id="pwd"required>
            <small class="form-text text-muted invalid-feedback">
              Your password must be a valid email
            </small>
          </div>
          <button type="submit" class=" sub btn btn-default">Submit</button>
        </form>
        
      </div>
    </div>
  </div>


  <script>   
    const email = document.getElementById('email');
    const password = document.getElementById('pwd');
    let validEmail = false;
    let validPassword = false;

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

  
    password.addEventListener('blur', () => {

      let regex = /^[a-zA-Z]([0-9a-zA-Z]){2,10}$/;
      let str = password.value;

      if (regex.test(str)) {
        console.log('Your password is valid');
        password.classList.remove('is-invalid');
        validPassword = true;
      }
      else {
        console.log('Your phone is not password');
        password.classList.add('is-invalid');
        validPassword = false;

      }
    })

  </script>
@endsection