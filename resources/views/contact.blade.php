<title>İLETİŞİM</title>
@extends('layout')

@section('main')

    @if($errors->any())
        <div style="color: #ff0000;">
            
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h5>İLETİŞİM FORMU</h5>

    <form action="" method="POST">
        @csrf
        İsminiz:
        <br />
        <input type="text" name="isim" value="{{ old('isim') }}" />
        <br /><br />

        Konu:
        <br/>
        <select name="konu">
            <option value="Öğrenci İşleri" {{ old('konu') == 'Öğrenci İşleri' ? 'selected' : '' }}>Öğrenci İşleri</option>
            <option value="Sosyal Olanaklar" {{ old('konu') == 'Sosyal Olanaklar' ? 'selected' : '' }}>Sosyal Olanaklar</option>
            <option value="Diğer" {{ old('konu') == 'Diğer' ? 'selected' : '' }}>Diğer</option>
        </select>
        <br /><br />

        Mesajınız:
        <br/>
        <textarea name="mesaj">{{ old('mesaj') }}</textarea>
        <br/><br/>

        <input type="submit" value="Mesajı Gönder">
    </form>

@endsection
