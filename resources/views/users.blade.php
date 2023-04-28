<x-header componentName="Users" />
<h1>Users Page</h1>
@include('innerusers')

@csrf
<script>
    var data = @json($names);
    console.log(data);
</script>

<x-footer />