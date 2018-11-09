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
      <div class="card profile-card">
        <div class="card-header">
          Your Profile
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div class="d-flex">
              <img src="images/profile-image.svg" alt="">
              <div class=" px-3">
                <p>Jeremiah Ehiz</p>
                <small><i>@jeremiahriz</i> </small>
              </div>
            </div>
            <div class="">
              <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
            </div>
          </div>
          <div class="mt-4 d-flex justify-content-center">
            <button type="button" class="btn btn-blue mx-2">Stores</button>
            <button type="button" class="btn btn-blue mx-2">Apartments</button>
          </div>
        </div>
      </div>
      <div class="card popular-card">
        <div class="card-header">
          Popular Groups
        </div>
        <div class="card-body pb -0 py-0 mb-0" style="height:400px;">
          <ul class="list-group list-group-flush borde-bottom">
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
            <li class="list-group-item d-flex pb-0">
              <img src="images/profile-image.svg" alt="" style="width:60px; height:60px;">
              <div class="pl-3 pt-2">
                <p style="line-height:16px">#Leo</p>
                <small><i>100 people are attending</i> </small>
              </div>
            </li>
          </ul>
          <div class="card-header">
            Friends
          </div>
          <div class="card-body px-0">
            <div class="d-flex justify-content-around">
              <div class="">
                <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%; width:40PX; height:40px;" >
                <p class="text-center" style="font-size:10px; line-height:12px;">susan</p>
              </div>
              <div class="">
                <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%; width:40PX; height:40px;" >
                <p class="text-center" style="font-size:10px; line-height:12px;">susan</p>
              </div>
              <div class="">
                <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%; width:40PX; height:40px;" >
                <p class="text-center" style="font-size:10px; line-height:12px;">susan</p>
              </div>
              <div class="">
                <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%; width:40PX; height:40px;" >
                <p class="text-center" style="font-size:10px; line-height:12px;">susan</p>
              </div>
              <div class="">
                <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%; width:40PX; height:40px;" >
                <p class="text-center" style="font-size:10px; line-height:12px;">more</p>
              </div>
            </div>
          </div>
          <div class="card-header">
            Suggested friends for you
          </div>
          <div class="card-body p-0">
            <ul class="list-group list-group-flush border-bottom">
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between">
                  <div class="d-flex mr-auto">
                    <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
                    <div class="pt-3 pl-3">
                      <p style="font-size:14px;line-height:14px">Jeremiah</p>
                      <small><i>@jeremiahriz</i> </small>
                    </div>
                  </div>
                  <div class="pl-4 pt-3">
                    <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between">
                  <div class="d-flex mr-auto">
                    <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
                    <div class="pt-3 pl-3">
                      <p style="font-size:14px;line-height:14px">Jeremiah</p>
                      <small><i>@jeremiahriz</i> </small>
                    </div>
                  </div>
                  <div class="pl-4 pt-3">
                    <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between">
                  <div class="d-flex mr-auto">
                    <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
                    <div class="pt-3 pl-3">
                      <p style="font-size:14px;line-height:14px">Jeremiah</p>
                      <small><i>@jeremiahriz</i> </small>
                    </div>
                  </div>
                  <div class="pl-4 pt-3">
                    <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between">
                  <div class="d-flex mr-auto">
                    <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
                    <div class="pt-3 pl-3">
                      <p style="font-size:14px;line-height:14px">Jeremiah</p>
                      <small><i>@jeremiahriz</i> </small>
                    </div>
                  </div>
                  <div class="pl-4 pt-3">
                    <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between">
                  <div class="d-flex mr-auto">
                    <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
                    <div class="pt-3 pl-3">
                      <p style="font-size:14px;line-height:14px">Jeremiah</p>
                      <small><i>@jeremiahriz</i> </small>
                    </div>
                  </div>
                  <div class="pl-4 pt-3">
                    <button type="button" class="btn bg-transparent edit-btn" name="button">Edit</button>
                  </div>
                </div>
              </li>
              <li class="list-group-item d-flex pb-0">
                <div class="d-flex justify-content-between py-3">
                  <a href="#">Find more people you know...</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-8 col-lg-8 px-0">
      <div class="card-group">
        <div class="card category-card">
          <div class="d-flex justify-content-center ">
            <div class="row w-100">
              <div class="col-6 col-md-6 col-lg-3 category-col border">
                <div class="">
                  <img src="images/text.svg" alt="">
                  <p>Text</p>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-3 category-col border">
                <div class="">
                  <img src="images/pictures.svg" alt="">
                  <p>Picture</p>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-3 category-col border">
                <div class="">
                  <img src="images/camera.svg" alt="">
                  <p>Video</p>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-3 category-col border">
                <div class="">
                  <img src="images/calendar.svg" alt="">
                  <p>Event</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card post-card mb-3">
        <div class="card-header">
          <div class="d-flex mr-auto">
            <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
            <div class="pt-3 pl-3">
              <p style="font-size:14px;line-height:14px">Jeremiah Ehiz</p>
              <small>2 days ago</small>
            </div>
          </div>
          <div class=" d-fle">
            <button type="button" class="btn bg-transparent" style="color:#00AEFF">Follow</button>
            <div class="btn-group">
              <button type="button" class="btn bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v text-dark"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <figure class="fiure">
            <div class="d-flex justify-content-center">
              <img src="images/fig.png" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure." style="height:413px;">
            </div>
          </figure>
          <figcaption class="figure-caption px-4">I know there are supposed to be rules and stuff about using parchment paper when baking, but I just use it 100% of the time because
            I’m too cheap to buy non-stick baking sheets and too lazy to scrub burnt-on shmutz.</figcaption>
          <p class="pl-3 mt-5" style="font-size:16px; color:#C4C4C4"><span class="px-2">#world</span><span class="px-2">#world</span> <span class="px-2">#world</span> <span class="px-2">#world</span></p>
        </div>
        <div class="card-footer d-flex">
          <ul class="nav list-unstyled mr-auto">
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">101 likes</li>
            <li class="mx-2">.</li>
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">98 comments</li>
          </ul>
          <ul class="nav list-unstyled">
            <li class="mx-3" style="font-size:16px;"><i class="far fa-thumbs-up fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-comment-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="fas fa-share-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-bookmark fw"></i> </li>
          </ul>
        </div>
      </div>
      <div class="card post-card mb-3">
        <div class="card-header">
          <div class="d-flex mr-auto">
            <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
            <div class="pt-3 pl-3">
              <p style="font-size:14px;line-height:14px">Jeremiah Ehiz</p>
              <small>2 days ago</small>
            </div>
          </div>
          <div class=" d-fle">
            <button type="button" class="btn bg-transparent" style="color:#00AEFF">Follow</button>
            <div class="btn-group">
              <button type="button" class="btn bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v text-dark"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <figure class="fiure">
            <div class="d-flex justify-content-center">
              <img src="images/fig.png" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure." style="height:413px;">
            </div>
          </figure>
          <figcaption class="figure-caption px-4">I know there are supposed to be rules and stuff about using parchment paper when baking, but I just use it 100% of the time because
            I’m too cheap to buy non-stick baking sheets and too lazy to scrub burnt-on shmutz.</figcaption>
          <p class="pl-3 mt-5" style="font-size:16px; color:#C4C4C4"><span class="px-2">#world</span><span class="px-2">#world</span> <span class="px-2">#world</span> <span class="px-2">#world</span></p>
        </div>
        <div class="card-footer d-flex">
          <ul class="nav list-unstyled mr-auto">
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">101 likes</li>
            <li class="mx-2">.</li>
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">98 comments</li>
          </ul>
          <ul class="nav list-unstyled">
            <li class="mx-3" style="font-size:16px;"><i class="far fa-thumbs-up fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-comment-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="fas fa-share-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-bookmark fw"></i> </li>
          </ul>
        </div>
      </div>
      <div class="card post-card mb-3">
        <div class="card-header">
          <div class="d-flex mr-auto">
            <img src="images/profile-image.svg" alt="" class="img-rounded" style="border-radius:100%;">
            <div class="pt-3 pl-3">
              <p style="font-size:14px;line-height:14px">Jeremiah Ehiz</p>
              <small>2 days ago</small>
            </div>
          </div>
          <div class=" d-fle">
            <button type="button" class="btn bg-transparent" style="color:#00AEFF">Follow</button>
            <div class="btn-group">
              <button type="button" class="btn bg-transparent" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v text-dark"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">Action</button>
                <button class="dropdown-item" type="button">Another action</button>
                <button class="dropdown-item" type="button">Something else here</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body py-0">
          <figure class="fiure">
            <div class="d-flex justify-content-center">
              <img src="images/fig.png" class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure." style="height:413px;">
            </div>
          </figure>
          <figcaption class="figure-caption px-4">I know there are supposed to be rules and stuff about using parchment paper when baking, but I just use it 100% of the time because
            I’m too cheap to buy non-stick baking sheets and too lazy to scrub burnt-on shmutz.</figcaption>
          <p class="pl-3 mt-5" style="font-size:16px; color:#C4C4C4"><span class="px-2">#world</span><span class="px-2">#world</span> <span class="px-2">#world</span> <span class="px-2">#world</span></p>
        </div>
        <div class="card-footer d-flex">
          <ul class="nav list-unstyled mr-auto">
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">101 likes</li>
            <li class="mx-2">.</li>
            <li class="mx-2" style="font-size:14px; color:#C4C4C4">98 comments</li>
          </ul>
          <ul class="nav list-unstyled">
            <li class="mx-3" style="font-size:16px;"><i class="far fa-thumbs-up fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-comment-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="fas fa-share-alt fw"></i> </li>
            <li class="mx-3" style="font-size:16px;"><i class="far fa-bookmark fw"></i> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
