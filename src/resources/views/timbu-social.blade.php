@extends('layouts.dashboard-app')

@section('content')
<div class="jumbotron" style="background-image: url('../images/bgg.jpeg');">
  <form>
    <fieldset class="form-group">
      <div class="input-group">
        <div class="input-group-prepend extras">
          <span class="input-group-text ">
            <img src="images/home.svg" alt="">
          </span>
        </div>
        <input type="text" class="form-control border-left-0 border-right-0" placeholder="Enter a country, city or landmark" aria-label="Recipient's username" aria-describedby="button-addon2" size="60">
        <div class="input-group-append extras">
          <span class="input-group-text ">
            <img src="images/target.svg" alt="">
          </span>
        </div>
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">
            <p>Search</p>
          </button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
<div class="d-flex justify-content-center">
  <div class="row w-100 dashboard-row">
    <div class="col-0 col-md-0 col-lg-4 d-none d-md-none d-md-block pl-0 sidebar-col">
      @include('partials.dashboard-sidebar')
    </div>
    <div class="col-12 col-md-8 col-lg-8 px-0">
      @include('partials.dashboard-main')
    </div>
  </div>
</div>
@endsection
