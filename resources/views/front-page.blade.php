@extends('layouts.app')

@section('content')
<div class="pages-home">
    <section class="pages-home__header">
      <div class="pages-home__scroll"></div>
    </section>
    <section class="pages-home__intro-content">
      <div class="container">
      <h2>Find your avenue</h2>
        <p>Classrooms aren’t for everyone. They don’t have to be. Nowadays  the industry moves so fast that only those who are at the forefront  of what is possible can keep up. That includes you. </p>
          <p>Avenue is a revolutionary way of learning that connects you with  the world’s most influential brands and individuals to prepare  you for a career in industry.</p>
      </div>
    <div class="pages-home__button">Find Your Avenue</div>
    </section>
    <section class="pages-home__what-is-avenue">
    </section>
    <section class="pages-home__what-we-do">
      <h2>Find out where Avenue can take you</h2>
      <div class="container">
        <div class="pages-home__join-partner-block">
          <div class="pages-home__join-partner-image">
              <img src="@asset('images/homepage/girl.jpg')"/>
          </div>
          <div class="pages-home__join-partner-content">
            <h3>Want to Join?</h3>
          <p>Develop your talent and earn a salary that gives you the opportunity to live, socialise and explore while you work. This is the Avenue philosophy. </p>          
          </div>
          <div class="pages-home__button">Find Your Avenue</div>
        </div>
        <div class="pages-home__join-partner-block">
            <div class="pages-home__join-partner-image">
                <img src="@asset('images/homepage/guy.jpg')"/>
            </div>
            <div class="pages-home__join-partner-content">
              <h3>Become a partner!</h3>
              <p>Join other influential businesses and connect with a generation of professionals who are mentally resilient and trained by the best in the industry.</p>
            </div>
            <div class="pages-home__button">Create an Avenue</div>
          </div>
      </div>
    </section>
</div>
@endsection
