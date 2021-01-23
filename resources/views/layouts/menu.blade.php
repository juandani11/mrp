@extends('layouts.app')

@section('title', 'MRP')

@section('body-class', 'landing-page')

@section('estilo')
  <style>
    .navbar.navbar-transparent {        
      background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);
    }
    #main {
      padding-top: 8%;
      display:    flex;
      flex-flow:  row;
    }
    #main > #container {
      margin: 4px;
      padding: 5px;
      border: 1px solid #cccc33;
      border-radius: 7pt;
      background: #f9f9f9;
      -webkit-flex: 3 1 60%;
              flex: 3 1 60%;
      -webkit-order: 2;
              order: 2;
    }   
    #main > nav {
      margin: 4px;
      padding: 5px;
      border: 1px solid #8888bb;
      border-radius: 7pt;
      background: #e5e5e5;
      -webkit-flex: 1 6 20%;
              flex: 1 6 20%;
      -webkit-order: 1;
              order: 1;
    }   
    #main > aside {
      margin: 4px;
      padding: 5px;
      border: 1px solid #8888bb;
      border-radius: 7pt;
      background: #e5e5e5;
      -webkit-flex: 1 6 20%;
              flex: 1 6 20%;
      -webkit-order: 3;
              order: 3;
    }
    .nav-pills {
        padding-left: 30px;
        color: #000;
    }
    /* Al reducir la pantalla, que los item estén en Columna */
    @media all and (max-width: 640px) {        
      #main {
        -webkit-flex-flow: column;
              flex-flow: column;

        margin-top: 16%;
      }

      #main > #container, #main > nav, #main > aside {
        /* Todos los item se ponen en cero 0 */
        -webkit-order: 0;
              order: 0;
      }    
      #container {
        display: initial;
      }
    
    }

    /* VISTA SHOW estilo perteneciente al contenido central que se repiten en casi todas las vistas show */
    .card-body {
      display: flex;
      flex-direction: column !important;
      padding: .7375rem 1.075rem !important;
      border: 0.2px solid #ca9999;
    }
    .detalle {
      margin: 4px;
      padding: 0px;
      border: 1px solid #cccc33;
      border-radius: 7pt;
      background: #f9f9f9;
      display: inline-flex;
      align-items: baseline;
      justify-content: space-between;      
    }
    .item {
      margin:           0px;
      padding-top:      0px;
      padding-bottom:   0px; 
      padding-right:    4px;
      padding-left:     4px;
      text-align: left;
    }
    /* VISTA EDIT & CREATE estilos que pertencen */
    .tarjeta {
      display:flex;
    }
    .card-crud {
      padding-top: 5px;
      padding-left: 8px;
      padding-right: 8px;
      padding-bottom: 5px;
      width: 50%;
    }

  </style>
@endsection


@section('content')
    <div id='main'>
      <div id='container'>
       @yield('contenido-central')
     </div>

      <nav id="navbar">
        <header class="">Sistema MRP</header>
        <ul class="nav flex-column">
          <li>
            <a class="nav-link" href="{{ route('ges_adm') }}">Sprint 1</a>
            <ul class="nav flex-column">
                <li><a class="nav-pills" href="#">Departamento </a></li>
                <li><a class="nav-pills" href="#">Área </a></li>
                <li><a class="nav-pills" href="{{ route('sucursals.index') }}">Sucursal </a></li>
                <li><a class="nav-pills" href="{{ route('almacens.index') }}">Almacén </a></li>
                <li><a class="nav-pills" href="#">Cargo </a></li>
                <li><a class="nav-pills" href="#">Empleado </a></li>
            </ul>
          </li> 
            <li>
                <a class="nav-link" href="#">Nómina</a>
                <ul class="nav flex-column">
                <li><a class="nav-pills" href="#">Nómina </a></li>
                </ul>
            </li>
            <li>
              <a class="nav-link" href="{{ route('inventario') }}">Inventarios</a>
                <ul class="nav flex-column">
                    <li><a class="nav-pills" href="#">Proveedor </a></li>
                    <li><a class="nav-pills" href="#">Materia Prima </a></li>
                    <li><a class="nav-pills" href="#">Articulo </a></li>
                   
                    <li><a class="nav-pills" href="#"> Mov Inventario </a></li>
                </ul>
            </li>
            <li>
              <a class="nav-link" href="#Compras">Compras</a>
            </li> 
            <li>
              <a class="nav-link" href="#Producción">Producción</a>
              <ul class="nav flex-column">
                <li><a class="nav-pills" href="#">BoM </a></li>
                <li><a class="nav-pills" href="#">MPS </a></li>
                <li><a class="nav-pills" href="#">MRP </a></li>
                </ul>
            </li> 
        </ul>
      </nav>

      <aside id="aside">aside</aside>
   </div>

  
@endsection