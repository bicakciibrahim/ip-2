@extends('./layout')

@section('title', 'Çalışanlar')

@section('content')
    <section class="container mx-auto py-12 px-6">
        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200 relative">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Tüm Çalışanlar</h2>

            <a href="{{ route('employee.create') }}" class="py-2 px-6 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 transition duration-300 absolute top-4 right-4">
                Çalışan Ekle
            </a>



            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($employees as $employee)
                    <div class="bg-gray-50 p-6 rounded-lg shadow-md transform hover:scale-105 hover:bg-blue-50 transition-transform duration-300 ease-in-out">
                        <div class="flex justify-between items-center mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gray-300 rounded-full flex justify-center items-center text-white">
                                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9 5-9 5-9-5 9-5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9 5V9l9 5z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-semibold text-gray-800">{{ $employee->ad }} {{ $employee->soyad }}</h3>
                                    <p class="text-gray-500 text-sm">{{ $employee->email }}</p>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-700">
                            <strong>Çalışan Türü:</strong>
                            @if ($employee->employeeType)
                                {{ $employee->employeeType->tur_adi }}
                            @else
                                Belirtilmemiş
                            @endif
                        </p>

                        <div class="mt-4">
                            <a href="/calisan/{{ $employee->id }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Detayları Görüntüle</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Ana Sayfaya Dön Butonu -->
    <div class="flex justify-center mt-12">
        <a href="{{ url('/') }}" class="py-2 px-6 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Ana Sayfaya Dön
        </a>
    </div>
@endsection
