@extends('layouts.front')

@section('content')
    <div class="container">
      <hr color="#c0c0c0">
      @if (!is_null($headline))
        <div class="row">
          <div class="headline col-md-10 mx-auto">
            <div class="row">
              <div class="col-md-6">
                <div class="title p-2">
                  <h1>{{ '💛名前☞'.str_limit($headline->name, 10) }}</h1>
                </div>
              </div>
              <div class="col-md-6">
                <p class="body mx-auto">{{ '💛趣味☞'.str_limit($headline->hobby, 20) }}</p>
              </div>
              <div class="col-md-6">
                <p class="body mx-auto">{{ '💛性別☞'.str_limit($headline->gender, 6) }}</p>
              </div>
              <div class="col-md-6">
                <p class="body mx-auto">{{ '💛紹介☞'.str_limit($headline->introduction, 300) }}</p>
              </div>
            </div>
          </div>
        </div>
      @endif
      <hr color="#c0c0c0">
        <div class="row">
          <div class="posts col-md-8 mx-auto mt-3">
            @foreach($posts as $post)
              <div class="post">
                <div class="row">
                  <div class="text col-md-6">
                    <div class="date">
                      {{ $post->updated_at->format('Y年m月d日') }}
                    </div>
                    <div class="title">
                      {{ '💛名前☞'.str_limit($post->name, 10) }}
                    </div>
                    <div class="body mt-3">
                      {{ '💛性別☞'.str_limit($post->gender, 6) }}
                    </div>
                    <div class="body mt-3">
                      {{ '💛趣味☞'.str_limit($post->hobby, 20) }}
                    </div>
                    <div class="body mt-3">
                      {{ '💛紹介☞'.str_limit($post->introduction, 300) }}
                    </div>
                  </div>
                </div>
              </div>
              <hr color="#c0c0c0">
            @endforeach
          </div>
        </div>
      </div>
    </div>
@endsection