 <div class="navigation_bar">
            <ul>
                <li><a href="{{route('orders.create')}}"><img src="{{ asset('assets/delegate/img/order.png')}}" alt="" class="icon"> </a> </li>
                <li><a href="{{route('settings.index')}}"><img src="{{ asset('assets/delegate/img/wallet.png')}}" alt="" class="icon"> </a> </li>
                <li><a href="{{route('home.index')}}"><img src="{{ asset('assets/delegate/img/home.png')}}" alt="" class="icon"> </a> </li> 
                <li><a href="{{route('orders.index')}}"><img src="{{ asset('assets/delegate/img/invoice.png')}}" alt="" class="icon"> </a> </li>
                <li >
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <img src="{{ asset('assets/delegate/img/logout.png')}}" alt="" class="icon"> 
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>