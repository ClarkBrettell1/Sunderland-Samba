@extends('layouts.layout')

@section('content')
 <h1 class="text-center">Volunteer</h1>
 <div class="mssg"> {{ session('mssg') }}</div>
    <section class="page-size" id="Volunteer">
      
        <p>
            We have a wide variety of volunteering opportunities for young people and adults especially in the
            areas of football coaching, youth work, fundraising and social media. We invest throughout the year
            in our volunteers training and development in the UK and overseas. Young volunteers, aged 11-15
            years, have the opportunity to develop their confidence and skills planning short term community
            projects in school holidays. All volunteers aged 16+ are invited to join our UK team on regular
            international youth exchange trips to Kenya.
        </p>
        <p>
           You can enquire about volunteering by contacting us <a href="/contact">here</a> or emailing john1boyd@yahoo.co.uk 
        </p>

    
    </section>

    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
