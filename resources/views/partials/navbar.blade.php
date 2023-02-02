<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{route('shop')}}">
            <img width="50px" height="50px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAP0AAADHCAMAAADlCqUFAAAAclBMVEUAAAD///99fX3a2toRERHs7OwMDAxZWVl2dnZ6enozMzNOTk76+vqxsbHx8fEGBga6uroaGhptbW2RkZHMzMzm5uZBQUHAwMApKSlRUVHU1NRmZmajo6OWlpbGxsY8PDweHh6GhoYvLy+fn5+rq6skJCThXiTeAAAEs0lEQVR4nO2d13qjMBBGg4kLDsYNl5B1S3n/V9xkFxY0I0ocIVaj/1wa2d8cA0JtxMMDAAAAAAAAAAAAQCcu0YwQLcujG3ZwOlyoPbANGI/l0YQdTIcLtQea7cfs4Hm4UHsA9rDvai/rvn8dLXad7ZPVdj9cqD1xWXSyPz8PF2KvfGSt9uOn4cLrnXOL/W49XGwWaLF/GS4yC0xa7GW1cCmwhz3sy09hD3sB9sdRRBiVrfbu9nv+M0ebGnfyHDBG/w52tx/xn3GhA/DUm70LXQDY+2vv932/3Jyy2Lh9nL1tlg9ucN0qQ/Q/tk+2V4vRG+Bg0P5gM3AzLIzZL2yGbYqxIfuxzaCNERqyD20GbQzYwx72BbCHPezLkrCHfbUL7599XJnE9M4+rXbgfbPfKt/2y353Ub/tlT3rw0fe2CfBhn375I396sq+XBkZkm7P2FcX9/lmr67s9Mv+mgb+2r+QqZAgsxOuYe6zXxD34ODKFI7KPfYXupY5iKzFa5Y77G/UPXy1F69Zvm2/PFP5d5vxmqXRPp6x8lOanJS4vIapyV5zRb/TE3+e2IzWNA32b6zwPKTyN5uxmqfWPuFLUNhKjfDCyrhFnb3mAX6g8g5Xdzl6+3jECsqq7nJ09uvxnJX7RU98KiE9RWfPL3px1V2Ozp4xon2anZBUvC72K3rinVyjo6PdfkpTUBM5OVmt9m/0xGdXqwH2Sos9r+62umKu0mw/o9WdsBzURnu51V1Og/0Tre5iOdVdTr39KWD8GiTEHqmzP2Zc/rOVw5vATlNjv6HVXXHxN7QIHURvz0asS85Nk1uuobPfsxHrKmMBPdsCjb2mulORU/kxezpBFwSnG/0kdCHhsgvU/oUO4Xxd6GzyRkrlR+z5BN3fYmwk29GJO4JiP6+foGOPQBEt/qo922mqen9PWH3Ax/udo7S/sRFrUrezPyf7GCZmc7D+e3lps+c6awfErs5cF9Taa7ePY5Xiyna8Zqmzr3mkCRvu0NuHtX25Nev7nWyGaxitfeMEHWsIZ+72ezT2bRN0ezbmwxc5OAK3T1vXIyzFjPfdN0EnpfIj9nSCrq41f6T/mutrNb+g1V1aac2R/+UkzZ5O0E0TZX0+ebSpA97O22dkPcLXDJ6Sm0EKTA6C7Emf5vinUa9mptBHWxSLsVd7LPmCBZqTRR5tNzH2Ssu+uKhZRtpYqfwk5mRVFixocjGrU9gS7ZdlZabLw62s1pJojxxs2MO+LAl72MO+APawh72LwB72sC+APexhX5aEPexhXwB72MPeRWAPe9gXwB72sC9Lwh72sC+APexh7yKwhz3sC7yx/4gN2Scu5mVWFqj/8O2A7p18Zb/En74Z0rG9FjdqYuHP34ma8Zcr/J/MVywZy8j7cMOVCzvy+P02YL/fBA172Ptp/zhnlPkm3e3X/GfcTUfP6W4vEdjDHvblp7D3wb4lFzMQt7GsQtpiv7sOFlrvKFtqaO1d3WOknYu6lZbePgjOLnRkv8fraEF3UauzD4JktRXyAoUczWaq9fafpMOF2gNs+8AWe+0mdM4Ce3/tm+97utGutPt+H80IUWWfrQ07KLvFCwAAAAAAAAAAAIP8BknYQa+zjZmeAAAAAElFTkSuQmCC" alt="">&nbsp;&nbsp;Kyrieshop
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color:aliceblue" href="{{ route('shop') }}">TIENDA</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"
                    >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>
                <li>
                    <h5 class="nav-link" style="color:aliceblue">
                        @auth
                            {{Auth::user()->name}}
                        @endauth
                    </h5>
                    <a class="nav-link" style="color:aliceblue" href="{{ route('logout') }}"><button type="button">Log out</button></a>
                </li>

            </ul>
        </div>
    </div>
</nav>
