@extends('layouts.app')

@section('content')
<?php
    $headerPanel = "<h4>Edição de  $category->name</h4>";
    $form  = Form::model($category, ['route' => ['categories.update','category' => $category->id], 'class' => 'form','method' => 'PUT']);
    $form .= view('admin.categories._form');
    $form .= Form::close();
?>
{!! Panel::normal()->withHeader($headerPanel)->withBody($form)->withFooter('') !!}
@endsection
