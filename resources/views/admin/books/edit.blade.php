@extends('layouts.app')

@section('content')
<?php
    $headerPanel = "<h4>Edição de $book->title</h4>";
    $form  = Form::model($book, ['route' => ['books.update', 'book' => $book->id],'class' => 'form','method' => 'PUT']);
    $form .= view('admin.books._form');
    $form .= Form::close();
?>
{!! Panel::normal()->withHeader($headerPanel)->withBody($form)->withFooter('') !!}
@endsection
