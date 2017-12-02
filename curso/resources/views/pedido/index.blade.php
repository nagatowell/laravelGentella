@extends('layouts.sidebar')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pedidos</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Quantidade</th>
                          <th>Data</th>
                          <th>Valor</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($pedidos as $pedido)
                        <tr>
                          <td>{{$pedido->nome}}</td>
                          <td>{{$pedido->quantidade}}</td>
                          
                          <td>{{$pedido->data}}</td>
                          <td>{{$pedido->valor}}</td>
                        </tr>
                        @endforeach
                        <tr>
                          <td colspan="3" style="text-align='center'">Total</td>
                          <td colspan="1">{{$valor_total}}</td>
  
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
@endsection