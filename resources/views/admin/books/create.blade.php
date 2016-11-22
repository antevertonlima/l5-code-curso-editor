@extends('layouts.app')

@section('content')
<?php
    $headerPanel = "Criação de Livro";
    $form  = Form::open(['route' => 'books.store', 'class' => 'form']);
    $form .= view('admin.books._form');
    $form .= Form::close();
?>
{!! Panel::normal()->withHeader($headerPanel)->withBody($form)->withFooter('') !!}
@endsection
