@extends('gentelella.layouts.app')

@section('content')
    <iframe
        src="{{$iframeUrl}}"
        frameborder="0"
        width="100%"
        height="1000"
        allowtransparency>
    </iframe>

    @if(auth()->user()->can('VER DASHBOARD AVANCADO'))

        <iframe
            src="{{$iframeUrl2}}"
            frameborder="0"
            width="100%"
            height="700"
            allowtransparency>
        </iframe>

    @endif
@endsection

@push('scripts')

	<script type="text/javascript">


	</script>
@endpush
