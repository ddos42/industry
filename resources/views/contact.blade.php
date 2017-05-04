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
  <div id="map"></div>
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