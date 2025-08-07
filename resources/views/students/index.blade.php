@extends('layouts.app')
<div class="flex flex-row flex-wrap">
	@foreach ($students as $data)
	<x-card>
		<x-card.header>
			<x-card.photo src="{{ $data['foto'] }}" alt="{{ $data['foto'] }}"></x-card.photo>
			<div>
				<x-card.name>
					{{ $data['nama'] }}
				</x-card.name>
				<x-card.username>
					{{ '@'.$data['username'] }}
				</x-card.username>
			</div>
		</x-card.header>
		<x-card.desc>
			{{ $data['deskripsi'] }}
		</x-card.desc>
		<a href="/students/{{ $data['id'] }}">
			<x-card.button>
				Lihat Detail
			</x-card.button>
		</a>
	</x-card>
	@endforeach
</div>

