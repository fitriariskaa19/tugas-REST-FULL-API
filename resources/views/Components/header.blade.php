<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Search-->
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>

            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search"/>
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
        </div>
        <div class="avatar-dropdown" id="icon">
            <span>{{auth()->user()->name}}</span>
            <img src="images/Icon_header.png">
        </div>
        <!-- Account dropdawn-->
        <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
            for="icon">
                <form action="/logout" method="post">
                @csrf
                    <li class="mdl-menu__item mdl-list__item">
                        <button class="btn text-light">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon text-color--secondary">exit_to_app</i>
                                Log out
                            </span>
                        </button>
                    </li>
                </form>
        </ul>
    </div>
</header>