@extends('layouts.dashboard')

@section('content')
<div>
    <div class="my-6 container jutify-center mx-auto text-white">

        <table>
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nim</th>
                    <th class="border px-4 py-2">Mulai</th>
                    <th class="border px-4 py-2">Berakhir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengabdian as $data)
                <tr>
                    <td class="border px-4 py-2">{{ $data->nim }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($data->start_from)->format('Y-m-d') }}</td>
                    <td class="border px-4 py-2">{{ $data->end_on }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection()