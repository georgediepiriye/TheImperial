<ul>
                        
    <li class="side-menu"><a href="#">
    <i class="fa fa-shopping-bag"></i>
         @if (Cart::instance('cart')->count()>0)
            <span class="badge">{{ Cart::instance('cart')->count() }}</span>
             
         @endif
        
</a></li>
</ul>