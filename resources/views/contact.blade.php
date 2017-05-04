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
 <iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAtUaNadLiXMIjxFe9n3xb4368SGm9B2iQ
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>


</div>
</div>
</div>
@stop