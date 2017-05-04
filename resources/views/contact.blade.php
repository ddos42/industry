@extends('layouts.app') @section('content')
<div class="container site_content">
<div class="row">
<div class="col-md-6">
<div class="contact_info"> <p>Please don't hesitate to contact us for any questions or queries that you may have.<br>

We are open from 8:30am to 5:30pm, Monday to Friday, NZST. </p> </div>
<form action="/">
    <div class="form-wrapper">
        <div class="form-item">
            <label for="name-input">Your Name</label>
            <input type="text" id="name-input" name="full name" pattern="[a-zA-Z\s]+" placeholder="Full Name"  required /> </div>
        <div class="form-item">
            <label for="form-item-email">Email</label>
            <input type="email" id="form-item-email" name="email" placeholder="Email" required> </div>
                 <div class="form-item">
            <label for="phone-input">Telephone Number</label>
            <input type="number" id="phone-input" name="phonenumber" placeholder="Phone Number"  /> </div>


        <div class="form-item">
            <label for="form-item-textarea">Message</label>
            <textarea id="form-item-textarea" name="form-item-textarea" placeholder="Message" rows="5" cols="30" required></textarea>
        </div>
             <button class="checkout_submit" type="submit">Send</button>    

    </div>
</form>
</div>
<div class="col-md-6 contact_map">
<div class="google_maps">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5041.755931644769!2d174.7760139530989!3d-41.29252568800015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afd770c8aad7%3A0xe35be44c3bf6959c!2sCuba+Mall%2C+Te+Aro%2C+Wellington+6011!5e0!3m2!1sen!2snz!4v1493932685226" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
                    <!-- end of google-maps -->
<!--  <div id="map"></div>-->



</div>
</div>
</div>

@stop