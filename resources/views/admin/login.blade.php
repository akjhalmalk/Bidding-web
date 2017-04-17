
{{-- @extends('admin.masteradmin') --}}

@if(count($errors)>0)
   <section class="info-box-fail">
        @foreach($errors->all() as $error)
          
           {{ $error }}
      
        @endforeach
   </section>
@endif
@if(Session::has('fail'))
   <section class="info-box-fail">
          
           {{ Session::get('fail') }}
   </section>
@endif
<form method="post" action="{{ route('admin.login') }}" class="appointment-form">
                          <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="name" class="control-label">Your name <span class="required">*</span>
                              </label>
                              <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" name="name" id="name">
                            </div>
                            
                          
                            <div class="row">
                            <div class="col-md-6 col-sm-6">
                              <label for="password" class="control-label">Password <span class="required">*</span>
                              </label>
                              <input id="password" name="password" type="password" class="wp-form-control wpcf7-text" placeholder="Pass">
                            </div>
                           
                          </div>

                          </div>   
                          
                         <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Login</span></button>  
                        <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                        </form>
                    