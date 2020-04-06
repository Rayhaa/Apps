@extends('layouts.dashboard')

@section('content')
    <div class="flex justify-center my-6 container mx-auto">
        <table>
            <thead>
                <tr>
                    <th class="border px-4 py-2">Nim</th>
                    <th class="border px-4 py-2">Kelas</th>
                    <th class="border px-4 py-2">Praktikum</th>
                    <th class="border px-4 py-2">Jadwal</th>
                    <th class="border px-4 py-2">Absen</th>
                    <th class="border px-4 py-2">Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                @foreach($praktikum as $data)
                    <tr>
                        <td class="border px-4 py-2">{{ $data->nim }}</td>
                        <td class="border px-4 py-2">{{ $data->kelas }}</td>
                        <td class="border px-4 py-2">{{ $data->praktikum }}</td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($data->jadwal)->format('l, d F Y H:i') }}</td>
                        <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($data->absen)->format('l, d F Y H:i') }}</td>
                        <td class="border px-4 py-2">
                                
                            @if($keterlambatan =  \Carbon\Carbon::parse($data->jadwal)->diffInMinutes($data->absen) > 30)
                                <!-- <p>Terlambat {{ \Carbon\Carbon::parse($data->jadwal)->diffInMinutes($data->absen) - 30 }} menit</p> -->
                                <p>Terlambat</p>
                            @else
                                <p>Tepat Waktu</p>
                            @endif    
                        </td>
                    </tr>


                @endforeach
            </tbody>
        </table>
    </div>
@endsection 