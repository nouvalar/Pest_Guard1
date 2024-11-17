<footer
    style="background-color: #2E5930; padding: 10px 20px; color: white; font-size: 14px; text-align: center; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 0; width: 100%; z-index: 10;">
    <div style="display: flex; align-items: center;">
        <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo PestGuard"
            style="height: 30px; vertical-align: middle; margin-right: 10px; display: inline-block;">
        <strong>PestGuard</strong>
    </div>
    <div style="text-align: center;">
        <p style="margin: 0;">Jl. Kumbang No. 33<br>16128 Bogor, West Java</p>
    </div>
    <div style="text-align: right;">
        <a href="https://sv.ipb.ac.id" style="color: white; text-decoration: none;">
            <strong>Sekolah Vokasi IPB - Tangguh, Terampil, Berkarakter</strong>
        </a>
    </div>
</footer>

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
        /* Pastikan konten bisa di-scroll jika panjang */
        padding: 20px;
        background-color: #f9f9f9;
    }

    /* Footer selalu di bawah */
    footer {
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
</style>