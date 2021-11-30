@extends('layouts.app')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-6">
            <div class="card-border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>kiri</div>
                        <div> 
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 6.25278V19.2528M12 6.25278C10.8321 5.47686 9.24649 5 7.5 5C5.75351 5 4.16789 5.47686 3 6.25278V19.2528C4.16789 18.4769 5.75351 18 7.5 18C9.24649 18 10.8321 18.4769 12 19.2528M12 6.25278C13.1679 5.47686 14.7535 5 16.5 5C18.2465 5 19.8321 5.47686 21 6.25278V19.2528C19.8321 18.4769 18.2465 18 16.5 18C14.7535 18 13.1679 18.4769 12 19.2528" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg> 
                        </div>
                    </div>

                    <div>
                        <label for="" class="text-secondary">
                            Jumlah Buku Yang Dipinjam
                        </label>
                    </div>

                    <div>
                        <a class="btn btn-info" href="#"> Lihat daftar Peminjaman </a>
                    </div>

                </div>
            </div>
        </div>           

    <div class="col-md-6">
        <div class="card-border-0 shadow-sm">
            <div class="card-body">
            <div class="d-flex justify-content-between">
                <div>kiri</div>
                <div>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 21H17C18.1046 21 19 20.1046 19 19V9.41421C19 9.149 18.8946 8.89464 18.7071 8.70711L13.2929 3.29289C13.1054 3.10536 12.851 3 12.5858 3H7C5.89543 3 5 3.89543 5 5V19C5 20.1046 5.89543 21 7 21Z" stroke="#4A5568" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        <div>
            <label for="" class="text-secondary">
                Daftar Buku
            </label>
        </div>
        <div>
            <a class="btn btn-info" href="#"> Cek daftar buku </a>
        </div>
    </div>
</div>
</div>
@endsection


