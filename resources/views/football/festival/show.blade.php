@extends('layouts.layout')

@section('content')
 <h1 class="text-center">Festival Of Football</h1>
 <div class="mssg"> {{ session('mssg') }}</div>
 <section class="page-size" id="Festival">
      
    <p>
        This runs during school holidays in May, August and October for children aged 5-12 years old. Boys
        and girls of all abilities are welcome as we focus on fun, staying healthy, improving our football skills
        and building friendships. There is plenty to learn alongside football with fun games, DJ workshops,
        healthy eating, drumming and it’s a great opportunity to make new friends. We have qualified
        coaches and an awesome group of staff &amp; volunteers ensuring that everyone has a great experience.
    </p>
    <p>         Our ethos of welcome and providing an atmosphere where children and young people can be
        themselves but also learn about and appreciate each other’s differences is appreciated. Feedback
        from parents suggests that children who might not fit in elsewhere find a place and people they can
        connect with and want to come back to. We build on these foundations by enabling young
        volunteers to take on responsibility for delivering the programme and learning new skills.
       You can find out more about the Festival of Football by contacting us <a href="/contact">here</a> or emailing john1boyd@yahoo.co.uk 
    </p>


</section>
    <a class="btn btn-primary m-1 p-2 border rounded" href="/"><i class="lni lni-angle-double-left p-1"></i>Home</a>
@endsection
