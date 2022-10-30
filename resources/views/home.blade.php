@extends('mainLayout.main')

@section('container')
		<!--sofa-collection start -->
		<section id="sofa-collection">
			<div class="owl-carousel owl-theme" id="collection-carousel">
				<div class="sofa-collection collectionbg1">
                    <p>
                        <a href="https://pin.it/1yjrjqy"><img src="{{ asset('storage/download.jpeg') }}" alt="download" width= "1100"></a>
                    </p>
					<div class="container">
						<div class="sofa-collection-txt">
						</div>
					</div>	
				</div><!--/.sofa-collection-->
				<div class="sofa-collection collectionbg2">
					<div class="container">
						<div class="sofa-collection-txt">
							<h5>Proof adalah album antologi pertama yang telah dirilis oleh boy band Korea Selatan BTS, pada 10 Juni 2022, melalui Big Hit Music. Single utama album"Yet To Come" yang di rilis pada hari yang sama.</h5>
							<p>Di akhir konser terakhir BTS Permission to Dance on Stage di Allegiant Stadium pada 16 April 2022, 
                                sebuah video yang menampilkan cuplikan video musik dari era sebelumnya dalam diskografi band diputar. 
                                album Proof adalah gambaran dari jiwa mereka. Dimulai dengan Born Singer di CD pertama, lagu ini memang tidak dirilis secara resmi seperti lagu-lagu lain. 
                                Namun, Born Singer punya tempat khusus di hati BTS, juga ARMY, karena bercerita tentang isi hati BTS soal terwujudnya impian menjadi musisi.
                                berikut merupakan Merch yang di keluarkan oleh BTS di Comeback kali ini.
                            </p>
						</div>
					</div>
				</div><!--/.sofa-collection-->
			</div><!--/.collection-carousel-->

		</section><!--/.sofa-collection-->
		<!--sofa-collection end -->
    <div class="row">
        @foreach ($allBarang as $no => $barang)
        <div class="col-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/'. $barang->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $barang->namaBarang }}</h5>
                    <p class="card-text">Rp. {{ $barang->harga }}</p>
                    <p class="card-text">tersisa : {{ $barang->stok }}</p>
                    <a href="{{ route('reviewbrg', $barang->id) }}" class="btn btn-danger">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection