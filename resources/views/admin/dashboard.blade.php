this is the dashboard

<form action="{{ route('logout') }}" method="post">
  @csrf
  <button type="submit">Logout</button>
</form>