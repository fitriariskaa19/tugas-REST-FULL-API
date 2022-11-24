<div class="mdl-layout__drawer">
        <header>darkboard</header>
        <div class="scroll__wrapper" id="scroll__wrapper">
            <div class="scroller" id="scroller">
                <div class="scroll__container" id="scroll__container">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link {{($title == 'Dashboard' ? 'mdl-navigation__link--current' : '')}} " href="/dashboard">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Dashboard
                        </a>
                        <a class="mdl-navigation__link {{($title == 'Karyawan' ? 'mdl-navigation__link--current' : '')}}" href="/karyawan">
                            <i class="material-icons" role="presentation">dashboard</i>
                            Karyawan
                        </a>
                        
                        <div class="mdl-layout-spacer"></div>
                        <hr>
                        <a class="mdl-navigation__link" href="https://github.com/CreativeIT/getmdl-dashboard">
                            <i class="material-icons" role="presentation">link</i>
                            GitHub
                        </a>
                    </nav>
                </div>
            </div>
            <div class='scroller__bar' id="scroller__bar"></div>
        </div>
    </div>