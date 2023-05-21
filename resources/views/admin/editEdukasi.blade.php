@extends('layout.admin')
@section('title', 'createEdukasi')


@section('content')
@parent
<section>
    <form method="POST" action="{{ route('admins.prosesUpdateMateri', ['judul' => $data->judul]) }}" enctype="multipart/form-data" >
        @csrf
        <div style="max-width: 600px; margin: 0 auto;">
          <table style="width: 100%;">
            
            <tr>
                <td><label for="materi">Materi:</label></td>
                <td>
                    <select id="materi" name="materi" required style="margin-bottom: 10px; width: 200px; height:35px;">
                        <option value="">Pilih Materi</option>
                        <option value="Self Awareness">Self Awareness</option>
                        <option value="Self Regulation">Self Regulation</option>
                        <option value="Self Adjustment">Self Adjustment</option>
                        <option value="Self Motivation">Self Motivation</option>
                        <option value="Empathy">Empathy</option>
                        <option value="Social Skills">Social Skill</option>
                        <!-- tambahkan opsi lainnya sesuai kebutuhan -->
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="judul">Judul:</label></td>
                <td><input type="text" id="judul" name="judul" required style="margin-bottom: 10px;" value="{{ isset($data) ? $data->judul : '' }}"></td>
            </tr>
            <tr>
                <td><label for="paragraf1">Paragraf 1:</label></td>
                <td><textarea id="paragraf1" name="paragraf1" required style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf1 : '' }}</textarea></td>
            </tr>
            <tr>
                <td><label for="paragraf2">Paragraf 2:</label></td>
                <td><textarea id="paragraf2" name="paragraf2" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf2 : '' }}</textarea></td>
            </tr>
            <tr>
                <td><label for="paragraf3">Paragraf 3:</label></td>
                <td><textarea id="paragraf3" name="paragraf3" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf3 : '' }}</textarea></td>
            </tr>
            <tr>
                <td><label for="paragraf4">Paragraf 4:</label></td>
                <td><textarea id="paragraf4" name="paragraf4" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf4 : '' }}</textarea></td>
            </tr>
            <tr>
                <td><label for="paragraf5">Paragraf 5:</label></td>
                <td><textarea id="paragraf5" name="paragraf5" style="width: 100%; height: 100px; margin-bottom: 10px;">{{ isset($data) ? $data->paragraf5 : '' }}</textarea></td>
            </tr>
            <tr>
                <td><label for="image">Image:</label></td>
                <td><input type="file" id="image" name="image"></td>
            </tr>
          </table>
        </div>
        <div class="pt-5">
            <button type="submit" >Simpan</button>
        </div>
      </form>
      
      
</section>
@endsection