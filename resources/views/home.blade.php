@extends('layouts.app')

@section('content')

<nav id="menu">
    <div class="row p-4">
        <div class="col-md-1 col-xs-12 text-center">
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="col-md-8 col-xs-12">
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link">Menu Principal</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Facturación</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contabilidad</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Nómina</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Reportes Gerenciales</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Reportes contables</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cuentas por Pagar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cuentas por Cobrar</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Usuarios</a></li>
            </ul>
        </div>

        <div class="col-md-3 col-xs-12">
            <ul class="nav d-flex justify-content-center align-items-center my-auto">
                
                <li><img src="{{ asset('images/face.png') }}" alt="" class="rounded-circle "></li>
                <li class="nav-item dropdown">
                    
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<section id="dashboard">
    
    <!-- <div class="">
        <h4>CRM</h4>
        <div class="row">

        </div>


    </div> -->

    <div class="container-fluid p-5">
        
        <h5 class="pt-5">CRM</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Leads</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Lead Source</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Lead Status</p>
            </div>
        </div>


        <h5 class="pt-5">VENDOR</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Purcharse Order</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Receive inventory</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Enter Bills Against Inventory</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Enter Bills & Vendor Credit</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Paid Bills</p>
            </div>
        </div>

        <h5 class="pt-5">CUSTOMER</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Estimate</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Invoice</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Receive payments</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Returns</p>
            </div>

        </div>

        <h5 class="pt-5">MANUFACTURING</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Work Center</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Production Order</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Approved Production Order</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1"> Completed Production Orders</p>
            </div>

        </div>

        <h5 class="pt-5">INVENTORY</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Adjust Quantity On Hand</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Item & Services</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Site Transfer</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1"> Bin Transfer</p>
            </div>

        </div>

        <h5 class="pt-5">ACCOUNTING</h5>
        <div class="row">

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Deposit</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Credit Card</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Write Check</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Funds Transfer</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Journal Entry</p>
            </div>

            <div class="col-xl-2 col-lg-3 col-md-5 col-sm-5 d-flex align-items-center item m-4">
                <div class="p-4 rounded-circle icono">
                    <img src="{{ asset('images/menu/coolicon.png') }}" alt="" class="">
                </div>
                <p class="my-auto p-1">Chart of Account</p>
            </div>

        </div>

    </div>


</section>
@endsection