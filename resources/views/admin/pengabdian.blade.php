@extends('layouts.dashboard')

@section('content')
<div>
    <div class="flex justify-center my-6 container mx-auto">

        <table>
            <thead>
                <tr>
                    <th class="border px-4 py-2">No</th>
                    <th class="border px-4 py-2">Nim</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Mulai</th>
                    <th class="border px-4 py-2">Berakhir</th>
                    <th class="border px-4 py-2">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengabdian as $data)
                <tr>
                    <td class="border px-4 py-2">{{ ++$i }}</td>
                    <td class="border px-4 py-2">{{ $data->nim }}</td>
                    <td class="border px-4 py-2">{{ $data->name }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($data->start_from)->format('l, d F Y H:i') }}</td>
                    <td class="border px-4 py-2 text-center">{{ $data->end_on ? '' : '-' }}</td>
                    <td class="border px-4 py-2">
                        <button class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
  Berhentikan
</button>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>
            <div class="flex">
    
                {{ $pengabdian->links() }}
            </div>    
</div>
@endsection()