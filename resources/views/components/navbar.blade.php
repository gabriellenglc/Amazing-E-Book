<div style="background-color: #ADD8E6; height: 150px;">
    <div style="display: flex; justify-content: center; align-items: center;">
        <a href="/" style="text-decoration: none; color: black; font-family: 'Courier New', Courier, monospace;" href="/">
            <h1 style="align-text: center; padding-top: 40px; font-weight: 900;">
                {{__("page.title")}}
            </h1>
        </a>
    </div>
    @auth
        <div style="display: flex; justify-content: center; align-items: center; padding-bottom: 10px;">
            <a href="/logout">
                <button type="button" class="btn btn-warning" style="margin-right: 12px; font-weight:bold;">
                    {{__("page.logout")}}
                </button>
            </a>
        </div>
        @if (Auth::user()->role_id == 1)
            <div class="bg-warning" style="display: flex; justify-content: space-around; align-items: center; align-content: space-between; padding: 20px;">
                <a style="text-decoration:none;" href="/home">{{__("page.home")}}</a>
                <a style="text-decoration:none;" href="/cart">{{__("page.cart")}}</a>
                <a style="text-decoration:none;" href="/profile">{{__("page.profile")}}</a>
            </div>
        @endif
        @if (Auth::user()->role_id == 2)
            <div class="bg-warning" style="display: flex; justify-content: space-around; align-items: center; align-content: space-between; padding: 20px;">
                <a style="text-decoration:none;" href="/home">{{__("page.home")}}</a>
                <a style="text-decoration:none;" href="/cart">{{__("page.cart")}}</a>
                <a style="text-decoration:none;" href="/profile">{{__("page.profile")}}</a>
                <a style="text-decoration:none;" href="/maintenance">{{__("page.account")}}</a>
            </div>
        @endif
    @else
        <div style="display: flex; justify-content: center; align-items: center; padding-bottom: 80px;">
            <a href="/signup">
                <button type="button" class="btn btn-warning" style="margin-right: 12px; font-weight:bold;">
                    {{__("page.signup")}}
                </button>
            </a>
            <a href="/login">
                <button type="button" class="btn btn-warning" style="font-weight: bold;">
                    {{__("page.login")}}
                </button>
            </a>
        </div>    
    @endauth
</div>