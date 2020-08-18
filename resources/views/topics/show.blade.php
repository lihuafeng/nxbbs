@extends('layouts.app')

@section('title', $topic->title)
@section('description', $topic->excerpt)

@section('content')

<div class="row page_detail">

  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 topic-content">
    <div class="card ">
      <div class="card-body">
        <h1 class="post_title">
          {{ $topic->title }}
        </h1>


        <div class="post_info">

          <span class="popover__box popover_appreciate popover__box_hide">
            <span class="popover_target">
              <a href="{{ route('users.show', $topic->user->id) }}" class="post_owner post_info_meta">
                {{ $topic->user->name }}
              </a>
            </span>
          </span>
          <em id="create_time" class="post_time post_info_meta"> {{ $topic->created_at->diffForHumans() }}</em>
          <span class="post_discuss_num post_info_meta">
            <span> {{ $topic->reply_count }}</span>
            <span class="post_info_meta_inner_text">
              浏览
            </span>
          </span>
          <span class="post_info_meta_inner_text">
            {{ $topic->category->name }}
          </span>

        </div>


        <div class="topic-body mt-4 mb-4">
          {!! $topic->body !!}
        </div>

        <div class="operate">
          <hr>
          <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
            <i class="far fa-edit"></i> 编辑
          </a>
          <a href="#" class="btn btn-outline-secondary btn-sm" role="button">
            <i class="far fa-trash-alt"></i> 删除
          </a>
        </div>

      </div>
    </div>
  </div>


  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
    <div class="card ">
      <div class="card-body">

      </div>
    </div>
  </div>


</div>
@stop
