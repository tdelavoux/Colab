@if (session()->has('confirmMessage'))
    <script>
        $.notify('{{ session()->get('confirmMessage') }}', "success");
    </script>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            $.notify('{{ $error }}', "error");
        </script>
    @endforeach
@endif