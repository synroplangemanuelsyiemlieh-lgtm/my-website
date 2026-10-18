<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users & disputes | Platform admin</title>
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
            <a class="nav-link active bg-primary text-white rounded px-3" href="admin1.html">Users & disputes</a>
            <a class="nav-link text-white-50" href="admin3.html">Fees & settings</a>
            <a class="nav-link text-white-50" href="admin4.html">Reports</a>
            <a class="nav-link text-white-50" href="admin5.html">Menu moderation</a>
        </nav>
    </aside>

    <!-- Main -->
    <main class="flex-grow-1 p-4">
        <h1 class="h3 mb-4">Users & disputes</h1>

        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#u">Users</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#d">Disputes</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- Users Tab -->
            <div class="tab-pane fade show active" id="u">
                <div class="card shadow-sm border-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Chidi Okafor</td>
                                    <td>Customer</td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-secondary">Block</button></td>
                                </tr>
                                <tr>
                                    <td>Maria Santos</td>
                                    <td>Restaurant owner</td>
                                    <td><span class="badge text-bg-success">Active</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-secondary">Block</button></td>
                                </tr>
                                <tr>
                                    <td>Sam Patel</td>
                                    <td>Customer</td>
                                    <td><span class="badge text-bg-danger">Blocked</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-dark">Unblock</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Disputes Tab -->
            <div class="tab-pane fade" id="d">
                <div class="card shadow-sm border-0">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Case</th>
                                    <th>Customer</th>
                                    <th>Restaurant</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#104</td>
                                    <td>Chidi Okafor</td>
                                    <td>Lagos Grill House</td>
                                    <td><span class="badge text-bg-warning">Open</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-primary">Resolve</button></td>
                                </tr>
                                <tr>
                                    <td>#101</td>
                                    <td>Lena Wu</td>
                                    <td>Sakura Table</td>
                                    <td><span class="badge text-bg-success">Resolved</span></td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-primary">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>