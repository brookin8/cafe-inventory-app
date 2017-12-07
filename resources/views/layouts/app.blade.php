<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>North Lime Inventory</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script src="https://use.fontawesome.com/18cd3f1c1b.js"></script>
    <script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
      integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>

<body onload="myFunction()">

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container navigation main">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                        <a href="#" id="menu-toggle" class="sidebartoggle ml-2 mt-3" onclick="openNav()">
                            <i class="mt-4 mr-2 fa fa-bars" id="toggleimage"></i>
                        </a>
                        <a class="navbar-brand ml-2 mt-1" href="{{ url('/home') }}">
                            <div class="row brandrow">
                            <img src="{{ asset('northlime.png') }}" class="logoimage mr-2 mt-1">
                            <div class="mt-3 mr-2" style="
                            font-family: 'Lobster', cursive;
                            font-size:160%;  
                            z-index webkit-text-stroke: 2px #4C4C72;
                            color: #fff;
                            text-shadow:
                               2px 2px 0 #4C4C72,
                             -2px -2px 0 #4C4C72,  
                              2px -2px 0 #4C4C72,
                              -2px 2px 0 #4C4C72,
                               2px 2px 0 #4C4C72;"
                            >North Lime Inventory</div>
                            </div>
                        </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle logout" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="font-size:120%">
                                    {{ Auth::user()->name }} 
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

         <div id="mySidenav" class="sidenav">
                <div class="row closerow"><a href="javascript:void(0)" style="color:#fff" class="closebtn" onclick="closeNav()">&times;</a></div>
            
                <a href="{{ url('/') }}/items" class="itemsrow"><div class="row">Items</div></a>
                <a href="{{ url('/') }}/suppliers"><div class="row">Suppliers</div></a>
            
                <a data-toggle="collapse" href="#collapseorders" aria-expanded="false" aria-controls="#collapseorders"><div class="row">
                    Orders </div>
                </a>
           
                <div class="collapse" id="collapseorders">
                    <a href="{{ url('/') }}/orders"><div class="row ml-2">All Orders</div></a>
                    <a href="{{ url('/') }}/orders/open"><div class="row ml-2">Open Orders</div></a>
                    <a href="{{ url('/') }}/orders/saved"><div class="row ml-2">Saved Orders (Drafts)</div></a>
                    <a href="{{ url('/') }}/orders/supplierselect"><div class="row ml-2">New Order</div></a>
                </div>
            
                <a data-toggle="collapse" href="#collapsecounts" aria-expanded="false" aria-controls="#collapsecounts"><div class="row">    
                    Inventory Counts </div>
                </a>
            
                <div class="collapse" id="collapsecounts">
                    <a href="{{ url('/') }}/inventorycounts"><div class="row ml-2">All Counts</div></a>
                    <a href="{{ url('/') }}/inventorycounts/saved"><div class="row ml-2">Saved Counts</div></a>
                    <a href="{{ url('/') }}/inventorycounts/create"><div class="row ml-2">New Count</div></a>
                </div>
               <a data-toggle="collapse" href="#collapseinvoices" aria-expanded="false" aria-controls="#collapseinvoices"><div class="row">
                    Invoices </div>
               </a>
            
                <div class="collapse" id="collapseinvoices">
                    <a href="{{ url('/') }}/invoices"><div class="row ml-2">All Invoices</div></a>
                    <a href="{{ url('/') }}/invoices/orderexists"><div class="row ml-2">New Invoice</div></a>
                </div>
                
                <a data-toggle="collapse" href="#collapsereporting" aria-expanded="false" aria-controls="#collapsereporting"><div class="row">
                    Reporting </div>
               </a>
            
                <div class="collapse" id="collapsereporting">
                    <a href="{{ url('/') }}/reporting"><div class="row ml-2">Summary</div></a>
                    <a href="{{ url('/') }}/reporting/details"><div class="row ml-2">Details</div></a>
                </div>
            @if(isset(Auth::user()->access_id))
                @if(Auth::user()->access_id === 1)
                 
                <a href="{{ url('/') }}/users"><div class="row">Users</div></a>
                
                @endif
            @endif
        </div>

        @yield('content')


    </div>

    <script>
        
        $(document).ready(function() {
            $( "#toggleimage" ).click( function() {
                $(".fa.fa-bars").toggleClass('flip');
            });
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "185px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $(".fa.fa-bars").toggleClass('flip');

        }

        document.onreadystatechange = function () {
          var state = document.readyState
          if (state == 'complete') {
              setTimeout(function(){
                 document.getElementById("loaderDiv").style.display = "block";
                 document.getElementById('loader').style.display="none";
              },500);
          }
        }
    </script>
    
</body>
</html>
