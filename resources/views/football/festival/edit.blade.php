@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column page-size p-2">
    <h1>Add a New Article</h1>
    <div clas="mssg"></div>
    <form class="d-flex flex-column create-form p-3" action="/news" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Article Title</label>
        <input class="p-1 m-1" type="text" id="title" name="title">
        <label for="slug">Article slug</label>
        <input class="p-1 m-1" type="text" id="slug" name="slug">

        <label for="summary">Article Summary</label>
        <input class="p-1 m-1" type="text" id="summary" name="summary">
 
        <label for="banner_img">Banner Image</label>
        <input class="p-1 m-1" type="file" id="banner_img" name="banner_img"> 

        <label for="meta_title">Meta Title</label>
        <input class="p-1 m-1" type="text" id="meta_title" name="meta_title">

        <label for="body_one">Body</label>    
       <textarea id="body_one" name="body_one" cols="40" rows="16"></textarea>
        
       <label for="body_img">Body Image</label>
        <input class="p-1 m-1" type="file" id="body_img" name="body_img"> 
 
        <label for="body_two">Body</label>    
       <textarea id="body_two" name="body_two" cols="40" rows="16"></textarea>
        
        <label for="meta_desc">Meta Description</label>
        <input class="p-1 m-1" type="text" id="meta_desc" name="meta_desc">

        <input class="btn btn-info px-3 mx-auto my-2" type="submit" value="Add Article">
    </form>
</div>
@endsection