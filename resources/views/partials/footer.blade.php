<footer
    style="background-color: #2E5930; padding: 10px 20px; color: white; font-size: 14px; text-align: center; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 0; width: 100%; z-index: 10;">
    <div style="display: flex; align-items: center;">
        <img src="{{ asset('assets/img/logo-circle.png') }}" alt="Logo PestGuard"
            style="height: 30px; vertical-align: middle; margin-right: 10px; display: inline-block;">
        <strong>PestGuard</strong>
    </div>
    <div style="text-align: center;">
        <p style="margin: 0;">Jl. Kumbang No. 33<br>16128 Bogor, Jawa Barat</p>
    </div>
    <div style="text-align: right;">
        <a href="https://sv.ipb.ac.id" style="color: white; text-decoration: none;">
            <strong>Sekolah Vokasi IPB - Tangguh, Terampil, Berkarakter</strong>
        </a>
    </div>
</footer>


{{-- <footer
    style="background-color: #2E5930; padding: 10px 0; color: white; font-size: 14px; display: flex; justify-content: flex-start; align-items: center; position: fixed; bottom: 0; width: 100%; z-index: 10; margin: 0;">
    <!-- Bagian kiri -->
    <div style="display: flex; align-items: center; margin-right: auto; padding-left: 0;">
        <img src="{{ asset('assets/img/logo-circle.png') }}" alt="Logo PestGuard"
            style="height: 30px; vertical-align: middle; margin-right: 10px;">
        <strong>PestGuard</strong>
    </div>
    <!-- Bagian tengah -->
    <div style="text-align: center; margin: 0 auto;">
        <p style="margin: 0;">Jl. Kumbang No. 33<br>16128 Bogor, Jawa Barat</p>
    </div>
    <!-- Bagian kanan -->
    <div style="text-align: right; padding-right: 10px;"> 
        <a href="https://sv.ipb.ac.id" style="color: white; text-decoration: none;">
            <strong>Sekolah Vokasi IPB - Tangguh, Terampil, Berkarakter</strong>
        </a>
    </div>
</footer> --}}


<style>
    /* Reset dasar */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* HTML dan Body mengambil seluruh tinggi */
    html,
    body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    /* Tata letak fleksibel untuk memastikan footer di bawah */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    /* Main content mengambil sisa ruang */
    main {
        flex: 1;
        overflow: auto;
        padding-bottom: 100px;
        /* Pastikan konten bisa di-scroll jika panjang */
        padding: 20px;
        background-color: #f9f9f9;
    }

    /* Footer selalu di bawah */
    footer {
        z-index: 100;
        background-color: #2E5930;
        color: white;
        text-align: center;
        padding: 15px 20px;
        font-size: 14px;
    }

    /* Gaya tambahan untuk elemen dalam footer */
    footer div {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    footer img {
        height: 30px;
        margin-right: 10px;
    }

    footer p {
        margin: 0;
    }

    footer a {
        color: white;
        text-decoration: none;
    }

    footer {
        margin: 0;
    }

    /*  */

    /* body, html {
        margin: 0;
        padding: 0;
    }

    footer {
        margin: 0;
        padding: 0;
    } */
</style>
