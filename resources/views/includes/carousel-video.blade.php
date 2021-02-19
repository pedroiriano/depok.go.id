<style>
header {
  position: relative;
  background-color: black;
  height: 100vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://depok.go.id/img/depok.jpeg') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        {{-- <source src="{{ asset('videos/alun-alun-depok.mp4') }}" type="video/mp4"> --}}
	<source src="{{ asset('storage/uploads/video-covid19-fix.mp4') }}" type="video/mp4">
    </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <img src="{{ asset('img/lambang.png') }}" alt="" class="logo-pemkot">
                <h1 class="display-4" style="z-index: 2; position: relative; color:white; font-size:2.5rem">Selamat Datang di Website
                Resmi Kota Depok
                </h1>
            </div>
        </div>
    </div>
</header>
