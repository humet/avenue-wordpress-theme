@extends('layouts.app')

@section('content')
<div class="pages-home">
    <section class="pages-home__header">
      <div class="pages-home__scroll"></div>
    </section>
    <section class="pages-home__intro-content">
      <div class="container">
      <h2>Find your avenue</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in eros sed odio pellentesque interdum a nec leo. Praesent maximus felis vel volutpat elementum. Aenean id tempor ipsum. Pellentesque nisi libero, tristique quis elit sed, vestibulum ullamcorper orci. Aenean facilisis odio neque, vel cursus nibh ornare et. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in eros sed odio pellentesque interdum a nec leo. Praesent maximus felis vel volutpat elementum. Aenean id tempor ipsum. Pellentesque nisi libero, tristique quis elit sed, vestibulum ullamcorper orci. Aenean facilisis odio neque, vel cursus nibh ornare et. </p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in eros sed odio pellentesque interdum a nec leo. Praesent maximus felis vel volutpat elementum. Aenean id tempor ipsum. Pellentesque nisi libero, tristique quis elit sed, vestibulum ullamcorper orci. Aenean facilisis odio neque, vel cursus nibh ornare et. </p>
          </div>
          <div class="pages-home__button">Find Your Avenue</div>
        </div>
        <div class="pages-home__join-partner-block">
            <div class="pages-home__join-partner-image">
                <img src="@asset('images/homepage/guy.jpg')"/>
            </div>
            <div class="pages-home__join-partner-content">
              <h3>Want to Join?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in eros sed odio pellentesque interdum a nec leo. Praesent maximus felis vel volutpat elementum. Aenean id tempor ipsum. Pellentesque nisi libero, tristique quis elit sed, vestibulum ullamcorper orci. Aenean facilisis odio neque, vel cursus nibh ornare et. </p>
            </div>
            <div class="pages-home__button">Find Your Avenue</div>
          </div>
      </div>
    </section>
</div>
@endsection
