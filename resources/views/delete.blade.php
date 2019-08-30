 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
     {{ __('delete') }}
 </a>

 <form id="delete-form" action="{{$route}}" method="post">
     <input type="hidden" name="_method" value="DELETE">
     @csrf
 </form>