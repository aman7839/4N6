@extends('frontendviews.main')

    @section('content')
    <section class="cmn_header_section space">
      <div class="custom_container">
          <h1>Welcome <br>
              Sign Up Today</h1>
      </div>
  </section>
  <div>

      <div class="custom_container space">
          <div class="cmn_heading mb-4">
              <h2>User Sign Up</h2>
              <p class="mt-3">Don’t have an account ? <a href="">Create your Account</a></p>
          </div>
          <!-- <div class="multiple_nav">
              <ul>
                  <li class="active">
                      <p>Account Info</p>
                      <span class="active"></span>
                  </li>
                  <li>
                      <p>School and Team Information</p>
                      <span></span>
                  </li>
                  <li>
                      <p>Billing Information</p>
                      <span></span>
                  </li>

              </ul>
          </div> -->
          <!-- user form 1 starts here -->
          {{-- <div id="wizard"> --}}
            <form id="wizard" action="#" method="">
               
           
              <h2>Account Info</h2>
              <section>
                  <div class="register_form_two">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                
                           
                                  <label for="user_name">User Name</label>
                                  <input type="text" name="user_name"  class="form-control required"  placeholder="Enter user name">
                                  
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input id="password" name="password" type="password"  class="form-control required" placeholder="Enter your password" >
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="confirmpassword">Confirm Password</label>
                                  <input id="confirmpassword" name="confirmpassword" type="password"  class="form-control required" placeholder="Enter your password" >
                                  
                                  
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="school_email">School Email Address</label>
                                  <input id="school_email" name="school_email" type="email"  class="form-control required" placeholder="Enter your password" >

                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="confirm_school_email">Confirm School Email Address</label>
                                  <input id="confirm_school_email" name="confirm_school_email" type="email"  class="form-control required" placeholder="Enter your password" >

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="personal_email">Personal Email Address</label>
                                  <input id="personal_email" name="personal_email" type="email"  class="form-control required" placeholder="Enter your password" >

                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="confirm_personal_email">Confirm Personal Email Address</label>
                                  <input id="confirm_personal_email" name="confirm_personal_email" type="email"  class="form-control required" placeholder="Enter your password" >

                              </div>
                          </div>
                      </div>

                  </div>
              </section>

              <!-- user form one ends here -->
              <!-- user form two starts here -->
              <h2>School and Team Information</h2>
              <section>
                  <div class="register_form_two">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="form-group">
                                  <label for="head_coach_name">Head Coach's Name (First and last Name)</label>
                                  <input id="head_coach_name" name="head_coach_name" type="text"  class="form-control required" placeholder="Enter  name" >

                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="school_phone_no">School Phone Number</label>
                                  
                                  <input  type="tel" id="school_phone_no" name="school_phone_no" class="form-control required" placeholder="Enter school phone number">
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_name">School Name</label>
                                  <input  id="school_name" type="text" name="school_name" class="form-control required" placeholder="Enter school name">
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="personal_phone_no">Personal Phone Number</label>
                                  <input  type="tel"  id="personal_phone_no" name="personal_phone_no" class="form-control required" placeholder="Enter personal phone number">
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_address">School Address</label>
                                  <input  id="school_address" type="text"  name="school_address" class="form-control required" placeholder="Enter school address">
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="assistant_coach_name">Assistant Coach's Name (First and Last Name)</label>
                                  <input  id ="assistant_coach_name" type="text" name="assistant_coach_name" class="form-control required" placeholder="Enter name">
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_city">School City</label>
                                  <input type="text" name="school_city" class="form-control required" placeholder="Enter school city">
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="assistant_coach_email_address">Assistant Coach Email Address</label>
                                  <input  id="assistant_coach_email_address" type="email" name="assistant_coach_email_address" class="form-control required" placeholder="Enter email address">
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="confirm_assistant_coach_email_address">Confirm Assistant Coach Email Address</label>
                                  <input id="confirm_assistant_coach_email_address" type="email" name="confirm_assistant_coach_email_address" class="form-control required" placeholder="Re enter email address">
                              </div>
                          </div>
                          <div class="col-lg-5 ms-auto">
                              <div class="form-group">
                                  <label for="school_state">School State</label>
                                  <select name="school_state" id="" class="form-control required">
                                      <option   value="">select One</option>
                                      <option value="option1">Option1</option>
                                        <option value="option2">Option2</option>

                                  </select>
                                
                              </div>
                          </div>
                          <div class="col-lg-6 ">
                              <div class="form-group">
                                  <label for="school_zip_code">School Zip Code</label>
                                  <input type="text" name="school_zip_code" class="form-control required" placeholder="Enter school zip code">
                              </div>
                          </div>
                      </div>

                  </div>
              </section>
              <!-- user form three starts here -->
              <h2>Billing Information</h2>
            <section>
              <div class="register_form_two">
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="billing_contact_name">Billing Contact Name (First and Last Name)</label>
                              <input type="text" name="billing_contact_name" class="form-control required" placeholder="Enter your name">
                          </div>
                      </div>
                      <div class="col-lg-5 ms-auto">
                          <div class="form-group">
                              <label for="billing_email_address">Billing Contact Email Address</label>
                              <input  id="billing_email_address"  type="email" name="billing_email_address" class="form-control required" placeholder="Enter your email">
                          </div>
                      </div>
                      <div class="col-lg-6 ">
                          <div class="form-group">
                              <label for="confirm_billing_email">Confirm Billing Contact Email Address</label>
                              <input id="confirm_billing_email" type="email"  name="confirm_billing_email"  class="form-control required" placeholder="Re Enter your email">
                          </div>
                      </div>
                      <div class="col-lg-5 ms-auto">
                          <div class="form-group">
                              <label for="billing_phone_no">Billing Phone Number</label>
                              <input type="tel"  name="billing_phone_no" class="form-control required" placeholder="Enter your phone number">
                          </div>
                      </div>
                  </div>
                  <p class="payment_method">Payment Method</p>
                  <p>(Accounts require an approved PO or payment prior to activation)</p>
              </div>
            </section>

        
        </form>
      </div>

  </div>



    @endsection
