<div class="header shadow-sm px-3 d-flex justify-content-between">
  <div class="header-left">
    <a href="{{ url('/') }}" class="text-decoration-none h5 header-link">Count ToDo</a>
  </div>
  <div class="header-right">
    <div class="header-right__menu  d-inline-flex">
        @guest
          <div><a class="header-link text-decoration-none mr-3" href="{{ route('login') }}">ログイン</a></div>
          <div><a class="header-link text-decoration-none " href="{{ route('register') }}">新規登録</a></div>
        @else
        <!-- タスク追加 modal -->
          <button type="button" class="btn" data-toggle="modal" data-target="#addModal">
          <i class="fas fa-plus h4 mr-2 mt-1 header-link"></i>
          </button>

          <div class="dropdown">
            <a class="btn dropdown-toggle p-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars h4 header-link mb-2"></i>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{ action( 'UsersController@show', $user ) }}">Task集計</a>
              <a class="dropdown-item" href="{{ action( 'UsersController@edit', $user ) }}">ユーザー設定</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('ログアウト') }}
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </div>

        @endguest
      </ul>
    </div>
  </div>
</div>
