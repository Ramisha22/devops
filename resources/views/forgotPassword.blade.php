
@extends('template')


@section('page-layout')
    @if(session ('error'))
    <div>
            <ul style="background-color:azure">
            <li style="background-color:azure">{{session ('error')}}</li>
            </ul> 
    </div>   
    @endif
    <div class="">
        <div style="background-color: #caafa8;">
            <div class="container login">
                <div class="row">
                    <h1 style="font-size: 59px; font-weight:500; font-family: 'DM Serif Display', serif;">Trouble with logging in?</h1>
                </div>
            <div>
            <form action="/login/forgotpassword" method="POST" >
            @csrf
            <div class="form-group">
                <label class="label tcolor" >Please enter your email address so that we can send you a password recovery link!  </label>
                <input type="email" name ="email"class="form-control" style="margin-bottom: 13px;" id="email" required>
                <small id="emailvalid" class="form-text text-muted invalid-feedback">
                     Your email must be a valid email
                </small>
            </div>
            <button type="submit" class=" sub btn btn-default" >Submit</button>
            </form>
            <div>
        </div>
      </div>
</div>
<script>
    const email = document.getElementById('email');
    let validEmail = false;


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