<x-layout-section>
	 @if (session('success'))
        <x-alert type="success">{{ session('success') }}</x-alert>
    @elseif (session('error'))
        <x-alert type="error">{{ session('error') }}</x-alert>
    @endif
	<x-hero-section />
	<x-main-section :blogs="$blogs"/>
</x-layout-section>


