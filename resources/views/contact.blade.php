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
<div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4995.275690376701!2d174.7448956058515!3d-36.85726463838321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d4795b23525bb%3A0x2e7e3ac010c795a8!2s27+Ponsonby+Rd%2C+Grey+Lynn%2C+Auckland+1011!5e0!3m2!1sen!2snz!4v1487987881743" width="200" height="200" frameborder="0" style="border:0"></iframe>
                    </div>
                    <!-- end of google-maps -->
<!--  <div id="map"></div>-->
    <script>
      function initMap() {
        var uluru = {lat: -41.298262, lng: 174.774926};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApg2tiuTdGATrSvfmOu0qsYvljpoGZPKo&callback=initMap">
    </script>


</div>
</div>
</div>
@stop