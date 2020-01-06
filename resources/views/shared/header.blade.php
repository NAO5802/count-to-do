<div class="header">
  <div class="header-left">
    <a href="{{ url('/') }}">Count ToDo</a>
  </div>
  <div class="header-right">
    <div class="header-right__menu">
      <ul>
        @guest
          <li><a href="{{ route('login') }}">ログイン</a></li>
          <li><a href="{{ route('register') }}">新規登録</a></li>
        @else
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('ログアウト') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
          <li><a href="{{ action( 'UsersController@edit', $user ) }}">ユーザー設定</a></li>
          <li><a href="#">追加</a></li>
        @endguest
      </ul>
    </div>
  </div>
</div>
