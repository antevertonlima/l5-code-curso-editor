@extends('layouts.app')

@section('content')
<?php
    $headerPanel = "Criação de Categoria";
    $form  = Form::open(['route' => 'categories.store', 'class' => 'form']);
    $form .= view('admin.categories._form');
    $form .= Form::close();
?>
{!! Panel::normal()->withHeader($headerPanel)->withBody($form)->withFooter('') !!}
@endsection
