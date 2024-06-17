<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('admin') }}">Нарушением.Нет</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {{-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="admin.html">Мои заявления</a>
            </li> --}}
        </ul>
        <div class="d-flex" role="search">
            <button class="btn btn-outline-danger" type="button" onclick="logout()">Выход</button>
        </div>
      </div>
    </div>
  </nav>

<form id="logoutForm" method="POST" action="{{ route('logout') }}">@csrf</form>

<script type="text/javascript">

    function logout()
    {
        form = document.getElementById('logoutForm');
        form.submit();
    }

</script>
