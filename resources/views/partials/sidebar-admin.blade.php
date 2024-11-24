<aside class="sidebar bg-dark text-white d-flex flex-column shadow-sm">
    <div class="sidebar-header py-4 px-4">
    </div>
    <nav class="sidebar-nav flex-grow-1">
        <ul class="list-unstyled">
            <!-- Dashboard Link -->
            <li>
                <a href="/admin/base" class="sidebar-link">
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- reports Link -->
            <li>
                <a href="/admin/admin_reports" class="sidebar-link">
                    <span>reports</span>
                </a>
            </li>

            <!-- Submenu Example -->
            <li>
                <a href="/admin/admin_petunjuk" class="sidebar-link">
                    <span>Petunjuk</span>
                </a>
            </li>

            <!-- Other Links -->
            <li>
                <a href="#" class="sidebar-link">
                    <span>Update 4</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-link">
                    <span>Update 5</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>

<style>
    /* Sidebar Styling */
    .sidebar {
        width: 250px;
        height: calc(100vh + 35px);
        /* Menyesuaikan tinggi untuk menghilangkan celah putih */
        position: fixed;
        top: -35px;
        /* Mengangkat sidebar sedikit ke atas */
        left: 0;
        padding-top: 56px;
        /* Menjaga agar tidak tumpang tindih dengan navbar */
        background-color: #2E5930;
    }

    /* Styling untuk elemen lainnya tetap sama */
    .sidebar-header {
        border-bottom: 1px solid #2E5930;
    }

    .sidebar-nav ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .sidebar-link {
        display: block;
        padding: 10px 20px;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .sidebar-link:hover {
        background-color: #2E5930;
    }

    .sidebar-sublink {
        display: block;
        padding: 8px 20px;
        color: #adb5bd;
        text-decoration: none;
        font-size: 13px;
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .sidebar-sublink:hover {
        color: #ffffff;
        background-color: #2E5930;
    }

    .collapse {
        padding-left: 10px;
    }
</style>
