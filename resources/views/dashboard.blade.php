<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    {{ __('Dashboard') }}
    <br />
    {{ __("You're logged in!") }}

    <br />

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <input type="submit" name="logout" value="{{ __('Log Out') }}">
    </form>

    Rootcore88#
    Hossain88#
</div>
