@extends('app')

@section('content')
<div class="row">
    <div class="col-3"></div>    
    <div class="col-6">
        <form id="membership-form" target="_self" autocomplete="off" action="/contact/submit" method="POST">
            @csrf
            <div class="col-md-12 col-sm-12">
                <div class="block">        
                    <div class="form-group">
                        <label for="user_name" style="font-size: 20px; color: #47424C;">Full Name :</label>
                        <input id="user_name" name="user_name" type="text" class="form-control" placeholder="Enter Full Name" required="true">
                    </div>
                    <div class="form-group">
                        <label for="user_email" style="font-size: 20px; color: #47424C;">Email Address :</label>
                        <input id="user_email" name="user_email" type="email" class="form-control" placeholder="Email Address" autocomplete="off" required="true">
                    </div>
                    
                </div>
                </div>
                <div class="col-md-16 col-sm-12">
                <div class="block">
                    <div class="form-group">
                        <label for="user_subject" style="font-size: 20px; color: #47424C;">Subject :</label>
                        <input id="user_subject" name="user_subject" type="text" class="form-control" placeholder="Subject" required="true">
                    </div>
                    <div class="form-group">
                        <label for="user_message" style="font-size: 20px; color: #47424C;">Message :</label>
                        <textarea id="user_message" name="user_message" type="text" class="form-control" rows="3" placeholder="Your Message" required="true"></textarea>
                    </div>
                        <br><button class="btn btn-primary" type="submit">Send Message</button>
                </div>
                </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>
@endsection
