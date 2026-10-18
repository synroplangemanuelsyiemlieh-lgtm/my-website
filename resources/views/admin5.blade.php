<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu moderation | Platform admin</title>
    <!-- Bootstrap Only -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="bg-light">

<div class="d-flex min-vh-100">
    <!-- Sidebar -->
    <aside class="bg-dark text-white p-3" style="width: 250px;">
        <div class="fw-semibold fs-5 mb-4">Platform admin</div>
        <nav class="nav flex-column gap-1">
            <a class="nav-link text-white-50" href="admin2.html">Restaurants</a>
            <a class="nav-link text-white-50" href="admin1.html">Users & disputes</a>
            <a class="nav-link text-white-50" href="admin3.html">Fees & settings</a>
            <a class="nav-link text-white-50" href="admin4.html">Reports</a>
            <a class="nav-link active bg-primary text-white rounded px-3" href="admin5.html">Menu moderation</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow-1 p-4">
        <h1 class="h3 mb-2">Menu moderation</h1>
        <p class="text-muted mb-4">Items reported by customers. Restaurants manage their own menus; remove an item only when it breaks platform rules.</p>
        
        <div class="card shadow-sm border-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Item</th>
                            <th>Restaurant</th>
                            <th>Reason</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="fw-medium">Spicy Challenge Wings</td>
                            <td>Lagos Grill House</td>
                            <td><span class="badge bg-warning text-dark">Misleading photo</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary">Keep</button>
                                <button class="btn btn-sm btn-outline-danger">Remove item</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="fw-medium">Free Dessert Deal</td>
                            <td>Green Bowl</td>
                            <td><span class="badge bg-danger">Offensive description</span></td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-secondary">Keep</button>
                                <button class="btn btn-sm btn-outline-danger">Remove item</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>