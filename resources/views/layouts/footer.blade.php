<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="#" target="_blank">{{ __('Robot Shop') }}</a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license" target="_blank">{{ __('Licenses') }}</a>
                    </li>
                    
                </ul>
                
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', made with ') }}<i class="fa fa-heart heart"></i>{{ __(' by ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.creative-tim.com" target="_blank">{{ __('Robot Shop') }}</a>
                    
                </span>
            </div>
        </div>
    </div>
</footer>