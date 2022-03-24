
    @if (Session::has('message'))

            <div class="alert alert-danger mt-2">{{ Session::get('message') }}
            </div>

            @endif
