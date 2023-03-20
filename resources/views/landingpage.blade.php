
@extends('layout/mainlp')

@section('content')
    
<div id="home">
    <div id="left-panel">
              <div id="big-text" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><img src="https://static.lenovo.com/in/images/Homepage-Banners/lenovo-legion-5-Pro-logo.png" alt=""></div>
              <div id="medium-text" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><p>The best and the most optimal way to maximize your gaming performance</p></div>
              <div id="small-text" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000"><p>Welcoming Our Neweset Darkhorse to help you gain a whole new and better gaming experience</p></div>
              <div id="button">
               <a href="/checkout/34"><button type="button" class="btn btn-outline-light" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">Buy Now!</button></a>
              </div>
    </div>
    <div id="right-panel">
         <div id="img-panel" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
              <img src="{{asset('componentlp/img/legion.png')}}" alt="">
         </div>
    </div>
</div>

<div id="features">
     <h1>WHY YOU SHOULD BUY LEGION 5 PRO</h1>
     <div id="features-flex">
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur1.webp')}}" alt="">
               <h2>Ultra Gaming Performance With Long Last Battery</h2>
               <p>Supported by AMD 5000-7000H series, you can enjoy the smoothes gaming performance possible.</p>
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur2.webp')}}" alt="">
               <h2>Powerful GPU For Gamers</h2>
               <p>Coming with a powerful gaming gpu RTX 3080 to give you the infamous Ray Tracing feature in order to give the mose realistic gaming graphics</p>  
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur3.webp')}}" alt="">
               <h2>Find Your Favorite Games</h2>
               <p>Find and play more than 100 games provided by free 3 months xbox game pass with EA Play included</p>
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur4.webp')}}" alt="">
               <h2>Expand Your Winning Zone</h2>
               <p>Enjoy your games in Full HD to a whole new level with 16" QHD gaming screen, supported with nvidia G-sync and AMD freesync</p>
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur5.webp')}}" alt="">
               <h2>Smart, Cool, And Fast</h2>
               <p>Building on a generational heritage of maximum clock speeds for hours of unrestricted gaming, the Legion 5 Pro Legion Coldfront 3.0 takes first-class thermal performance even further. It deploys an intelligent intake system, turbocharged dual fan design, thermal intake vents under the keyboard switches, and a quad channel exhaust system.</p>
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur6.webp')}}" alt="">
               <h2>Introducing Lenovo Legion Artificial Intelegent Engine</h2>
               <p>Take a revolutionary leap forward in your game with the Lenovo Legion AI Engine, the AI ​​solution system that delivers the highest framerates in today's top AAA games.</p>
          </div>    
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur7.webp')}}" alt="">
               <h2>Defeat Your Enemy with Precission And Force</h2>
               <p>The Legion TrueStrike Keyboard features an innovative soft-landing switch that delivers deeper hits with equal force with every strike. This allows you to attack enemies with extreme precision, hair trigger speed and satisfying button presses. The superior layout is also illuminated via optional 4-zone RGB backlighting (select models only).</p>
          </div>
          <div id="features-list">
               <img src="{{asset('componentlp/img/fitur8.webp')}}" alt="">
               <h2>Nahimic 3D Audio For Gamers</h2>
               <p>Nahimic drastically improves your gaming experience with immersive 3D audio and exciting features for gamers. Build a competitive advantage with voice trackers. Experience crystal clear communication with teammates. Nahimic is a new way to play and Legion Gamers can exclusively enjoy BT Link, an innovative audio solution that turns any Bluetooth speaker into a surround sound system.

               </p>
          </div>
     </div>
    </div>
</div>

<div id="about">
    <div id="about-text" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
         <p id="spek">Up to AMD Ryzen 7 5800H Processor</p>
         <p id="spek">Windows 10 Operating System</p>
         <p id="spek">NVIDIA Geforce RTX 3070 Laptop GPU 8GB GDDR6, Listed  boost clock 1560MHz, achived boost clock 1620MHz, maximum graphic power 140w Graphic Card</p>
         <p id="spek">116" QHD (2560 x 1600) IPS, 16:10, 500 nits, waktu respons 165Hz / 3ms, 100% sRGB, VESA certificated DisplayHDR™, Dolby Vision-enabled™, NVIDIA</p>
         <p id="spek">Up to 16GB memory</p>
         <p id="spek">Up to 8 Hours pro fast charging battery</p>
         <p id="spek">2TB M.2 NVMe PCle SSD storage space</p>
         <p id="spek">2 x 2W Harman®Speakers with Nahimic Audio</p>
    </div>
</div> 

{{-- <div class="container mt-5 mb-5">
     <div class="d-flex justify-content-center row">
         <div class="col-md-10">
             @foreach ($data as $item)
             <div class="row p-2 bg-white border rounded mb-4">
               <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" style="width:200px; height:120px;" src="{{$item->image}}"></div>
               <div class="col-md-6 mt-1">
                   <h5>{{$item->codename}}</h5>
                    <p class="text-justify text-truncate para mb-0">{{$item->type}}<br><br></p>
               </div>
               <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                   <div class="d-flex flex-row align-items-center">
                       <h4 class="mr-1">Rp.{{$item->price}}</h4>
                   </div>
                   <h6 class="text-success">Free shipping</h6>
                   <div class="d-flex flex-column mt-4"><a href="/checkout/{{$item->id}}" class="btn btn-success btn-sm">Buy Now!</a></div>
               </div>
           </div>
             @endforeach
         </div>
     </div>
 </div> --}}
 <section style="background-color: #eee;">
     <div class="container py-5">
       <div class="row">
         @foreach ($data as $item)
         <div class="col-md-12 col-lg-4 mb-4 mb-lg-0" style="margin-top: 10px;">
          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <p class="lead mb-0">{{$item->item->name}}</p>
              <div
                class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                style="width: 35px; height: 35px;">
                <a href="/checkout/{{$item->id}}" class="text-white mb-0 small"><i class="fa-solid fa-cart-shopping"></i></a>
              </div>
            </div>
            <img style="width: 100%; height:250px; object-fit:contain;" src="{{$item->image}}"
              class="card-img-top" alt="Laptop" />
            <div class="card-body">
  
              <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">{{$item->codename}}</h5>
                <h5 class="text-dark mb-0">Rp.{{$item->price}}</h5>
              </div>
  
              <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: {{$item->stock}}</p>
              </div>
            </div>
          </div>
        </div>
         @endforeach
       </div>
     </div>
   </section>




 


@endsection
