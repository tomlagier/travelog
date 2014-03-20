<!DOCTYPE html>
 <html>
        <head>
        @include('core.head')
        </head>
         <body>
            <div id="wrap">
                <div id="header">
                @include('core.header')
                </div>
                
                <div id="content">
                @yield('page-content')
                </div>
                
                <div id="overlays">
                @include('core.overlays')
                </div>

                <div id="footer">
                @include('core.footer')
                </div>
            </div><!--/#wrap-->
         </body>
 </html> 