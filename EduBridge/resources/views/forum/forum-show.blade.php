<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            width: 90%;
            margin: auto;
        }

        header {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        header img {
            height: 40px;
        }

        header nav a {
            font-size: 16px;
            color: #333;
            text-decoration: none;
            margin: 0 10px;
            padding: 5px 0;
        }

        header nav a:hover {
            color: #007BFF;
        }

        header nav a.fw-bold {
            font-weight: bold;
            border-bottom: 2px solid #333;
        }

        header .user {
            font-size: 14px;
            font-weight: normal;
            color: #555;
        }

        main {
            padding: 20px 0;
        }

        main h1 {
            margin-bottom: 10px;
            font-size: 24px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 5px;
        }

        .forum-section {
            margin-top: 20px;
        }

        .forum-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .forum-header input,
        .forum-header select,
        .forum-header button {
            padding: 5px 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .forum-header button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        
        .action {
            padding: 5px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .action:hover {
            background-color: #f0f0f0;
            border-radius: 5px;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table thead {
            background-color: #f5f5f5;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            color: #fff;
        }

        .badge.pemrograman {
            background-color: #007BFF;
        }

        .badge.visualisasi {
            background-color: #28a745;
        }

        .badge.data-statistik {
            background-color: #ffc107;
        }

        .badge.bisnis {
            background-color: #17a2b8;
        }

        .action {
            padding: 5px;
            margin-right: 5px;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="d-flex justify-content-between align-items-center py-2">
                <!-- Logo -->
                <div class="d-flex align-items-center">
                    <img src="image/logo-edubridge.png" alt="Edu Bridge Logo" style="height: 40px; margin-right: 15px;">
                </div>
                <!-- Navbar -->
                <nav>
                    <a href="/dashboard" class="px-3">Dashboard</a>
                    <a href="/find-mentor" class="px-3">Find Mentor</a>
                    <a href="/chat" class="px-3">Chat</a>
                    <a href="/forum" class="px-3 fw-bold">Forum</a>
                    <a href="/find-friend" class="px-3">Find Friend</a>
                </nav>
                <!-- User Info -->
                <div class="user text-dark">
                    Yohan Artha Pratama
                </div>
            </div>
        </header>        
        <main>
            <h1>Forum</h1>
            <div class="forum-section">
                <div class="forum-header">
                    <input type="text" placeholder="Search Forum Name">
                    <select>
                        <option value="all">All Type</option>
                    </select>
                    <a href="/forum-create"><button>Create Forum +</button></a>
                </div>
                <p>Buka forum untuk membuka ruang diskusi antar siswa</p>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Forum</th>
                            <th>Dibuat Oleh</th>
                            <th>Komentar</th>
                            <th>Tipe Forum</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>FrontEnd Developer</td>
                            <td>Yohan Artha Pratama <br> 02 Mei 2024</td>
                            <td>7 Komentar</td>
                            <td><span class="badge pemrograman">PEMROGRAMAN</span></td>
                            <td>
                                <a href="/forum-read" class="action view">
                                    <img src="image/View-Toggle.png" alt="View" style="height: 25px; width: 25px;">
                                </a>
                                <a href="/forum-update" class="action edit">
                                    <img src="image/Update-Toggle.png" alt="Edit" style="height: 25px; width: 25px;">
                                </a>
                                <button class="action delete" onclick="confirmDelete()">
                                    <img src="image/Trash-Toggle.png" alt="Delete" style="height: 25px; width: 25px;">
                                </button>
                                <script>
                                    function confirmDelete() {
                                        Swal.fire({
                                            title: "Are you sure?",
                                            text: "You won't be able to revert this!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Yes, delete it!"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    title: "Deleted!",
                                                    text: "Your file has been deleted.",
                                                    icon: "success"
                                                });
                                                // Tambahkan logika penghapusan file di sini, jika diperlukan
                                            }
                                        });
                                    }
                                </script>
                            </td>                            
                        </tr>
                        <tr>
                            <td>BackEnd Developer</td>
                            <td>Auvefa Rizky Pratama <br> 02 Mei 2024</td>
                            <td>5 Komentar</td>
                            <td><span class="badge pemrograman">PEMROGRAMAN</span></td>
                            <td>
                                <a href="/forum-read" class="action view">
                                    <img src="image/View-Toggle.png" alt="View" style="height: 25px; width: 25px;">
                                </a>
                                <a href="/forum-update" class="action edit">
                                    <img src="image/Update-Toggle.png" alt="Edit" style="height: 25px; width: 25px;">
                                </a>
                                <button class="action delete" onclick="confirmDelete()">
                                    <img src="image/Trash-Toggle.png" alt="Delete" style="height: 25px; width: 25px;">
                                </button>
                                <script>
                                    function confirmDelete() {
                                        Swal.fire({
                                            title: "Are you sure?",
                                            text: "You won't be able to revert this!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Yes, delete it!"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    title: "Deleted!",
                                                    text: "Your file has been deleted.",
                                                    icon: "success"
                                                });
                                                // Tambahkan logika penghapusan file di sini, jika diperlukan
                                            }
                                        });
                                    }
                                </script>
                            </td>                            
                        </tr>
                        <tr>
                            <td>UI/UX Design</td>
                            <td>Anindhita Febriandini <br> 02 Mei 2024</td>
                            <td>9 Komentar</td>
                            <td><span class="badge visualisasi">VISUALISASI</span></td>
                            <td>
                                <a href="/forum-read" class="action view">
                                    <img src="image/View-Toggle.png" alt="View" style="height: 25px; width: 25px;">
                                </a>
                                <a href="/forum-update" class="action edit">
                                    <img src="image/Update-Toggle.png" alt="Edit" style="height: 25px; width: 25px;">
                                </a>
                                <button class="action delete" onclick="confirmDelete()">
                                    <img src="image/Trash-Toggle.png" alt="Delete" style="height: 25px; width: 25px;">
                                </button>
                                <script>
                                    function confirmDelete() {
                                        Swal.fire({
                                            title: "Are you sure?",
                                            text: "You won't be able to revert this!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Yes, delete it!"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    title: "Deleted!",
                                                    text: "Your file has been deleted.",
                                                    icon: "success"
                                                });
                                                // Tambahkan logika penghapusan file di sini, jika diperlukan
                                            }
                                        });
                                    }
                                </script>
                            </td>                            
                        </tr>
                        <tr>
                            <td>Data Science</td>
                            <td>Stefanus Jesano Pramathana <br> 02 Mei 2024</td>
                            <td>2 Komentar</td>
                            <td><span class="badge data-statistik">DATA & STATISTIK</span></td>
                            <td>
                                <a href="/forum-read" class="action view">
                                    <img src="image/View-Toggle.png" alt="View" style="height: 25px; width: 25px;">
                                </a>
                                <a href="/forum-update" class="action edit">
                                    <img src="image/Update-Toggle.png" alt="Edit" style="height: 25px; width: 25px;">
                                </a>
                                <button class="action delete" onclick="confirmDelete()">
                                    <img src="image/Trash-Toggle.png" alt="Delete" style="height: 25px; width: 25px;">
                                </button>
                                <script>
                                    function confirmDelete() {
                                        Swal.fire({
                                            title: "Are you sure?",
                                            text: "You won't be able to revert this!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Yes, delete it!"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    title: "Deleted!",
                                                    text: "Your file has been deleted.",
                                                    icon: "success"
                                                });
                                                // Tambahkan logika penghapusan file di sini, jika diperlukan
                                            }
                                        });
                                    }
                                </script>
                            </td>                            
                        </tr>
                        <tr>
                            <td>Digital Marketing</td>
                            <td>Stefanus Jesano Pramathana <br> 02 Mei 2024</td>
                            <td>4 Komentar</td>
                            <td><span class="badge bisnis">BISNIS</span></td>
                            <td>
                                <a href="/forum-read" class="action view">
                                    <img src="image/View-Toggle.png" alt="View" style="height: 25px; width: 25px;">
                                </a>
                                <a href="/forum-update" class="action edit">
                                    <img src="image/Update-Toggle.png" alt="Edit" style="height: 25px; width: 25px;">
                                </a>
                                <button class="action delete" onclick="confirmDelete()">
                                    <img src="image/Trash-Toggle.png" alt="Delete" style="height: 25px; width: 25px;">
                                </button>
                                <script>
                                    function confirmDelete() {
                                        Swal.fire({
                                            title: "Are you sure?",
                                            text: "You won't be able to revert this!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "Yes, delete it!"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire({
                                                    title: "Deleted!",
                                                    text: "Your file has been deleted.",
                                                    icon: "success"
                                                });
                                                // Tambahkan logika penghapusan file di sini, jika diperlukan
                                            }
                                        });
                                    }
                                </script>
                            </td>                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>