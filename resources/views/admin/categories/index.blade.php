@extends('layouts.app')

@section('content')
<?php
    $link = Button::primary('Nova Categoria')->asLinkTo(route('categories.create'));
    $headerPanel = '<span class="pull-left"><h4>Listagem de Categorias</h4></span>
                    <span class="pull-right">'.$link.'</span>
                    <div class="clearfix"></div>';
    $bodyPanel = Table::withContents($categories->items())->striped()
                        ->callback('Ações', function ($field, $category) {
                            $linkToEdit = route('categories.edit',['category' => $category->id]);
                            $linkToDestroy = route('categories.destroy',['category' => $category->id]);
                            $deleteForm = "delete-form-{$category->id}";
                            $formDelete = Form::open(['route' => ['categories.destroy','category' => $category->id],'style' => 'display:none','id' => $deleteForm,'method' => 'DELETE']).Form::close();
                            $btnDelete = Button::link('Excluir')->asLinkTo($linkToDestroy)
                                    ->addAttributes([
                                            'onclick' => "event.preventDefault();document.getElementById(\"{$deleteForm}\").submit();"
                                    ]);
                            return "
                                <ul class=\"list-inline\">
                                    <li>".Button::link('Editar')->asLinkTo($linkToEdit)."</li>
                                    <li>|</li>
                                    <li>".$btnDelete."</li>
                                </ul>
                            ".$formDelete;
                        });
    $paginacao = '<div class="text-center">'. $categories->render() .'</div>';
?>
{!! Panel::normal()->withHeader($headerPanel)->withBody($bodyPanel)->withFooter($paginacao) !!}
@endsection
