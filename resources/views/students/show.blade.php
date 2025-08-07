@extends('layouts.app')
@foreach ($student as $data)
<div>
	<x-page>
		<a href="/students/">
			<x-page.button>
				<- Back
			</x-page.button>
		</a>
		<x-page.header>
			<x-page.photo src="{{ $data['foto'] }}" alt="{{ $data['foto'] }}"></x-page.photo>
			<x-page.headerInfo>
				<x-page.name>
					{{ $data['nama'] }}
				</x-page.name>
				<x-page.username>
					{{ "@".$data['username'] }}
				</x-page.username>
			</x-page.headerInfo>
		</x-page.header>
		<x-page.desc>
			Kelas: 
			{{ $data['kelas'] }}
			, Hobi:
			{{ $data['hobi'] }} <br><br>
			Description: <br>
			{{ $data['deskripsi'] }} 
		</x-page.desc>
	</x-page>
</div>
@endforeach