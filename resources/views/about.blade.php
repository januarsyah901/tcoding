
@extends('layouts.main')

@section('container')
    <h1 class="mt-4">Halaman About</h1> 
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="dispaly-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, pariatur.</p>
        <div class="clearfix pt-5">
          <img src="img/{{ $image }}" alt="{{ $image }}" width="150"/>
          <p>seorang pahlawan dari negeri borneo. kini dia sedang menuntut ilmu di amanatul ummah, yang bertempt di negeri maojopahit dulu pernah berdiri</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis totam blanditiis, earum laboriosam eum, error itaque</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis totam blanditiis, earum laboriosam eum, error itaqueeritatis totam blanditiis, earum laboriosam eum, error itaque</p>
        </div>
      </div>
    </div>  
@endsection